<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefjeniscutiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jenis Cuti';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjeniscuti-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Jenis Cuti', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJenisCuti',
            'NamaJenisCuti',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
