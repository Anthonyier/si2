<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Planpago */

$this->title = 'Update Planpago: ' . $model->codplan;
$this->params['breadcrumbs'][] = ['label' => 'Planpagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->codplan, 'url' => ['view', 'id' => $model->codplan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="planpago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
