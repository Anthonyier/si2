<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sucursal".
 *
 * @property integer $Idsucursal
 * @property string $descripcipon
 * @property string $direccion
 * @property integer $IDcliente
 *
 * @property Cliente $iDcliente
 */
class Sucursal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sucursal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idsucursal'], 'required'],
            [['Idsucursal', 'IDcliente'], 'integer'],
            [['descripcipon', 'direccion'], 'string', 'max' => 50],
            [['IDcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['IDcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idsucursal' => 'Idsucursal',
            'descripcipon' => 'Descripcipon',
            'direccion' => 'Direccion',
            'IDcliente' => 'Idcliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIDcliente()
    {
        return $this->hasOne(Cliente::className(), ['Idcliente' => 'IDcliente']);
    }
}
