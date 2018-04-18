<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkualifikasikelulusan */

$this->title = 'Update Referensi Diklat Kualifikasi Kelulusan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kualifikasi Kelulusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdDiklatKualifikasiLulusan, 'url' => ['view', 'id' => $model->IdDiklatKualifikasiLulusan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refdiklatkualifikasikelulusan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
