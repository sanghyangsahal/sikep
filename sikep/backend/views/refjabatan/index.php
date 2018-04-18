<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi JabatanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jabatan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjabatan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Jabatan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdNamaJabatan',
            'UrutanJabatan',
            'IdPosisiJabatan',
            'NamaJabatan',
            'SingkatanNamaJabatan',
            //'KeteranganNamaJabatan',
            //'UsiaPensiunJabatan',
            //'MinimumAngaKreditJabatan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
