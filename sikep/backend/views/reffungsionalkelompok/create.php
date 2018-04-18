<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalkelompok */

$this->title = 'Create Referensi Fungsional Kelompok';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Kelompok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalkelompok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
