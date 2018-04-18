<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefgolonganruangmiliterSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Golongan Ruang Militer';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolonganruangmiliter-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Refgolonganruangmiliter', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdPangkatMiliter',
            'JenisAngkatanMiliter',
            'JenjangMiliter',
            'NamaPangkatMiliter',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
