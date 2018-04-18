<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refseminarjenispembiayaan */

$this->title = 'Update Referensi Seminar Jenis Pembiayaan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Seminar Jenis Pembiayaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisPembiayaanSeminar, 'url' => ['view', 'id' => $model->IdJenisPembiayaanSeminar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-seminar-jenis-pembiayaan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
