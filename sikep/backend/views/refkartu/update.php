<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Kartu */

$this->title = 'Update Referensi Kartu ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Kartu', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdRefKartu, 'url' => ['view', 'id' => $model->IdRefKartu]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refkartu-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
