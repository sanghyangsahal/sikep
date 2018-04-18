<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisalamat */

$this->title = 'Update Referensi Jenis Alamat: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Alamat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisAlamat, 'url' => ['view', 'id' => $model->IdJenisAlamat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjenisalamat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
