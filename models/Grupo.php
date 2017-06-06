<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grupo".
 *
 * @property integer $IdGrupo
 * @property string $Nombre
 * @property string $estado
 *
 * @property Empleado[] $empleados
 * @property Gruposuso[] $gruposusos
 */
class Grupo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grupo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdGrupo'], 'required'],
            [['IdGrupo'], 'integer'],
            [['Nombre', 'estado'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdGrupo' => 'Id Grupo',
            'Nombre' => 'Nombre',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['numerogrupo' => 'IdGrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposusos()
    {
        return $this->hasMany(Gruposuso::className(), ['idgrupos' => 'IdGrupo']);
    }
}
