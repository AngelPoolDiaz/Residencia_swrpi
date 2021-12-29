<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\formatos\models\FormatosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Formatos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="formatos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Volver', ['/proyectosinternos/proyectosinternos/view','id'=> $proyectosinternos_id], ['class' => 'btn btn-success']) ?>
    </p>

    <p>
        <?= Html::a('Crear Formatos', ['create','proyectosinternos_id'=> $proyectosinternos_id], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idformatos',
            'primer_reporte:ntext',
            'segundo_reporte:ntext',
            'tercer_reporte:ntext',
            'protocolo:ntext',
            //'concentrador:ntext',
            //'registro_plantrabajo:ntext',
            //'proyectosinternos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
