<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tareasdpto */

$this->title = 'Create Tareasdpto';
$this->params['breadcrumbs'][] = ['label' => 'Tareasdptos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tareasdpto-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
