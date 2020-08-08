<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ipinfotable;

/**
 * IpinfotableSearch represents the model behind the search form about `app\models\Ipinfotable`.
 */
class IpinfotableSearch extends Ipinfotable
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sno'], 'integer'],
            [['ipaddress', 'continent', 'country', 'flagimage', 'city', 'equator_relative', 'timezone', 'recdate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Ipinfotable::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'sno' => $this->sno,
            'recdate' => $this->recdate,
        ]);

        $query->andFilterWhere(['like', 'ipaddress', $this->ipaddress])
            ->andFilterWhere(['like', 'continent', $this->continent])
            ->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'flagimage', $this->flagimage])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'equator_relative', $this->equator_relative])
            ->andFilterWhere(['like', 'timezone', $this->timezone]);

        return $dataProvider;
    }
}
