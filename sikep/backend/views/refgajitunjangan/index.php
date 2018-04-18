<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi Gaji TunjanganSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Gaji Tunjangan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgajitunjangan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Gaji Tunjangan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdRefGajiTunjangan',
            'KodeGajiTunjangan',
            'NamaGajiTunjangan',
            'IdGajiPokok',
            'Tunjangan',
            //'RemunisasiGajiTunjangan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
