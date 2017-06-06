<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cuotas;

/**
 * CuotasSearch represents the model behind the search form about `app\models\Cuotas`.
 */
class CuotasSearch extends Cuotas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ncuota', 'codplan'], 'integer'],
            [['fechapagar', 'fechapagado'], 'safe'],
            [['monto'], 'number'],
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
        $query = Cuotas::find();

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
            'Ncuota' => $this->Ncuota,
            'fechapagar' => $this->fechapagar,
            'monto' => $this->monto,
            'fechapagado' => $this->fechapagado,
            'codplan' => $this->codplan,
        ]);

        return $dataProvider;
    }
}
