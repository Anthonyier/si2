<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Detallebitacora */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="detallebitacora-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Iddetalle')->textInput() ?>

    <?= $form->field($model, 'accion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'horarealizacion')->textInput() ?>

    <?= $form->field($model, 'idbitacora')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
