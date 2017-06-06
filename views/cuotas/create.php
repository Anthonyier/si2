<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cuotas */

$this->title = 'Create Cuotas';
$this->params['breadcrumbs'][] = ['label' => 'Cuotas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cuotas-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
