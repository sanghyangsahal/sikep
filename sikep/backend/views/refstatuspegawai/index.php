<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi Status PegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Status Pegawai';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refstatuspegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Status Pegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idStatusPegawai',
            'StatusPegawai',
            'Keterangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
