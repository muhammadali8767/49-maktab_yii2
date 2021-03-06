<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\VirtualSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="virtual-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'tashkilot') ?>

    <?= $form->field($model, 'nomer') ?>

    <?= $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'manzil') ?>

    <?php // echo $form->field($model, 'passport') ?>

    <?php // echo $form->field($model, 'turi') ?>

    <?php // echo $form->field($model, 'mavzu') ?>

    <?php // echo $form->field($model, 'xabar') ?>

    <?php // echo $form->field($model, 'fayl') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
