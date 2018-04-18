<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refbiayatransportmutasi */

$this->title = 'Create Referensi Biaya Transport Mutasi';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Biaya Transport Mutasi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refbiayatransportmutasi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
