<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "detallebitacora".
 *
 * @property integer $Iddetalle
 * @property string $accion
 * @property string $horarealizacion
 * @property integer $idbitacora
 *
 * @property Bitacora $idbitacora0
 */
class Detallebitacora extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detallebitacora';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Iddetalle'], 'required'],
            [['Iddetalle', 'idbitacora'], 'integer'],
            [['horarealizacion'], 'safe'],
            [['accion'], 'string', 'max' => 200],
            [['idbitacora'], 'exist', 'skipOnError' => true, 'targetClass' => Bitacora::className(), 'targetAttribute' => ['idbitacora' => 'Idbitacora']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Iddetalle' => 'Iddetalle',
            'accion' => 'Accion',
            'horarealizacion' => 'Horarealizacion',
            'idbitacora' => 'Idbitacora',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdbitacora0()
    {
        return $this->hasOne(Bitacora::className(), ['Idbitacora' => 'idbitacora']);
    }
}
