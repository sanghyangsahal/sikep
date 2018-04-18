<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisdiklatteknis */

$this->title = 'CreateReferensi Jenis Diklat Teknis';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Diklat Teknis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisdiklatteknis-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
