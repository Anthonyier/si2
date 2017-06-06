<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cliente".
 *
 * @property integer $Idcliente
 * @property string $nombre
 * @property integer $telefono
 * @property string $direccion
 * @property string $sexo
 * @property string $ocupacion
 * @property integer $idgarante
 * @property integer $montopedido
 *
 * @property Garante $idgarante0
 * @property Cuenta[] $cuentas
 * @property File[] $files
 * @property Garante[] $garantes
 * @property Historial[] $historials
 * @property Loginc[] $logincs
 * @property Objeto[] $objetos
 * @property Sucursal[] $sucursals
 * @property Workflow[] $workflows
 */
class Cliente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cliente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idcliente'], 'required'],
            [['Idcliente', 'telefono', 'idgarante', 'montopedido'], 'integer'],
            [['nombre', 'direccion', 'sexo', 'ocupacion'], 'string', 'max' => 50],
            [['idgarante'], 'exist', 'skipOnError' => true, 'targetClass' => Garante::className(), 'targetAttribute' => ['idgarante' => 'Idgarante']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idcliente' => 'Idcliente',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'sexo' => 'Sexo',
            'ocupacion' => 'Ocupacion',
            'idgarante' => 'Idgarante',
            'montopedido' => 'Montopedido',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdgarante0()
    {
        return $this->hasOne(Garante::className(), ['Idgarante' => 'idgarante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuentas()
    {
        return $this->hasMany(Cuenta::className(), ['idcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFiles()
    {
        return $this->hasMany(File::className(), ['Idcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGarantes()
    {
        return $this->hasMany(Garante::className(), ['idcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHistorials()
    {
        return $this->hasMany(Historial::className(), ['Idcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLogincs()
    {
        return $this->hasMany(Loginc::className(), ['Idcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjetos()
    {
        return $this->hasMany(Objeto::className(), ['IDcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSucursals()
    {
        return $this->hasMany(Sucursal::className(), ['IDcliente' => 'Idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getWorkflows()
    {
        return $this->hasMany(Workflow::className(), ['cliente' => 'Idcliente']);
    }
}
