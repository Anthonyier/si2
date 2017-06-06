<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sucursal;

/**
 * SucursalSearch represents the model behind the search form about `app\models\Sucursal`.
 */
class SucursalSearch extends Sucursal
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idsucursal', 'IDcliente'], 'integer'],
            [['descripcipon', 'direccion'], 'safe'],
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
        $query = Sucursal::find();

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
            'Idsucursal' => $this->Idsucursal,
            'IDcliente' => $this->IDcliente,
        ]);

        $query->andFilterWhere(['like', 'descripcipon', $this->descripcipon])
            ->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
