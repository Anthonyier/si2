<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bitacora;

/**
 * BitacoraSearch represents the model behind the search form about `app\models\Bitacora`.
 */
class BitacoraSearch extends Bitacora
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idbitacora', 'idempleado'], 'integer'],
            [['inicio', 'salida'], 'safe'],
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
        $query = Bitacora::find();

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
            'Idbitacora' => $this->Idbitacora,
            'inicio' => $this->inicio,
            'salida' => $this->salida,
            'idempleado' => $this->idempleado,
        ]);

        return $dataProvider;
    }
}
