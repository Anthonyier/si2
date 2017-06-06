<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\GruposusoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gruposusos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruposuso-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Gruposuso', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'idgrupos',
            'idusos',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
