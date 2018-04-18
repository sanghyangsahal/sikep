<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefjenisseminarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jenis Seminar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisseminar-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Refjenisseminar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJenisSeminar',
            'NamaJenisSeminar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
