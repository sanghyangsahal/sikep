<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruang */

$this->title = 'Update Referensi Golongan Ruang: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idGolonganRuang, 'url' => ['view', 'id' => $model->idGolonganRuang]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refgolonganruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
