<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "searchedip".
 *
 * @property string $sno
 * @property string $ipaddress
 * @property string $country
 * @property string $searchdate
 */
class Searchedip extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'searchedip';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ipaddress', 'country'], 'required'],
            [['searchdate'], 'safe'],
            [['ipaddress'], 'string', 'max' => 30],
            [['country'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sno' => 'Sno',
            'ipaddress' => 'Ipaddress',
            'country' => 'Country',
            'searchdate' => 'Searchdate',
        ];
    }
}
