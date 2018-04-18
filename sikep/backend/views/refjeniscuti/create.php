<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniscuti */

$this->title = 'Create Referensi Jenis Cuti';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Cuti', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjeniscuti-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
