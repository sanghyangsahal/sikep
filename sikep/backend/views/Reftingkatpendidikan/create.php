<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Reftingkatpendidikan */

$this->title = 'Create Referensi Tingkat Pendidikan';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Tingkat Pendidikan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reftingkatpendidikan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
