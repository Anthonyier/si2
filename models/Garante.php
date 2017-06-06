<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "garante".
 *
 * @property integer $Idgarante
 * @property string $nombre
 * @property string $telefono
 * @property string $direccion
 * @property integer $idcliente
 *
 * @property Cliente[] $clientes
 * @property Cliente $idcliente0
 */
class Garante extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'garante';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idgarante'], 'required'],
            [['Idgarante', 'idcliente'], 'integer'],
            [['nombre', 'telefono', 'direccion'], 'string', 'max' => 50],
            [['idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idgarante' => 'Idgarante',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'direccion' => 'Direccion',
            'idcliente' => 'Idcliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClientes()
    {
        return $this->hasMany(Cliente::className(), ['idgarante' => 'Idgarante']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcliente0()
    {
        return $this->hasOne(Cliente::className(), ['Idcliente' => 'idcliente']);
    }
}
