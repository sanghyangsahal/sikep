<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefdiklatsektorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Diklat Sektor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-diklat-sektor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Diklat Sektor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdDiklatSektor',
            'NamaDiklatSektor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
