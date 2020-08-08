<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>

<style>
input {
    line-height: 22em; 
}

#ipinfotable-ipaddress
{

    height:50px;
    font-size: 22px;
}

</style>


<div class="site-index">

    <div class="jumbotron">
        <h1>Your ip Locator!</h1>

        <p class="lead">Enter an ip address below, then click on Locate ip.</p>




        <?php $form = ActiveForm::begin(['id' => 'form-signup22', 'action' => ['site/index']]); ?>
        
        <div style="width:50%; margin:0 auto; font-size:20px">
        <?= $form->field($model, 'ipaddress')->input('ipaddress', ['placeholder' => "Enter ip address"])->label('',['class'=>'mywhite']) ?>
        </div>

        <?php //$form->field($model3, 'password')->passwordInput()->input('password', ['placeholder' => "Enter Password"])->label('Password',['class'=>'mywhite']) ?>
        <?php //$form->field($model, 'lastname')->dropDownList($country,['prompt'=>'Please Select Plan ','id'=>'signupform-state', 'style'=>'border-radius:6px;'])->label('',['class'=>'mywhite']) ?>
        <?php //$form->field($model, 'firstname')->dropDownList($country2,['prompt'=>'Choose Payment Method ','id'=>'signupform-state', 'style'=>'border-radius:6px;'])->label('',['class'=>'mywhite']) ?>
                    <input type = "hidden" value = "<?php //echo $cost;  ?>" id = "cost">
                    <input type = "hidden" value = "<?php //echo $payplan;  ?>" id = "package">
                <div class="form-group">
        <?= Html::submitButton('Locate this ip', ['class' => 'btn btn-lg btn-success mybut', 'name' => 'signup-button']) ?>
        <p><!--<a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Locate this ip</a> --></p>        

                &nbsp;&nbsp;<span id = "mtext" style = "color:green">    </span>
                </div>
        <?php ActiveForm::end(); ?>

        
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Locate any ip address</h2>

                <p>Simply enter an ip address in the serach box, then click on Locate ip button, thats all.
                our ip locator app will give you a detailed feedback with information about that ip address.
                like the country, the city, the timezone, the country flag etc.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/doc/">Yii Documentation &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Get Detailed information</h2>

                <p>You will receive a deyailed information about your searched ip address. You will even get to 
                know the neighbouring countries to that ips country of origin!. What more could you ask for ?
                Start using our ip locator app today, you will be glad you did !</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>View searched ips</h2>

                <p>Yes, you can also view a list of all the searched ips in our database. To view this link, simply click on
                view searched ips. You will be taken to a new page where you will see a list of all the ip addresses that have been
                searched in our database! Simply click on any ip address to view more details on it !</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
