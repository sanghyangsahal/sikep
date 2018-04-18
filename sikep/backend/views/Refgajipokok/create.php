<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiGajiPokok */

$this->title = 'Create Referensi Gaji Pokok';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Gaji Pokok', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-gaji-pokok-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
