<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefklaspengadilanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Klas Pengadilan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-klas-pengadilan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Klas Pengadilan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdKlasPengadilan',
            'NamaKlasPengadilan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
