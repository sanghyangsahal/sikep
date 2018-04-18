<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\RefStatusperkawinan */

$this->title = 'Create Referensi Status Perkawinan';
$this->params['breadcrumbs'][] = ['label' => 'Ref Statusperkawinans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ref-statusperkawinan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
