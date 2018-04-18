<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Diklat Fungsional */

$this->title = 'Create Referensi Diklat Fungsional';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Fungsional', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatfungsional-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
