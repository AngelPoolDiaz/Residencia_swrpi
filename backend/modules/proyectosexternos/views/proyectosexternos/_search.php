<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosexternos\models\ProyectosexternosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosexternos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idproyectosexternos') ?>

    <?= $form->field($model, 'nombre_proyectos_externos') ?>

    <?= $form->field($model, 'evidencia') ?>

    <?= $form->field($model, 'observaciones') ?>

    <?= $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-outline-warning']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
