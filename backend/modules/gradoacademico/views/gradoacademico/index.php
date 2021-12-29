<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\gradoacademico\models\GradoacademicoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Grado academico';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="gradoacademico-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Grado academico', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idgradoacademico',
            'nombre_de_grado',
            'sigla_de_grado',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
