<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Refhubungankeluarga */

$this->title = 'Create Referensi Hubungan Keluarga';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hubungan Keluarga', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refhubungankeluarga-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
