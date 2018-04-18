<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refpekerjaan */

$this->title = 'Create Referensi Pekerjaan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Pekerjaan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-pekerjaan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
