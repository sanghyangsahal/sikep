<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Reffungsionalalasan */

$this->title = $model->IdRefFungsionalAlasan;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Fungsional Alasan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reffungsionalalasan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdRefFungsionalAlasan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdRefFungsionalAlasan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdRefFungsionalAlasan',
            'IdStatusFungsional',
            'NamaRefFungsionalAlasan',
        ],
    ]) ?>

</div>
