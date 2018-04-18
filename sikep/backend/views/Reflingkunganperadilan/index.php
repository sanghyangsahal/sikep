<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\ReflingkunganperadilanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Lingkungan Peradilan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-lingkungan-peradilan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Lingkungan Peradilan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idLingkunganPeradilan',
            'NamaLingkunganPeradilan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
