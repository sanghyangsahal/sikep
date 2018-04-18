<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Pulau */

$this->title = 'Create Referensi Pulau';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pulau', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refpulau-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
