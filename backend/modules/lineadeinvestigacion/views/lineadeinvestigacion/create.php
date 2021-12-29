<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion */

$this->title = 'Crear Lineadeinvestigacion';
$this->params['breadcrumbs'][] = ['label' => 'Lineadeinvestigacions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lineadeinvestigacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
