<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Lokasi */

$this->title = 'Create Referensi Lokasi';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lokasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reflokasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
