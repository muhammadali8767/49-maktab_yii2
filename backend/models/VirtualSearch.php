<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Virtual;

/**
 * VirtualSearch represents the model behind the search form about `backend\models\Virtual`.
 */
class VirtualSearch extends Virtual
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['fio', 'tashkilot', 'nomer', 'email', 'manzil', 'passport', 'turi', 'mavzu', 'xabar', 'fayl'], 'safe'],
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
        $query = Virtual::find();

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
        ]);

        $query->andFilterWhere(['like', 'fio', $this->fio])
            ->andFilterWhere(['like', 'tashkilot', $this->tashkilot])
            ->andFilterWhere(['like', 'nomer', $this->nomer])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'manzil', $this->manzil])
            ->andFilterWhere(['like', 'passport', $this->passport])
            ->andFilterWhere(['like', 'turi', $this->turi])
            ->andFilterWhere(['like', 'mavzu', $this->mavzu])
            ->andFilterWhere(['like', 'xabar', $this->xabar])
            ->andFilterWhere(['like', 'fayl', $this->fayl]);

        return $dataProvider;
    }
}
