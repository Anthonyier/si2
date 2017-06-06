<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Detallebitacora */

$this->title = $model->Iddetalle;
$this->params['breadcrumbs'][] = ['label' => 'Detallebitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="detallebitacora-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Iddetalle], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Iddetalle], [
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
            'Iddetalle',
            'accion',
            'horarealizacion',
            'idbitacora',
        ],
    ]) ?>

</div>
