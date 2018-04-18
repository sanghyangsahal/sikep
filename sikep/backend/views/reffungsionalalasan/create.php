<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalalasan */

$this->title = 'Create Referensi Fungsional Alasan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Alasan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalalasan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
