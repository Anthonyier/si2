<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property integer $Idtareas
 * @property string $nombretareas
 * @property string $descripcion
 *
 * @property Tareasdpto[] $tareasdptos
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Idtareas'], 'required'],
            [['Idtareas'], 'integer'],
            [['nombretareas', 'descripcion'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Idtareas' => 'Idtareas',
            'nombretareas' => 'Nombretareas',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareasdptos()
    {
        return $this->hasMany(Tareasdpto::className(), ['idtarea' => 'Idtareas']);
    }
}
