<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiDiklatSektor */

$this->title = 'Update Referensi Diklat Sektor: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Sektor', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdDiklatSektor, 'url' => ['view', 'id' => $model->IdDiklatSektor]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-diklat-sektor-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
