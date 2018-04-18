<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniscuti */

$this->title = 'Update Referensi Jenis Cuti: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisCuti, 'url' => ['view', 'id' => $model->IdJenisCuti]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjeniscuti-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
