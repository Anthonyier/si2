<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Gruposuso */

$this->title = 'Create Gruposuso';
$this->params['breadcrumbs'][] = ['label' => 'Gruposusos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gruposuso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
