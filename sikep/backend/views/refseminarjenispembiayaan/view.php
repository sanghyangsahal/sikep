<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarjenispembiayaan */

$this->title = $model->IdJenisPembiayaanSeminar;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Seminar Jenis Pembiayaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-seminar-jenis-pembiayaan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdJenisPembiayaanSeminar], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdJenisPembiayaanSeminar], [
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
            'IdJenisPembiayaanSeminar',
            'KodeJenisPembiayaanSeminar',
            'NamaJenisPembiayaanSeminar',
        ],
    ]) ?>

</div>
