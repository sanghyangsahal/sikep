<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Status Pegawai */

$this->title = 'Create Referensi Status Pegawai';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Status Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refstatuspegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
