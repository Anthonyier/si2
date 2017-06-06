<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Garante */

$this->title = 'Create Garante';
$this->params['breadcrumbs'][] = ['label' => 'Garantes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="garante-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
