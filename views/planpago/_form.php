<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Planpago */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planpago-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'codplan')->textInput() ?>

    <?= $form->field($model, 'feachaprog')->textInput() ?>

    <?= $form->field($model, 'fechaplazo')->textInput() ?>

    <?= $form->field($model, 'capital')->textInput() ?>

    <?= $form->field($model, 'Idcuenta')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
