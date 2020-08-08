<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ipinfotable".
 *
 * @property string $sno
 * @property string $ipaddress
 * @property string $continent
 * @property string $country
 * @property string $flagimage
 * @property string $city
 * @property string $equator_relative
 * @property string $timezone
 * @property string $recdate
 */
class Ipinfotable extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ipinfotable';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ipaddress'], 'required'],
            [['recdate'], 'safe'],
            [['ipaddress'], 'string', 'max' => 30],
            [['continent'], 'string', 'max' => 100],
            [['country', 'flagimage'], 'string', 'max' => 200],
            [['city', 'equator_relative', 'timezone'], 'string', 'max' => 60]
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
            'continent' => 'Continent',
            'country' => 'Country',
            'flagimage' => 'Flagimage',
            'city' => 'City',
            'equator_relative' => 'Equator Relative',
            'timezone' => 'Timezone',
            'recdate' => 'Recdate',
        ];
    }
}
