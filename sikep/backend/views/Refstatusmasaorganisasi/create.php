<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refstatusmasaorganisasi */

$this->title = 'Create Referensi Status Masa Organisasi';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Masa Organisasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refstatusmasaorganisasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
