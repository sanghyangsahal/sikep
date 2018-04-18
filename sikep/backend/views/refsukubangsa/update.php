<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refsukubangsa */

$this->title = 'Update Referensi Suku Bangsa: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Suku Bangsa', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdSukuBangsa, 'url' => ['view', 'id' => $model->IdSukuBangsa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-sukubangsa-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
