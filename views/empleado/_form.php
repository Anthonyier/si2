<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Empleado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="empleado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Noempleado')->textInput() ?>

    <?= $form->field($model, 'CI')->textInput() ?>

    <?= $form->field($model, 'nombreempleado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'numerogrupo')->textInput() ?>

    <?= $form->field($model, 'Iddepartamento')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
