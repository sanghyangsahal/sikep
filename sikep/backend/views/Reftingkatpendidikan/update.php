<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Reftingkatpendidikan */

$this->title = 'Update Referensi Tingkat Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tingkat Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdRefTingkatPendidikan, 'url' => ['view', 'id' => $model->IdRefTingkatPendidikan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="reftingkatpendidikan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
