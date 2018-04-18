<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReffungsionalkelompokSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Fungsional Kelompok';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalkelompok-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Fungsional Kelompok', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdFungsionalKelompok',
            'NamaFungsionalKelompok',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
