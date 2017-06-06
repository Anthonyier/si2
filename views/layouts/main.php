<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Empresa', 'items' => [
                ['label' => 'Gestionar login','url' => ['/login/index']],
                ['label' => 'Gestionar empleado','url' => ['/empleado/index']],
                ['label' =>'Gestionar departamento','url'=>['/departamento/index'] ]
            ]],
            ['label'=> 'Bitacora','items'=>[
                ['label' => 'bitacora','url'=>['/bitacora/index']],
                ['label'=> 'detallebitacora','url'=>['/detallebitacora/index']]

            ]],
            ['label' =>'Prestamo','items'=>[
                ['label'=>'cliente','url'=>['/cliente/index']],
                ['label'=>'file','url'=>['/file/index']],
                ['label'=>'garante','url'=>['/garante/index']],
                ['label'=>'objeto','url'=>['/objeto/index']],
                ['label'=>'sucursal','url'=>['/sucursal/index']]
            ]],
            ['label'=>'work','items'=>[
                ['label'=>'tareas','url'=>['/tareas/index']],
                ['label'=>'tareasdpto','url'=>['/tareasdpto/index']],
                ['label'=>'workflow','url'=>['/workflow/index']]
            ]],
            ['label'=>'bancario','items'=> [
                ['label'=>'cuenta','url'=>['/cuenta/index']],
                ['label'=>'cuotas','url'=>['/cuotas/index']],
                ['label'=>'planpago','url'=>['/planpago/index']]
            ]],
            ['label'=>'casos de uso','items'=> [
                ['label'=>'casos uso','url'=>['/casosuso/index']],
                ['label'=>'Grupo','url'=>['/grupo/index']],
                ['label'=>'GruposUso','url'=>['/gruposuso/index']]
            ]],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
