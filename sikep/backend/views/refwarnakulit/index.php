<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Referensi Warna KulitSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Warna Kulit';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refwarnakulit-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Warna Kulit', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdWarnaKulit',
            'NamaWarnaKulit',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
