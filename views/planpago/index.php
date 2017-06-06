<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PlanpagoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planpagos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planpago-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Planpago', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'codplan',
            'feachaprog',
            'fechaplazo',
            'capital',
            'Idcuenta',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
