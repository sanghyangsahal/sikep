<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Warna Kulit */

$this->title = 'Create Referensi Warna Kulit';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Warna Kulit', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refwarnakulit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
