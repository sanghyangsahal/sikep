<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refklaspengadilan */

$this->title = $model->IdKlasPengadilan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Klas Pengadilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-klas-pengadilan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdKlasPengadilan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdKlasPengadilan], [
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
            'IdKlasPengadilan',
            'NamaKlasPengadilan',
        ],
    ]) ?>

</div>
