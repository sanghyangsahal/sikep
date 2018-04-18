<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefStatusperkawinansearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Status Perkawinan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-statusperkawinan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ref Statusperkawinan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idStatusKawin',
            'namaStatusKawin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
