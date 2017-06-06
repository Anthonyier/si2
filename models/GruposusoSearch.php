<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Gruposuso;

/**
 * GruposusoSearch represents the model behind the search form about `app\models\Gruposuso`.
 */
class GruposusoSearch extends Gruposuso
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'idgrupos', 'idusos'], 'integer'],
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
        $query = Gruposuso::find();

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
            'idgrupos' => $this->idgrupos,
            'idusos' => $this->idusos,
        ]);

        return $dataProvider;
    }
}
