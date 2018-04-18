<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Refdiklatperjenjangan */

//$this->title = 'Update Refdiklatperjenjangan: {nameAttribute}';
$this->title = 'Update Referensi Diklat Penjenjangan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Penjenjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idDiklatPerjenjangan, 'url' => ['view', 'id' => $model->idDiklatPerjenjangan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refdiklatperjenjangan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
