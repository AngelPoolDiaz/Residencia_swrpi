<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\colaborador\models\Colaborador */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="colaborador-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textarea(['rows' => 6]) ?>


    <?= $form->field($model, 'tiempocompleto')->dropDownList(['prompt' => 'Seleccione Una Opccion','SI'=> 'SI','NO'=> 'NO' ]) ?>

    <?= $form->field($model, 'nivelSNI')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'perfilpromep')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'proyectosinternos_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
