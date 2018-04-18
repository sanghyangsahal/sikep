<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RefstatusmasaorganisasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Status Masa Organisasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refstatusmasaorganisasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Status Masa Organisasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IDStatusMasaOrganisasi',
            'NamaStatusMasaOrganisasi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
