<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refkecamatan */

$this->title = 'Update Referensi Kecamatan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Refkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdKecamatan, 'url' => ['view', 'id' => $model->IdKecamatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refkecamatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
