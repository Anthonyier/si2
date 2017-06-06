<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuenta".
 *
 * @property integer $Id
 * @property integer $nriidplanpago
 * @property string $habilitado
 * @property integer $idcliente
 *
 * @property Cliente $idcliente0
 * @property Planpago[] $planpagos
 */
class Cuenta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuenta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id'], 'required'],
            [['Id', 'nriidplanpago', 'idcliente'], 'integer'],
            [['habilitado'], 'string', 'max' => 50],
            [['idcliente'], 'exist', 'skipOnError' => true, 'targetClass' => Cliente::className(), 'targetAttribute' => ['idcliente' => 'Idcliente']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id' => 'ID',
            'nriidplanpago' => 'Nriidplanpago',
            'habilitado' => 'Habilitado',
            'idcliente' => 'Idcliente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcliente0()
    {
        return $this->hasOne(Cliente::className(), ['Idcliente' => 'idcliente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlanpagos()
    {
        return $this->hasMany(Planpago::className(), ['Idcuenta' => 'Id']);
    }
}
