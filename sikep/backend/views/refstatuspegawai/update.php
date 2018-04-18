<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Status Pegawai */

$this->title = 'Update Referensi Status Pegawai ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idStatusPegawai, 'url' => ['view', 'id' => $model->idStatusPegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refstatuspegawai-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
