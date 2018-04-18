<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Warna Kulit */

$this->title = 'Update Referensi Warna Kulit ';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Warna Kulit', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdWarnaKulit, 'url' => ['view', 'id' => $model->IdWarnaKulit]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refwarnakulit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
