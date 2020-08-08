<?php
namespace frontend\controllers;

use Yii;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;
use app\models\Ipinfotable;
use app\models\Neighbours;
use app\models\Searchedip;
use app\models\Country;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
        $model = new Ipinfotable();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {

            $dataposted = Yii::$app->request->post(); 
            
            $ip = $dataposted['Ipinfotable']['ipaddress'];

            return $this->redirect(['/site/ipdetails','ipaddress' => $ip]);

          //  throw new \yii\web\HttpException(403,' ip address got here ! ');
        }
        else
        {
            return $this->render('index', [
                'model' => $model,
            ]);

        }

        
    }


    public function actionIpdetails($ipaddress)
    {
       // throw new \yii\web\HttpException(403,' ip address got here ! '.$ipaddress);

        $ipdetail = Ipinfotable::find()
        ->where(['ipaddress' => $ipaddress])
        ->one();

        if(is_object($ipdetail))
        {
            $searchedipdetail = $ipdetail;

            $cneighbours = Neighbours::find()
            ->where(['country' => $ipdetail->country])
            ->all();

        }
        else
        {

           // $ip = $_SERVER['REMOTE_ADDR'];
            $ip = $ipaddress;

            $ch = curl_init('http://ipwhois.app/json/'.$ip);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $json = curl_exec($ch);
            curl_close($ch);

            // Decode JSON response
            $ipwhois_result = json_decode($json, true);

            // Country code output, field "country_code"
            echo $ipwhois_result['country_code'];
           // throw new \yii\web\HttpException(403,' ip address details : '.$ipwhois_result['country']);
            $countrycode = $ipwhois_result['country_code'];
            $country = $ipwhois_result['country'];
            $continent = $ipwhois_result['continent'];
            $flagimage = $ipwhois_result['country_flag'];
            $city = $ipwhois_result['city'];
            $timezone = $ipwhois_result['timezone'];

            if($ipwhois_result['latitude'] > 0)
            {
                $equator_relative = "Above the Equator";
            }
            else
            {
                $equator_relative = "Below the Equator";
            }

            //Get data of Neighbouring Countries
            $neighbours = $ipwhois_result['country_neighbours'];
            $neighbours_arr = explode (",", $neighbours);


            $transaction = Yii::$app->db->beginTransaction(); // Begin transaction to insert data
            try
            {


            $connection = \Yii::$app->db;          
            $connection->createCommand()->insert('ipinfotable', [
            'ipaddress' => $ipaddress,
            //'downlineid' => $session['userid'],
            'continent' => $continent,
            'country' => $country,
            'flagimage' => $flagimage,
            'city' => $city,
            'equator_relative' => $equator_relative,
            'timezone' => $timezone,
            //'age' => 30,
            ])->execute();


            //insert data for country Neighbours
            foreach ($neighbours_arr as $neighbour) 
            {

                $nbdetail = Country::find()
                ->where(['code2' => $neighbour])
                ->one();

            $connection->createCommand()->insert('neighbours', [
            'country' => $country,
            //'downlineid' => $session['userid'],
            'neighbour' => $nbdetail->country_name,
            ])->execute();
            }


            //Add new data into searchedip table !

            $searchedip = Searchedip::find()   //First check if the ip address has been added before !
            ->where(['ipaddress' => $ipaddress])
            ->one();

            if(!is_object($searchedip))
            {

            $connection->createCommand()->insert('searchedip', [
            'ipaddress' => $ipaddress,
            //'downlineid' => $session['userid'],
            'country' => $country,
            ])->execute();

            }









            $transaction->commit();  // Commit the Transaction !
            }
            catch(Exception $e)
            {
                $transaction->rollBack();
                throw $e;  
            }
            catch (\Throwable $e) {  // For PHP 7
            $transaction->rollBack();
            throw $e;
            }

            //Fetch the new detail from database

            $ipdetail = Ipinfotable::find()
            ->where(['ipaddress' => $ipaddress])
            ->one();

            $cneighbours = Neighbours::find()
            ->where(['country' => $country])
            ->all();



            $searchedipdetail = $ipdetail;

        }



            return $this->render('ipdetails', [
                'model1' => $searchedipdetail,
                'model2' => $cneighbours,
            ]);

    }



    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }



    public function actionPastsearch()
    {
            //$allsearches = Ipinfotable::findAll();
           // $allsearches = Ipinfotable::find()->all();

            $allsearches = Ipinfotable::find()        
            ->orderBy([ 'recdate' => SORT_DESC])
            //->limit(1)
            ->all();

            return $this->render('pastsearch', [
                'model' => $allsearches,
            ]);

    }





    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending email.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }

    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }
}
