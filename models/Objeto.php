<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objeto".
 *
 * @property integer $Idobjeto
 * @property string $nombre
 * @property string $descripcion
 * @property integer $IDcliente
 *
 * @property Cliente $iDcliente
 */
class Objeto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objeto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idobjeto'], 'required'],
            [['Idobjeto', 'IDcliente'], 'integer'],
            [['nombre', 'descripcion'], 'string', 'max' => 50],
            [['IDcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['IDcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idobjeto' => 'Idobjeto',
            'nombre' => 'Nombre',
            'descripcion' => 'Descripcion',
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
