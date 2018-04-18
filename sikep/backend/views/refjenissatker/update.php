<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jenis Satker */

$this->title = 'Update Referensi Jenis Satker ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisSatker, 'url' => ['view', 'id' => $model->IdJenisSatker]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjenissatker-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
