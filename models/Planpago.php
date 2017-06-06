<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "planpago".
 *
 * @property integer $codplan
 * @property string $feachaprog
 * @property string $fechaplazo
 * @property integer $capital
 * @property integer $Idcuenta
 *
 * @property Cuotas[] $cuotas
 * @property Cuenta $idcuenta
 */
class Planpago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'planpago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codplan'], 'required'],
            [['codplan', 'capital', 'Idcuenta'], 'integer'],
            [['feachaprog', 'fechaplazo'], 'safe'],
            [['Idcuenta'], 'exist', 'skipOnError' => true, 'targetClass' => Cuenta::className(), 'targetAttribute' => ['Idcuenta' => 'Id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codplan' => 'Codplan',
            'feachaprog' => 'Feachaprog',
            'fechaplazo' => 'Fechaplazo',
            'capital' => 'Capital',
            'Idcuenta' => 'Idcuenta',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCuotas()
    {
        return $this->hasMany(Cuotas::className(), ['codplan' => 'codplan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdcuenta()
    {
        return $this->hasOne(Cuenta::className(), ['Id' => 'Idcuenta']);
    }
}
