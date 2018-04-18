<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisalamat */

$this->title = $model->IdJenisAlamat;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Alamat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisalamat-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdJenisAlamat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdJenisAlamat], [
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
            'IdJenisAlamat',
            'NamaJenisAlamat',
        ],
    ]) ?>

</div>
