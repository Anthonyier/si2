<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "login".
 *
 * @property integer $Uesrnid
 * @property string $password
 * @property string $estado
 * @property integer $Idempleado
 * @property string $accestoken
 * @property string $authkey
 *
 * @property Empleado $idempleado
 */
class Login extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'login';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Uesrnid'], 'required'],
            [['Uesrnid', 'Idempleado'], 'integer'],
            [['estado','password'], 'string', 'max' => 250],
            [['accestoken', 'authkey'], 'string', 'max' => 250],
            [['Idempleado'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['Idempleado' => 'Noempleado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Uesrnid' => 'Uesrnid',
            'password' => 'Password',
            'estado' => 'Estado',
            'Idempleado' => 'Idempleado',
            'accestoken' => 'Accestoken',
            'authkey' => 'Authkey',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdempleado()
    {
        return $this->hasOne(Empleado::className(), ['Noempleado' => 'Idempleado']);
    }
}
