<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jabatan */

$this->title = 'Update Referensi Jabatan ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jabatan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdNamaJabatan, 'url' => ['view', 'id' => $model->IdNamaJabatan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjabatan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
