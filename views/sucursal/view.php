<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sucursal */

$this->title = $model->Idsucursal;
$this->params['breadcrumbs'][] = ['label' => 'Sucursals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sucursal-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Idsucursal], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Idsucursal], [
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
            'Idsucursal',
            'descripcipon',
            'direccion',
            'IDcliente',
        ],
    ]) ?>

</div>
