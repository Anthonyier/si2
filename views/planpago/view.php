<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Planpago */

$this->title = $model->codplan;
$this->params['breadcrumbs'][] = ['label' => 'Planpagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="planpago-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->codplan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->codplan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'codplan',
            'feachaprog',
            'fechaplazo',
            'capital',
            'Idcuenta',
        ],
    ]) ?>

</div>
