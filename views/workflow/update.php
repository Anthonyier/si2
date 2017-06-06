<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Workflow */

$this->title = 'Update Workflow: ' . $model->Idworkflow;
$this->params['breadcrumbs'][] = ['label' => 'Workflows', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Idworkflow, 'url' => ['view', 'id' => $model->Idworkflow]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="workflow-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
