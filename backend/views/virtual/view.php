<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Virtual Qabulxona', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="virtual-view">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('O\'chirish', ['delete', 'id' => $model->id], [
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
            'id',
            'fio',
            'tashkilot',
            'nomer',
            'email:email',
            'manzil',
            'passport',
            'turi',
            'mavzu',
            'xabar:ntext',
            'fayl',
        ],
    ]) ?>

</div>
