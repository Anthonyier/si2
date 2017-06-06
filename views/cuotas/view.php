<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Cuotas */

$this->title = $model->Ncuota;
$this->params['breadcrumbs'][] = ['label' => 'Cuotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuotas-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Ncuota], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Ncuota], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Ncuota',
            'fechapagar',
            'monto',
            'fechapagado',
            'codplan',
        ],
    ]) ?>

</div>
