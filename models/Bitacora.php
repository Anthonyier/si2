<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bitacora".
 *
 * @property integer $Idbitacora
 * @property string $inicio
 * @property string $salida
 * @property integer $idempleado
 *
 * @property Empleado $idempleado0
 * @property Detallebitacora[] $detallebitacoras
 */
class Bitacora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bitacora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idbitacora'], 'required'],
            [['Idbitacora', 'idempleado'], 'integer'],
            [['inicio', 'salida'], 'safe'],
            [['idempleado'], 'exist', 'skipOnError' => true, 'targetClass' => Empleado::className(), 'targetAttribute' => ['idempleado' => 'Noempleado']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idbitacora' => 'Idbitacora',
            'inicio' => 'Inicio',
            'salida' => 'Salida',
            'idempleado' => 'Idempleado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdempleado0()
    {
        return $this->hasOne(Empleado::className(), ['Noempleado' => 'idempleado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDetallebitacoras()
    {
        return $this->hasMany(Detallebitacora::className(), ['idbitacora' => 'Idbitacora']);
    }
}
