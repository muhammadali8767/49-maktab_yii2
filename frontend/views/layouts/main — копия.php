<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\widgets\Alert;
use frontend\models\SearchForm;

$action = Yii::$app->controller->action->id;
$model = new SearchForm();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.bxslider.css">

</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
    <div class="top-nav">
		<div class="flag">
			<img src="img/flag.png">
		</div>
		<div class="name-u">
			<h2>49 - sonli<br> Umumtalim maktabi</h2>
		</div>
        <div class="search">
            <?php $form = ActiveForm::begin([
                'fieldConfig' =>[
                    'options' =>[
                        'tag' => null,
                        'template' =>'{input}',
                    ],
                ],
            ])?>
            <?= $form->field($model,'q',[
                'template' => '{input}',
                'inputOptions' => [
                    'placeHolder' => 'Izlash parametri...',
                ]
            ])->label('')->textInput()?>
            <input type="submit" name="submit" value="Izlash">
            <?php ActiveForm::end()?>
        </div>
		<div class="language">
			<ul>
				<li><a href="#">uz</a></li>
				<li><a href="#">ru</a></li>
				<li><a href="#">en</a></li>
			</ul>
		</div>
	</div>
	<header>
		<input type="checkbox" id="btn-menu">
		<label for="btn-menu">&#9776</label>
		<nav class="menu">
			<ul>
				<li class="submenu"><a href="index.php?r=site/index">Bosh sahifa</a></li>
				<li class="submenu"><a href="index.php?r=site/news">Yangiliklar</a>

                </li>
				<li class="submenu"><a href="index.php?r=site/about">Maktab haqida</a>
                    <ul>
                        <li class="submenu"><a href="index.php?r=site/rahbariyat">Rahbariyat</a></li>
                        <li class="submenu"><a href="index.php?r=site/manaviy">Ma'naviy Marifiy Ishlar</a></li>
                        <li class="submenu"><a href="index.php?r=site/tarbiyaviy">O`quv tarbiyaviy ishlar</a></li>
                    </ul>
                </li>
				<li class="submenu"><a href="index.php?r=site/galery">Foto Galereya</a></li>
				<li class="submenu"><a href="index.php?r=site/virtual">Direktor qabulxonasi</a>
                </li>
				<li class="submenu"><a href="/backend/web/">Sayt boshqaruvi</a></li>
			</ul>
		</nav>
	</header>
    <?php if($action=="asdas"){?>
        <div class="slider">
            <ul class="my-slider">
                <li><img src="img/slider_img1.jpg">
                </li>
                <li><img src="img/slider_img2.jpg"></li>
                <li><img src="img/slider_img3.jpg"></li>
                <li><img src="img/slider_img4.jpg"></li>
            </ul>
        </div>
    <?php }?>

        <!--<div>
            <ul id="bxslider">
                <li>
                    <img src="img/slider_img1.jpg" />
                </li>
                <li>
                    <img src="img/slider_img2.jpg" />
                </li>
                <li>
                    <img src="img/slider_img3.jpg" />
                </li>
            </ul>
        </div>-->

    <div class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
        <div class="right-sidebar">
            <p>Statistik natijalar</p>
            <div class="count-students">
                <h3>Hamkorlar</h3>
                <ul>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;O'zbekiston Respublikasi Hukumat Portali</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;Axborot texnologiyalari va kommunikatsiyalarini rivojlantirish vazirligi</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;Xalq ta'limi vazirligi rasmiy sayti</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;Xalq ta'limi vazirligi axborot-ta'lim portali</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;Ziyonet ta'lim portali</a></li>
                </ul>
                <br>
            </div>
            <div class="virtual">
                <h3>Portallar</h3>
                <ul>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;www.gov.uz</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;www.uz</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;www.lex.uz</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;www.uzedu.uz</a></li>
                    <li><a href="#"><img style="width: 15px;" src="img/arrow.png" width="13px">&nbsp;www.eduportal.uz</a></li>
                </ul>
                <br>
            </div>
        </div>
    </div>
	<div class="footer">
        <h4 style="float: left;color: #000000;">49 - Maktab. <?= date('Y') ?> - yil</h4>
        <h4 style="float: right;color: #000000;"> Web Sayt <a style="color: #ffffff;" href="http://marcos.uz">MarcOS Soft</a> tomonidan tayyorlandi</h4>

    </div>
</div>

<?php $this->endBody() ?>

</body>
<script type="text/javascript" src="js/jquery.bxslider.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script>
    $('.my-slider').bxSlider({
        mode: 'horizontal',
        auto: true,
        controls: true
    });
</script>
</html>
<?php $this->endPage() ?>
