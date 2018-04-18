<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\Refnegarasearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Negara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refnegara-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Refnegara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdNegara',
            'KodeNegara',
            'NamaNegara',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
