<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruangmiliter */

$this->title = $model->IdPangkatMiliter;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Ruang Militer', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolonganruangmiliter-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdPangkatMiliter], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdPangkatMiliter], [
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
            'IdPangkatMiliter',
            'JenisAngkatanMiliter',
            'JenjangMiliter',
            'NamaPangkatMiliter',
        ],
    ]) ?>

</div>
