<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "loginc".
 *
 * @property integer $userCL
 * @property integer $password
 * @property string $estado
 * @property integer $Idcliente
 *
 * @property Cliente $idcliente
 */
class Loginc extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'loginc';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['userCL'], 'required'],
            [['userCL', 'password', 'Idcliente'], 'integer'],
            [['estado'], 'string', 'max' => 50],
            [['Idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['Idcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userCL' => 'User Cl',
            'password' => 'Password',
            'estado' => 'Estado',
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
