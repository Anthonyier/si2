<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CuotasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuotas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Ncuota') ?>

    <?= $form->field($model, 'fechapagar') ?>

    <?= $form->field($model, 'monto') ?>

    <?= $form->field($model, 'fechapagado') ?>

    <?= $form->field($model, 'codplan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
