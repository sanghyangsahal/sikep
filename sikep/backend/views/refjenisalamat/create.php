<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refjenisalamat */

$this->title = 'Create Referensi Jenis Alamat';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Jenis Alamat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refjenisalamat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
