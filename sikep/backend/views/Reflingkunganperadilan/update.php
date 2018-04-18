<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiLingkunganPeradilan */

$this->title = 'Update Referensi Lingkungan Peradilan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Lingkungan Peradilan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idLingkunganPeradilan, 'url' => ['view', 'id' => $model->idLingkunganPeradilan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="referensi-lingkungan-peradilan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
