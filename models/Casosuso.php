<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "casosuso".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $estado
 *
 * @property Gruposuso[] $gruposusos
 */
class Casosuso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'casosuso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'estado'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGruposusos()
    {
        return $this->hasMany(Gruposuso::className(), ['idusos' => 'id']);
    }
}
