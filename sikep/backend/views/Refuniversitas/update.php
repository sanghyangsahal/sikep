<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiUniversitas */

$this->title = 'Update Referensi Universitas: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Universitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idUniversitas, 'url' => ['view', 'id' => $model->idUniversitas]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-universitas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
