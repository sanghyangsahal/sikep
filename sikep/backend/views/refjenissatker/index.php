<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi Jenis SatkerSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jenis Satker';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenissatker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Jenis Satker', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJenisSatker',
            'NamaJenisSatker',
            'IdLingkunganPeradilan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
