<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlanpagoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="planpago-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'codplan') ?>

    <?= $form->field($model, 'feachaprog') ?>

    <?= $form->field($model, 'fechaplazo') ?>

    <?= $form->field($model, 'capital') ?>

    <?= $form->field($model, 'Idcuenta') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
