<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refjurusan */

$this->title = 'Update Referensi Jurusan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jurusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdJurusan, 'url' => ['view', 'id' => $model->IdJurusan]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refjurusan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
