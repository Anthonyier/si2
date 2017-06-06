<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "departamento".
 *
 * @property integer $IDdepartamento
 * @property string $nombre
 * @property string $detalle
 *
 * @property Empleado[] $empleados
 * @property Tareasdpto[] $tareasdptos
 */
class Departamento extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departamento';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IDdepartamento'], 'required'],
            [['IDdepartamento'], 'integer'],
            [['nombre', 'detalle'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IDdepartamento' => 'Iddepartamento',
            'nombre' => 'Nombre',
            'detalle' => 'Detalle',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmpleados()
    {
        return $this->hasMany(Empleado::className(), ['Iddepartamento' => 'IDdepartamento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasdptos()
    {
        return $this->hasMany(Tareasdpto::className(), ['IDDPTO' => 'IDdepartamento']);
    }
}
