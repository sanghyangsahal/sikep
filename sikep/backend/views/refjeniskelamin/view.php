<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniskelamin */

$this->title = $model->idJenisKelamin;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Kelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-jeniskelamin-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->idJenisKelamin], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->idJenisKelamin], [
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
            'idJenisKelamin',
            'NamajenisKelamin',
        ],
    ]) ?>

</div>
