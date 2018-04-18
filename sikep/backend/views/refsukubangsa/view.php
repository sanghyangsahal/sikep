<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refsukubangsa */

$this->title = $model->IdSukuBangsa;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Suku Bangsa', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-sukubangsa-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdSukuBangsa], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdSukuBangsa], [
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
            'IdSukuBangsa',
            'NamaSukuBangsa',
        ],
    ]) ?>

</div>
