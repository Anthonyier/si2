<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Detallebitacora */

$this->title = 'Update Detallebitacora: ' . $model->Iddetalle;
$this->params['breadcrumbs'][] = ['label' => 'Detallebitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Iddetalle, 'url' => ['view', 'id' => $model->Iddetalle]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="detallebitacora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
