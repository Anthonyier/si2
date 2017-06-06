<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Objeto */

$this->title = 'Update Objeto: ' . $model->Idobjeto;
$this->params['breadcrumbs'][] = ['label' => 'Objetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Idobjeto, 'url' => ['view', 'id' => $model->Idobjeto]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objeto-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
