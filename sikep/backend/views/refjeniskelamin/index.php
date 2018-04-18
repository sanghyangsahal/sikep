<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Tref Jenis Kelaminearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jenis kelamin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-jeniskelamin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Jenis Kelamin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idJenisKelamin',
            'NamajenisKelamin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
