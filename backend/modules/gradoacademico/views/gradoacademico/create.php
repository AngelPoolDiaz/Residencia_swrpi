<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\gradoacademico\models\Gradoacademico */

$this->title = 'Crear Gradoacademico';
$this->params['breadcrumbs'][] = ['label' => 'Gradoacademicos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradoacademico-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
