<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Referensi Kartu */

$this->title = $model->IdRefKartu;
$this->params['breadcrumbs'][] = ['label' => 'Referensi Kartu', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="refkartu-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdRefKartu], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdRefKartu], [
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
            'IdRefKartu',
            'NamaRefKartu',
        ],
    ]) ?>

</div>
