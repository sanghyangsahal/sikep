<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refjeniskelamin */

$this->title = 'Create Referensi Jenis Kelamin';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Kelamin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tref-jeniskelamin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
