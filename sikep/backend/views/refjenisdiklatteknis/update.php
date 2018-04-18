<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisdiklatteknis */

$this->title = 'UpdateReferensi Jenis Diklat Teknis: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Diklat Teknis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisDiklat, 'url' => ['view', 'id' => $model->IdJenisDiklat]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjenisdiklatteknis-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
