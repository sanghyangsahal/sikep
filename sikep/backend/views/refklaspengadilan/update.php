<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Refklaspengadilan */

$this->title = 'Update Referensi Klas Pengadilan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Klas Pengadilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdKlasPengadilan, 'url' => ['view', 'id' => $model->IdKlasPengadilan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tref-klas-pengadilan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
