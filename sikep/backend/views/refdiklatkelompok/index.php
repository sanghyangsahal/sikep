<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefdiklatkelompokSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Diklat Kelompok';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatkelompok-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Diklat Kelompok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idKelompokDiklat',
            'NamaKelompokDiklat',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
