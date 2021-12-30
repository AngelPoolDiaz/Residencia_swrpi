<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\entregablemeta\models\EntregablemetaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Entregable metas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="entregablemeta-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Entregable meta', ['create'], ['class' => 'btn btn-outline-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'identregablemeta',
            'tipo_entregable',
            'descripcion',
            'fecha_entrega',
            'observacion',
            //'evidencia',
            //'proyectosinternos_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
