<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Garante */

$this->title = 'Update Garante: ' . $model->Idgarante;
$this->params['breadcrumbs'][] = ['label' => 'Garantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Idgarante, 'url' => ['view', 'id' => $model->Idgarante]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="garante-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
