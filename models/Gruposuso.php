<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "gruposuso".
 *
 * @property integer $id
 * @property integer $idgrupos
 * @property integer $idusos
 *
 * @property Casosuso $idusos0
 * @property Grupo $idgrupos0
 */
class Gruposuso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gruposuso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'idgrupos', 'idusos'], 'integer'],
            [['idusos'], 'exist', 'skipOnError' => true, 'targetClass' => Casosuso::className(), 'targetAttribute' => ['idusos' => 'id']],
            [['idgrupos'], 'exist', 'skipOnError' => true, 'targetClass' => Grupo::className(), 'targetAttribute' => ['idgrupos' => 'IdGrupo']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'idgrupos' => 'Idgrupos',
            'idusos' => 'Idusos',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdusos0()
    {
        return $this->hasOne(Casosuso::className(), ['id' => 'idusos']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdgrupos0()
    {
        return $this->hasOne(Grupo::className(), ['IdGrupo' => 'idgrupos']);
    }
}
