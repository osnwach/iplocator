<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "country".
 *
 * @property string $sno
 * @property string $code1
 * @property string $code2
 * @property string $tld
 * @property string $country_name
 */
class Country extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'country';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code1', 'code2', 'tld', 'country_name'], 'required'],
            [['code1', 'code2'], 'string', 'max' => 2],
            [['tld'], 'string', 'max' => 3],
            [['country_name'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sno' => 'Sno',
            'code1' => 'Code1',
            'code2' => 'Code2',
            'tld' => 'Tld',
            'country_name' => 'Country Name',
        ];
    }
}
