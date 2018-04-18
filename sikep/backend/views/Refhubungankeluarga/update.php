<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refhubungankeluarga */

//$this->title = 'Update Refhubungankeluarga: {nameAttribute}';
$this->title = 'Update Referensi Hubungan Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hubungan Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdHubunganKeluarga, 'url' => ['view', 'id' => $model->IdHubunganKeluarga]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refhubungankeluarga-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
