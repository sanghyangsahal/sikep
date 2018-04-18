<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\RefhukumandisiplinSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Referensi Hukuman Disiplin';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-hukuman-disiplin-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Referensi Hukuman Disiplin', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idHukumanDisiplin',
            'NamaHukumanDisiplin',
            'TingkatHukumanDisiplin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
