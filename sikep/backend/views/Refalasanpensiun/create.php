<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\RefAlasanpensiun */

$this->title = 'Create Referensi Alasan Pensiun';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Alasan Pensiun', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-alasanpensiun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
