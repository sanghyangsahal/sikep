<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refkomposisihakim */

$this->title = 'Update Referensi Komposisi Hakim: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Komposisi Hakim', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdKomposisiHakim, 'url' => ['view', 'id' => $model->IdKomposisiHakim]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refkomposisihakim-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
