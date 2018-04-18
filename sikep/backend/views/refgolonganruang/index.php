<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefgolonganruangSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Golongan Ruang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolonganruang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Golongan Ruang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idGolonganRuang',
            'UrutanGolonganRuang',
            'KodeGolonganRuang',
            'NamaGolongan',
            'Golongan',
            //'Ruang',
            //'idFormatBKN',
            //'idTingkatPendidikanMinimal',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
