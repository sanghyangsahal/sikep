<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\RefjurusanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Jurusan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjurusan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Jurusan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdJurusan',
            'KodeJurusan',
            'NamaJurusan',
            'idTingkatPendidikan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
