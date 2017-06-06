<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DetallebitacoraSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallebitacora-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Iddetalle') ?>

    <?= $form->field($model, 'accion') ?>

    <?= $form->field($model, 'horarealizacion') ?>

    <?= $form->field($model, 'idbitacora') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
