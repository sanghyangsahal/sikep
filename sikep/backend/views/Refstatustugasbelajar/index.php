<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefstatustugasbelajarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Status Tugas Belajar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-status-tugas-belajar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Status Tugas Belajar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdStatusTugasBelajar',
            'NamaStatusTugasBelajar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
