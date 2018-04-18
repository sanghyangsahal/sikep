<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisseminar */

$this->title = 'Update Referensi Jenis Seminar: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Seminar', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisSeminar, 'url' => ['view', 'id' => $model->IdJenisSeminar]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjenisseminar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
