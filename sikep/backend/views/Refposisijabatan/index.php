<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RefposisijabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Posisi Jabatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refposisijabatan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Posisi Jabatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPosisiJabatan',
            'KodePosisiJabatan',
            'LevelPosisiJabatan',
            'UrutanPosisiJabatan',
            'NamaPosisiJabatan',
            //'KeteranganPosisiJabatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
