<?php

use yii\helpers\Html;
use yii\grid\GridView;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ClienteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Clientes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cliente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Crear Cliente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Idcliente',
            'nombre',
            'telefono',
            'direccion',
            'sexo',
             'ocupacion',
             'idgarante',
             'montopedido',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


<?php
//require __DIR__ . '/vendor/autoload.php';
//require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
use Google\Cloud\Vision\VisionClient;

 $projectId ='gothic-well-169615';
    $path = 'C:\Users\anthony\Downloads\imprenta.jpg';
    $vision = new VisionClient([
    'projectId' => $projectId,
    ]);
    $image = $vision->image(file_get_contents($path), ['TEXT_DETECTION']);
    $result = $vision->annotate($image);
    print("Texts:\n");
    foreach ((array) $result->text() as $text) {
    print($text->description() . PHP_EOL);
    }
?>
</div>
