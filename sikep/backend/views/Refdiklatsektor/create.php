<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiDiklatSektor */

$this->title = 'Create Referensi Diklat Sektor';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Diklat Sektor', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-diklat-sektor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
