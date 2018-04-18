<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi Bentuk MukaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Bentuk Muka';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refbentukmuka-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Bentuk Muka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idBentukMuka',
            'namaBentukMuka',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
