<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "empleado".
 *
 * @property integer $Noempleado
 * @property integer $CI
 * @property string $nombreempleado
 * @property integer $numerogrupo
 * @property integer $Iddepartamento
 *
 * @property Bitacora[] $bitacoras
 * @property Departamento $iddepartamento
 * @property Grupo $numerogrupo0
 * @property Historial[] $historials
 * @property Login[] $logins
 */
class Empleado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empleado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Noempleado'], 'required'],
            [['Noempleado', 'CI', 'numerogrupo', 'Iddepartamento'], 'integer'],
            [['nombreempleado'], 'string', 'max' => 50],
            [['Iddepartamento'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['Iddepartamento' => 'IDdepartamento']],
            [['numerogrupo'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['numerogrupo' => 'IdGrupo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Noempleado' => 'Noempleado',
            'CI' => 'Ci',
            'nombreempleado' => 'Nombreempleado',
            'numerogrupo' => 'Numerogrupo',
            'Iddepartamento' => 'Iddepartamento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBitacoras()
    {
        return $this->hasMany(Bitacora::className(), ['idempleado' => 'Noempleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIddepartamento()
    {
        return $this->hasOne(Departamento::className(), ['IDdepartamento' => 'Iddepartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNumerogrupo0()
    {
        return $this->hasOne(Grupo::className(), ['IdGrupo' => 'numerogrupo']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorials()
    {
        return $this->hasMany(Historial::className(), ['idempleado' => 'Noempleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogins()
    {
        return $this->hasMany(Login::className(), ['Idempleado' => 'Noempleado']);
    }
}
