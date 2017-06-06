<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareasdpto".
 *
 * @property integer $Id
 * @property integer $IDDPTO
 * @property integer $workflow
 * @property integer $idtarea
 *
 * @property Workflow $workflow0
 * @property Tareas $idtarea0
 * @property Departamento $iDDPTO
 */
class Tareasdpto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareasdpto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id'], 'required'],
            [['Id', 'IDDPTO', 'workflow', 'idtarea'], 'integer'],
            [['workflow'], 'exist', 'skipOnError' => true, 'targetClass' => Workflow::className(), 'targetAttribute' => ['workflow' => 'Idworkflow']],
            [['idtarea'], 'exist', 'skipOnError' => true, 'targetClass' => Tareas::className(), 'targetAttribute' => ['idtarea' => 'Idtareas']],
            [['IDDPTO'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['IDDPTO' => 'IDdepartamento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'IDDPTO' => 'Iddpto',
            'workflow' => 'Workflow',
            'idtarea' => 'Idtarea',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkflow0()
    {
        return $this->hasOne(Workflow::className(), ['Idworkflow' => 'workflow']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdtarea0()
    {
        return $this->hasOne(Tareas::className(), ['Idtareas' => 'idtarea']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDDPTO()
    {
        return $this->hasOne(Departamento::className(), ['IDdepartamento' => 'IDDPTO']);
    }
}
