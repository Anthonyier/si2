<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Casosuso */

$this->title = 'Create Casosuso';
$this->params['breadcrumbs'][] = ['label' => 'Casosusos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="casosuso-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
