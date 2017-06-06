<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Planpago;

/**
 * PlanpagoSearch represents the model behind the search form about `app\models\Planpago`.
 */
class PlanpagoSearch extends Planpago
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codplan', 'capital', 'Idcuenta'], 'integer'],
            [['feachaprog', 'fechaplazo'], 'safe'],
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
        $query = Planpago::find();

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
            'codplan' => $this->codplan,
            'feachaprog' => $this->feachaprog,
            'fechaplazo' => $this->fechaplazo,
            'capital' => $this->capital,
            'Idcuenta' => $this->Idcuenta,
        ]);

        return $dataProvider;
    }
}
