<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiKabupaten */

$this->title = 'Create Referensi Kabupaten';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Kabupaten', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-kabupaten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
