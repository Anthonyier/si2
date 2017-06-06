<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CuotasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cuotas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuotas-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cuotas', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Ncuota',
            'fechapagar',
            'monto',
            'fechapagado',
            'codplan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
