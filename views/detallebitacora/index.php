<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DetallebitacoraSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Detallebitacoras';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallebitacora-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Detallebitacora', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Iddetalle',
            'accion',
            'horarealizacion',
            'idbitacora',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
