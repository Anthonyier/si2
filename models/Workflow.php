<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "workflow".
 *
 * @property integer $Idworkflow
 * @property string $estadocolor
 * @property integer $cliente
 *
 * @property Tareasdpto[] $tareasdptos
 * @property Cliente $cliente0
 */
class Workflow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'workflow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idworkflow'], 'required'],
            [['Idworkflow', 'cliente'], 'integer'],
            [['estadocolor'], 'string', 'max' => 50],
            [['cliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['cliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idworkflow' => 'Idworkflow',
            'estadocolor' => 'Estadocolor',
            'cliente' => 'Cliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasdptos()
    {
        return $this->hasMany(Tareasdpto::className(), ['workflow' => 'Idworkflow']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCliente0()
    {
        return $this->hasOne(Cliente::className(), ['Idcliente' => 'cliente']);
    }
}
