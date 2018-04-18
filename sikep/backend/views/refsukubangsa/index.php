<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefsukubangsaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Suku Bangsas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-sukubangsa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Suku Bangsa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdSukuBangsa',
            'NamaSukuBangsa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
