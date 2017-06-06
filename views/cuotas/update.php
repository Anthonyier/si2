<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cuotas */

$this->title = 'Update Cuotas: ' . $model->Ncuota;
$this->params['breadcrumbs'][] = ['label' => 'Cuotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Ncuota, 'url' => ['view', 'id' => $model->Ncuota]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cuotas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
