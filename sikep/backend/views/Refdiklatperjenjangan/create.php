<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Refdiklatperjenjangan */

$this->title = 'Create Referensi Diklat Penjenjangan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Penjenjangan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatperjenjangan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
