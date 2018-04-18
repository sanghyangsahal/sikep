<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refbiayatransportmutasi */

$this->title = 'Update Referensi Biaya Transport Mutasi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Biaya Transport Mutasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idBiayaTransport, 'url' => ['view', 'id' => $model->idBiayaTransport]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refbiayatransportmutasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
