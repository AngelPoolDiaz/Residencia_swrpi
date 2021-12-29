<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosexternos\models\Proyectosexternos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosexternos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_proyectos_externos')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'evidencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observaciones')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
