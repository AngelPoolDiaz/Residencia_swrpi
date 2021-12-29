<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\perfil\models\Perfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perfil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'apellido_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'genero_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ingenieria_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SNI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'promep_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tc_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'idgradoacademico')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
