<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cuotas".
 *
 * @property integer $Ncuota
 * @property string $fechapagar
 * @property double $monto
 * @property string $fechapagado
 * @property integer $codplan
 *
 * @property Planpago $codplan0
 */
class Cuotas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cuotas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Ncuota'], 'required'],
            [['Ncuota', 'codplan'], 'integer'],
            [['fechapagar', 'fechapagado'], 'safe'],
            [['monto'], 'number'],
            [['codplan'], 'exist', 'skipOnError' => true, 'targetClass' => Planpago::className(), 'targetAttribute' => ['codplan' => 'codplan']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Ncuota' => 'Ncuota',
            'fechapagar' => 'Fechapagar',
            'monto' => 'Monto',
            'fechapagado' => 'Fechapagado',
            'codplan' => 'Codplan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodplan0()
    {
        return $this->hasOne(Planpago::className(), ['codplan' => 'codplan']);
    }
}
