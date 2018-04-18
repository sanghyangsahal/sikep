<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Refkecamatan */

$this->title = 'Create Referensi Kecamatan';
$this->params['breadcrumbs'][] = ['label' => 'Refkecamatans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkecamatan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
