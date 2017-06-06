<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Garante */

$this->title = $model->Idgarante;
$this->params['breadcrumbs'][] = ['label' => 'Garantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garante-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Idgarante], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Idgarante], [
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
            'Idgarante',
            'nombre',
            'telefono',
            'direccion',
            'idcliente',
        ],
    ]) ?>

</div>
