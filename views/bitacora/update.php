<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bitacora */

$this->title = 'Update Bitacora: ' . $model->Idbitacora;
$this->params['breadcrumbs'][] = ['label' => 'Bitacoras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Idbitacora, 'url' => ['view', 'id' => $model->Idbitacora]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bitacora-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
