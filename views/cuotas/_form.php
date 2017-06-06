<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cuotas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cuotas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Ncuota')->textInput() ?>

    <?= $form->field($model, 'fechapagar')->textInput() ?>

    <?= $form->field($model, 'monto')->textInput() ?>

    <?= $form->field($model, 'fechapagado')->textInput() ?>

    <?= $form->field($model, 'codplan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
