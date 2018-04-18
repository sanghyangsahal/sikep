<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefbankSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Bank';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-bank-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Bank', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdBank',
            'NamaBank',
            'KodeBank',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
