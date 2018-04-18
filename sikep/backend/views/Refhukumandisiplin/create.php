<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\ReferensiHukumanDisiplin */

$this->title = 'Create Referensi Hukuman Disiplin';
$this->params['breadcrumbs'][] = ['label' => 'Referensi Hukuman Disiplin', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="referensi-hukuman-disiplin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
