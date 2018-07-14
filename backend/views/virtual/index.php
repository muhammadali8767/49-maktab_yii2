<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Virtual Qabulxona';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="virtual-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'fio',
            'tashkilot',
            'nomer',
            'email:email',
            // 'manzil',
            // 'passport',
            // 'turi',
            // 'mavzu',
            // 'xabar:ntext',
            // 'fayl',

            ['class' => 'yii\grid\ActionColumn','template' => '{view} {delete}'],
        ],
    ]); ?>
</div>
