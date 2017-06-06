<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Planpago */

$this->title = 'Create Planpago';
$this->params['breadcrumbs'][] = ['label' => 'Planpagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planpago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
