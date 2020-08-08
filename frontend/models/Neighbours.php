<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "neighbours".
 *
 * @property string $sno
 * @property string $country
 * @property string $neighbour
 */
class Neighbours extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'neighbours';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['country', 'neighbour'], 'required'],
            [['country', 'neighbour'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sno' => 'Sno',
            'country' => 'Country',
            'neighbour' => 'Neighbour',
        ];
    }
}
