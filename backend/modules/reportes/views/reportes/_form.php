<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\reportes\models\Reportes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="reportes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'avance_reporte')->textInput() ?>

    <?= $form->field($model, 'actividad_reporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anexo_reporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'conclusion_reporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observacion_reporte')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
