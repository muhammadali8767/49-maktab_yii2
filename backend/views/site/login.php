<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>


    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

            <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <?= $form->field($model, 'rememberMe')->checkbox() ?>

            <div style="color:#999;margin:1em 0">
                Parolni unutgan bo'lsangiz <?= Html::a('qayta tiklang', ['site/request-password-reset']) ?>.
            </div>
            <div class="row">
            <div class="col-xs-3 col-xs-offset-1">

                <div class="form-group">
                    <?= Html::submitButton('Kirish', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>
            </div>
            <div class="col-xs-5">
                <div class="form-group">
                    <?= Html::a('Qaytish',['/'],['class' => 'btn btn-primary'])?>
                </div>
            </div>
            </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>