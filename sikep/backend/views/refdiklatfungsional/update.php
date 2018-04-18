<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Diklat Fungsional */

$this->title = 'Update Referensi Diklat Fungsional ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Fungsional', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJenisDiklatFungsional, 'url' => ['view', 'id' => $model->IdJenisDiklatFungsional]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refdiklatfungsional-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
