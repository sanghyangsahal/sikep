<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refposisijabatan */

$this->title = 'Update Referensi Posisi Jabatan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Posisi Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdPosisiJabatan, 'url' => ['view', 'id' => $model->IdPosisiJabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refposisijabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
