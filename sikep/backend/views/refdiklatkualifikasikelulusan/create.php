<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refdiklatkualifikasikelulusan */

$this->title = 'Create Referensi Diklat Kualifikasi Kelulusan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Kualifikasi Kelulusan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refdiklatkualifikasikelulusan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
