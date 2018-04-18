<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefseminarjenispembiayaanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Seminar Jenis Pembiayaans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-seminar-jenis-pembiayaan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Seminar Jenis Pembiayaan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJenisPembiayaanSeminar',
            'KodeJenisPembiayaanSeminar',
            'NamaJenisPembiayaanSeminar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
