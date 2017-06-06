<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Workflow;

/**
 * WorkflowSearch represents the model behind the search form about `app\models\Workflow`.
 */
class WorkflowSearch extends Workflow
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idworkflow', 'cliente'], 'integer'],
            [['estadocolor'], 'safe'],
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
        $query = Workflow::find();

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
            'Idworkflow' => $this->Idworkflow,
            'cliente' => $this->cliente,
        ]);

        $query->andFilterWhere(['like', 'estadocolor', $this->estadocolor]);

        return $dataProvider;
    }
}
