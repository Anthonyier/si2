<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "file".
 *
 * @property integer $id
 * @property resource $Imagen
 * @property integer $Idcliente
 *
 * @property Cliente $idcliente
 */
class File extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'file';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'Idcliente'], 'integer'],
            [['Imagen'], 'string'],
            [['Idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['Idcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Imagen' => 'Imagen',
            'Idcliente' => 'Idcliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcliente()
    {
        return $this->hasOne(Cliente::className(), ['Idcliente' => 'Idcliente']);
    }
}
