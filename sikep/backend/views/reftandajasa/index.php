<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReftandajasaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Tanda Jasa';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reftandajasa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Reftandajasa', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdTandaJasa',
            'NamaTandaJasa',
            'LembagaPemberiTandaJasa',
            'StatusTandaJasa',
            'JenisTandaJasa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
