<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refgolonganruang */

$this->title = 'Create Referensi Golongan Ruang';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Golongan Ruang', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refgolonganruang-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
