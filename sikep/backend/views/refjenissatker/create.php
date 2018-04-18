<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Jenis Satker */

$this->title = 'Create Referensi Jenis Satker';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Satker', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenissatker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
