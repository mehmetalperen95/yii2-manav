<?php

namespace mehmetalperen95\manav;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mehmetalperen95\manav\Meyveler;

/**
 * MeyvelerSearch represents the model behind the search form of `mehmetalperen95\manav\Meyveler`.
 */
class MeyvelerSearch extends Meyveler
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fiyat'], 'integer'],
            [['isim', 'hasatYeri', 'created_at', 'updated_at'], 'safe'],
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
        $query = Meyveler::find();

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
            'id' => $this->id,
            'fiyat' => $this->fiyat,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'isim', $this->isim])
            ->andFilterWhere(['like', 'hasatYeri', $this->hasatYeri]);

        return $dataProvider;
    }
}
