<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkelompok */

$this->title = 'Create Referensi Diklat Kelompok';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kelompok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatkelompok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
