<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jenis Satker */

$this->title = $model->IdJenisSatker;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenissatker-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdJenisSatker], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdJenisSatker], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdJenisSatker',
            'NamaJenisSatker',
            'IdLingkunganPeradilan',
        ],
    ]) ?>

</div>
