<?php

namespace mehmetalperen95\manav;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mehmetalperen95\manav\Firmalar;

/**
 * FirmalarSearch represents the model behind the search form of `mehmetalperen95\manav\Firmalar`.
 */
class FirmalarSearch extends Firmalar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firmaid'], 'integer'],
            [['firmaisim', 'lokasyon', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Firmalar::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'firmaid' => $this->firmaid,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'firmaisim', $this->firmaisim])
            ->andFilterWhere(['like', 'lokasyon', $this->lokasyon]);

        return $dataProvider;
    }
}
