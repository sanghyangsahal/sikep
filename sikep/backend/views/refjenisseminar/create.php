<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisseminar */

$this->title = 'Create Referensi Jenis Seminar';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Seminar', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisseminar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
