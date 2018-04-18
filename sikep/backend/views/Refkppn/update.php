<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Refkppn */

$this->title = 'Update Referensi KPPN';
$this->params['breadcrumbs'][] = ['label' => 'Referensi KPPN', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdKPPN, 'url' => ['view', 'id' => $model->IdKPPN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="refkppn-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
