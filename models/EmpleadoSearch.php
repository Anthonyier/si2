<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Empleado;

/**
 * EmpleadoSearch represents the model behind the search form about `app\models\Empleado`.
 */
class EmpleadoSearch extends Empleado
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Noempleado', 'CI', 'numerogrupo', 'Iddepartamento'], 'integer'],
            [['nombreempleado'], 'safe'],
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
        $query = Empleado::find();

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
            'Noempleado' => $this->Noempleado,
            'CI' => $this->CI,
            'numerogrupo' => $this->numerogrupo,
            'Iddepartamento' => $this->Iddepartamento,
        ]);

        $query->andFilterWhere(['like', 'nombreempleado', $this->nombreempleado]);

        return $dataProvider;
    }
}
