<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\LoginSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="login-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Uesrnid') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'estado') ?>

    <?= $form->field($model, 'Idempleado') ?>

    <?= $form->field($model, 'accestoken') ?>

    <?php // echo $form->field($model, 'authkey') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
