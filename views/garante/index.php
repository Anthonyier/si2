<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GaranteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Garantes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garante-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Garante', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Idgarante',
            'nombre',
            'telefono',
            'direccion',
            'idcliente',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
