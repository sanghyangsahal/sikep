<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefbiayatransportmutasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Biaya Transport Mutasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refbiayatransportmutasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Biaya Transport Mutasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBiayaTransport',
            'KodeSatkerAsalMutasi',
            'KodeSatkerTujuanMutasi',
            'BiayaDaratTrasnportMutasi',
            'BiayaLautTrasnportMutasi',
            //'UangHarianIiiMutasi',
            //'UangHarianViMutasi',
            //'JarakJarakTrasnportMutasi',
            //'TIketTransportMutasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
