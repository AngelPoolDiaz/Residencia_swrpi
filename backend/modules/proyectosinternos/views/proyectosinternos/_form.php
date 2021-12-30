<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos\models\Proyectosinternos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="proyectosinternos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'titulo_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tipo_investigacion_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'area_de_desarrollo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'descripcion_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'duracion_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'institucion_apoyoeconomico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'resumen_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'introduccion_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'estado_arte_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'objetivo_general_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'objetivo_especifico_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'periodos_idperiodos')->textInput() ?>

    <?= $form->field($model, 'membretes_idmembretes')->textInput() ?>

    <?= $form->field($model, 'impactos_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'metodologia_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'vinculacion_sector_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'referencias_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lugar_desarrollo_proyecto')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'infraestructura_proyecto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-outline-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
