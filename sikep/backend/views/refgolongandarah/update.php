<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolongandarah */

$this->title = 'Update Referensi Golongan Darah: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Darah', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGolonganDarah, 'url' => ['view', 'id' => $model->idGolonganDarah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refgolongandarah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
