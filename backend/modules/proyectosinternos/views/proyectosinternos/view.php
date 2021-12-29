<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model backend\modules\proyectosinternos\models\Proyectosinternos */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Proyectosinternos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="proyectosinternos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>


    <p>

        <?= Html::a('colaborador', ['/colaborador/colaborador/verificar', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

       <?= Html::a('Formatos', ['/formatos/formatos/verificar', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

        <?= Html::a('Cronograma de Actividades', ['/cronogramadeactividades/cronogramadeactividades/verificar', 'id' => $model->id], ['class' => 'btn btn-success']) ?>

        <?= Html::a('Reportes', ['/reportes/reportes/verificar', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        
    </p>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'titulo_proyecto',
            'tipo_investigacion_proyecto',
            'area_de_desarrollo',
            'descripcion_proyecto:ntext',
            'duracion_proyecto',
            'institucion_apoyoeconomico',
            'resumen_proyecto:ntext',
            'introduccion_proyecto:ntext',
            'estado_arte_proyecto',
            'objetivo_general_proyecto:ntext',
            'objetivo_especifico_proyecto:ntext',
            'periodos_idperiodos',
            'membretes_idmembretes',
            'impactos_proyecto:ntext',
            'metodologia_proyecto:ntext',
            'vinculacion_sector_proyecto',
            'referencias_proyecto',
            'lugar_desarrollo_proyecto',
            'infraestructura_proyecto:ntext',
            'user_id',
        ],
    ]) ?>

    <?= GridView::widget([
        'dataProvider' => $Colaboradores,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'iddocente',
            'nombre:ntext',
            'tiempocompleto',
            'nivelSNI',
            //'perfilpromep',
            //'proyectosinternos.titulo_proyecto',
            [
                'attribute' => 'proyectosinternos_id',
                'value' => 'proyectosinternos.titulo_proyecto',
                'format' => 'raw',
                //'label' => 'Titulo del Proyecto',

            ],

           // ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
