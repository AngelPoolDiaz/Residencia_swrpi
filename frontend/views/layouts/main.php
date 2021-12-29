<?php

/* @var $this \yii\web\View */
/* @var $content string */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header>
    <?php
    NavBar::begin([
        'brandLabel' => "SWRPI Inicio",
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar navbar-expand-md navbar-dark bg-dark fixed-top', 
        ],
    ]);

        if (Yii::$app->user->isGuest) {
       
        $menuItems[] = ['label' => 'Registrarse', 'url' => ['/site/signup']];
	    $menuItems[] = ['label' => 'Contacto', 'url' => ['/site/contact']];
        $menuItems[] = ['label' => 'Acerca de Nosotros', 'url' => ['/site/about']];
        $menuItems[] = ['label' => 'Ingresar', 'url' => 'http://localhost/proyectos2/backend/web/index.php?r=admin%2Fuser%2Flogin' ];
         ;

         //    $menuItems[] = 
       // ['label' => Yii::t('rbac-admin', 'Administrador TecNM Valladoliddd'), 'url' => ['login']];
    } else {
        $menuItems = [
     /*   ['label' => 'Inicio', 'url' => ['/site/index']],
        ['label' => 'Perfil', 'url' => ['/perfil/index']],
        ['label' => 'Proyectos Internos',  
        'url' => ['#'],
        'template' => '<a href="{url}" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
        'items' => [
            ['label' => 'proyectos Internos', 'url' => ['/proyectosinternos/index']],
            ['label' => 'Colaboradores', 'url' => ['/docente/index']],
            ['label' => 'Cronograma de Actividades', 'url' => ['/cronogramadeactividades/index']],
            ['label' => 'Metas a Entregar', 'url' => ['/entregablemeta/index']],
	    ['label' => 'Reportes', 'url' => ['/reportes/index']],
            ['label' => 'Subir Formatos', 'url' => ['/formatos/index']],
        ],],
        //['label' => 'Proyectos Internos', 'url' => ['/proyectosinternos/index']],
        ['label' => 'Proyectos Externos', 'url' => ['/proyectosexternos/index']],
        //['label' => 'fechadeproyecto', 'url' => ['/membretes/index']],
        //['label' => 'Colaboradores', 'url' => ['/docente/index']],
        //['label' => 'Cronograma de actividades', 'url' => ['/cronogramadeactividades/index']],
        //['label' => 'entregablemeta ', 'url' => ['/entregablemeta/index']],
        
        
        //['label' => 'gradoacademico', 'url' => ['/gradoacademico/index']],*/
    ];
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post', ['class' => 'form-inline'])
            . Html::submitButton(
                'Cerrar Sesion (' . Yii::$app->user->identity->email. ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
</header>

<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer class="footer mt-auto py-3 text-muted">
    <div class="container">
        <p class="float-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
        <p class="float-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage();
