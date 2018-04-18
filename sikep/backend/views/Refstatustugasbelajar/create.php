<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiStatusTugasBelajar */

$this->title = 'Create Referensi Status Tugas Belajar';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Tugas Belajar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-status-tugas-belajar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
