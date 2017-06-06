<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Workflow */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="workflow-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Idworkflow')->textInput() ?>

    <?= $form->field($model, 'estadocolor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cliente')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
