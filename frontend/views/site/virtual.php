<?php
    use yii\widgets\ActiveForm;
    use yii\captcha\Captcha;
    $this->title = 'Contact';
    $this->params['breadcrumbs'][] = $this->title;
?>

<br><br><br>

<div class="container">

    <div class="row">
        <div class="col-lg-8 offset-2" align="center"><h5>MAKTAB VIRTUAL QABULXONASI</h5> <p> <img src="logo/n.png"></div>

        <div class=" col-lg-8 offset-2" style=" border: 2px solid #4285F4; margin-top: 5px; ">

            <?php if (Yii::$app->session->hasFlash('success')): ?>
                <h2>Murojat qabul qilindi</h2>
                <br>
                <h4>murojatingiz qabul qilindi. tez orada javobi yuboriladi!</h4>
            <?php elseif(Yii::$app->session->hasFlash('error')): ?>
                <h2>Murojat qabul qilinmadi</h2>
                <br>
                <h4>murojatingiz qabul qilinmadi. Iltimos qaytadan urinib ko'ring!</h4>
            <?php else: ?>

            <div class="row">
                <h4 class="m">Murojaatni yuborish uchun barcha maydonlarni to`ldirish shart</h4><br>
<div class="col-lg-12">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'fio')->textInput(['placeholder' => 'F.I.O']) ?>
                <?= $form->field($model, 'tashkilot')->textInput(['placeholder' => 'Tashkilot nomi']) ?>
                <?= $form->field($model, 'nomer')->textInput(['placeholder' => '+998 XX XXX XX XX']) ?>
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'E - mail']) ?>
                <?= $form->field($model, 'manzil')->textInput(['placeholder' => 'Manzil']) ?>
                <?= $form->field($model, 'passport')->textInput(['placeholder' => 'Pasport seriyasi']) ?>
                <br>
                <h4>Murojaat mazmuni</h4>
                <br>
                <?= $form->field($model, 'turi')->dropDownList([ 'murojat' => 'Murojat', 'shikoyat' => 'Shikoyat', 'turi' => 'Turi', '' => '',], ['prompt' => ''],['placeholder' => 'Murojat turi'])?>
                <?= $form->field($model, 'mavzu')->textInput(['placeholder' => 'Murojat mavzusi']) ?>
                <?= $form->field($model, 'xabar')->textarea(['placeholder' => 'Murojat matni']) ?>
                <?= $form->field($model, 'fayl')->fileInput(['placeholder' => 'Fayl']) ?>
                <style>    .submit{
                        margin: 10px;
                        border: 0px;
                        padding: 10px;
                        width: 100px;
                        font 1.2em Calibri, sans-serif;
                        background-color: #006699;
                        color: white;
                    }
                </style>
                <input class="submit" type="submit" name="submit" value="Jo'natish">
                <?php ActiveForm::end(); ?>
</div>

                <!--<form role="form">
                    <div class="col-sm-12">
                            <div class="form-group float-label-control">
                                <label for="">Familiya Ism Sharifi</label>
                                <input type="text" class="form-control" placeholder="F.I.O" required>
                            </div>
                            <div class="form-group float-label-control">
                                <label for="">Tashkilot</label>
                                <input type="text" class="form-control" placeholder="Tashkilot" required>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group float-label-control">
                                        <label for="">Telefon raqam</label>
                                        <input type="text" class="form-control" placeholder="+998 " required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group float-label-control">
                                        <label for="">Elektron pochta</label>
                                        <input type="email" class="form-control" placeholder="Elektron pochta" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group float-label-control">
                                <label for="">viloyati, tuman/shaxar,mavze mahalla,ko`cha va uy</label>
                                <input type="text" class="form-control" placeholder="Manzil" required>
                            </div>
                            <div class="form-group float-label-control">
                                <label for="">Pasport seriya va nomer, qachon vakim tomondan berilgan</label>
                                <input type="text" class="form-control" placeholder="Pasport" required>
                            </div>

                    </div>

                    <div class="m" ">Murojaat mazmuni </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="filter">Murojaat turi</label>
                            <select class="form-control">
                                <option value="0" selected>Murojaat</option>
                                <option value="1">Shikoyat</option>
                                <option value="2">Talab</option>
                                <option value="3">Ish olish</option>
                                <option value="4">Areza</option>
                            </select>
                        </div>
                        <div class="form-group float-label-control">
                            <label for="">Murojaat mavzusi</label>
                            <input type="text" class="form-control" placeholder="Murojaat" required>
                        </div>
                        <div class="form-group float-label-control">
                            <label for="">Murojaat matni</label>
                            <textarea class="form-control" placeholder="Murojaat matni" rows="5" id="l"></textarea>
                        </div>

                        <div class="form-group float-label-control l">
                            <input type="file" class="form-control " placeholder="Murojaat" required>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group float-label-control">
                                    <img src="logo/k.png">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group float-label-control">
                                    <input type="text" class="form-control" placeholder="xavfsizlik kodini kiriting" required>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group float-label-control">
                                    <button type="button" class="btn btn-info btn-block">Jo`natish</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>-->
            </div>
            <?php endif; ?>
        </div>
    </div>

    <!--<div class="col-lg-3 q ">
        <label for="info" class="btn btn-info s">Mirojatlar statistikasi </label>
        <div class="container a">
            <label for="default" class="btn btn-default a s">Qabul qilindi  50 </label>
            <label for="primary" class="btn btn-success a s">Qayta ishlanmoqda  85</span></label>
            <label for="success" class="btn btn-danger a s">Bajarildi  85</label>
            <label for="warning" class="btn btn-warning a s">Umumiy  200</label>
        </div>
        <div class="container a" >
            <label for="info" class="btn btn-info x">Murojaani tekshirish </label>
            <label for="">Murojaat yuborilganda olingan parolni kiriting</label>
            <form role="form">
                <div class="form-group float-label-control">
                    <input type="text" class="form-control" placeholder="-- -- --" required>
                </div>
                <div class="form-group float-label-control">
                    <button type="button" class="btn btn-info btn-block">Jo`natish</button>
                </div>
            </form>
        </div>
    </div>-->
</div>


<!--
<div class="left-content">
    <p>Maktab vitual qabulxonasi</p>
    <?php if (Yii::$app->session->hasFlash('success')): ?>
    <h2>Murojat qabul qilindi</h2>
        <br>
        <h4>murojatingiz qabul qilindi. tez orada javobi yuboriladi!</h4>
    <?php elseif(Yii::$app->session->hasFlash('error')): ?>
        <h2>Murojat qabul qilinmadi</h2>
        <br>
        <h4>murojatingiz qabul qilinmadi. Iltimos qaytadan urinib ko'ring!</h4>
    <?php else: ?>
    <div class="dir-virtual">
        <div class="in-virtual">
            <p>Murojaatlarni yuborish</p>
            <div class="form">
                <h4>Murojaatni yuborish uchun barcha maydonlarni to'ldirish shart</h4>
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'fio')->textInput(['placeholder' => 'F.I.O']) ?>
                <?= $form->field($model, 'tashkilot')->textInput(['placeholder' => 'Tashkilot nomi']) ?>
                <?= $form->field($model, 'nomer')->textInput(['placeholder' => '+998 XX XXX XX XX']) ?>
                <?= $form->field($model, 'email')->textInput(['placeholder' => 'E - mail']) ?>
                <?= $form->field($model, 'manzil')->textInput(['placeholder' => 'Manzil']) ?>
                <?= $form->field($model, 'passport')->textInput(['placeholder' => 'Pasport seriyasi']) ?>
                <br>
                <h4>Murojaat mazmuni</h4>
                <br>
                <?= $form->field($model, 'turi')->dropDownList([ 'murojat' => 'Murojat', 'shikoyat' => 'Shikoyat', 'turi' => 'Turi', '' => '',], ['prompt' => ''],['placeholder' => 'Murojat turi'])?>
                <?= $form->field($model, 'mavzu')->textInput(['placeholder' => 'Murojat mavzusi']) ?>
                <?= $form->field($model, 'xabar')->textarea(['placeholder' => 'Murojat matni']) ?>
                <?= $form->field($model, 'fayl')->fileInput(['placeholder' => 'Fayl']) ?>
                <style>    .submit{
                        margin: 10px;
                        border: 0px;
                        padding: 10px;
                        width: 100px;
                        font 1.2em Calibri, sans-serif;
                        background-color: #006699;
                        color: white;
                    }
                </style>
                <input class="submit" type="submit" name="submit" value="Jo'natish">
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
-->