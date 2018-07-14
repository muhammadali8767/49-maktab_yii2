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
    <link href="css/MarcOS.css" rel="stylesheet">
    <link href="css/mdb.css" rel="stylesheet">
    <style>
        .card{
            margin-bottom: 30px;
        }
        .img {
            position: relative;
            float: left;
            width:  350px;
            height: 200px;
            background-position: 50% 50%;
            background-repeat:   no-repeat;
            background-size:     cover;
        }
        .card-block {
            position: relative;
            float: left;
            width:  350px;
            height: 200px;
            background-position: 50% 50%;
            background-repeat:   no-repeat;
            background-size:     cover;
        }
        .card-block span{
            position: absolute;
            bottom: 5px;
            margin-right: auto;
            margin-left: auto;
        }
        #searchform-q{
            color: #ffffff;
            margin-top: 10px;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

    <nav class="navbar navbar-toggleable-md navbar-dark fixed-top scrolling-navbar">
    
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php?r=site/index"> <img src="logo/lo.png" width="35"></a>
            <div class="collapse navbar-collapse" id="navbarNav1">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php if($action == 'news'){echo ' active';}?>">
                        <a class="nav-link" href="index.php?r=site/news">Yangiliklar</a>
                    </li>
                    <li class="nav-item <?php if($action == 'about'){echo ' active';}?>">
                        <a class="nav-link" href="index.php?r=site/about">Maktab haqida</a>
                    </li>
                    <li class="nav-item dropdown <?php if($action == 'rahbariyat' || $action == 'manaviy' || $action == 'tarbiyaviy'){echo ' active';}?>">
                        <a class="nav-link dropdown-toggle" href="index.php?r=site/rahbariyat" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Rahbariyat
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="index.php?r=site/rahbariyat"">Rahbariyat</a>
                            <a class="dropdown-item" href="index.php?r=site/manaviy">Ma'naviy Marifiy Ishlar</a>
                            <a class="dropdown-item" href="index.php?r=site/tarbiyaviy">O`quv tarbiyaviy ishlar</a>
                        </div>
                    </li>
					<li class="nav-item <?php if($action == 'galery'){echo ' active';}?>">
                        <a class="nav-link" href="index.php?r=site/galery">Foto Galereya</a>
                    </li>
                    <li class="nav-item <?php if($action == 'virtual'){echo ' active';}?>">
                        <a class="nav-link" href="index.php?r=site/virtual">Direktor qabulxonasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/backend/web/">Admin</a>
                    </li>

                </ul>
                <?php $form = ActiveForm::begin([
                    'fieldConfig' =>[
                        'options' =>[
                            'class' => 'form-inline waves-effect waves-light',
                            'tag' => null,
                            'template' =>'{input}',
                        ],
                    ],
                ])?>
                <?= $form->field($model,'q',[
                    'template' => '{input}',
                    'inputOptions' => [
                        'classs' => 'control',
                        'placeHolder' => 'Qidiruv',
                    ]
                ])->label('')->textInput()?>
                <?php ActiveForm::end()?>
            </div>
        </div>
    </nav>
<?php if($action != 'virtual'){?>
<div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active view hm-black-light" style="background-image: url('img/22.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                             <h1 class="h1-responsive">Multimedia umumta'lim  </h1>
                        <li>
                            <p>Taqdirlash marosimida Xalq ta'limi vazirining birinchi o‘rinbosari B.Daniyarov, vazirlikning tegishli bo‘lim boshliqlari va xodimlari,   .</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-info btn-lg">Batafsil >></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item view hm-black-light" style="background-image: url('img/23.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">Multimedia umumta'lim  </h1>
                        </li>
                        <li>
                            <p>Taqdirlash marosimida Xalq ta'limi vazirining birinchi o‘rinbosari B.Daniyarov, vazirlikning tegishli bo‘lim boshliqlari va xodimlari,  .</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-info btn-lg">Batafsile >></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="carousel-item view hm-black-light" style="background-image: url('img/24.jpg'); background-repeat: no-repeat; background-size: cover;">
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">Multimedia umumta'lim dasturlarini</h1></li>
                        <li>
                            <p>Taqdirlash marosimida Xalq ta'limi vazirining birinchi o‘rinbosari B.Daniyarov, vazirlikning tegishli bo‘lim boshliqlari va xodimlari,  .</p>
                        </li>
                        <li>
                            <a target="_blank" href="#" class="btn btn-default btn-lg">Batafsil >></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
<?php }?>
<?php if($action == 'index'){?>
    <div class="container visible-lg">
        <div class="row">
            <div class="col-md-3 col-xs-3 "><img src="logo/3.png" class="u"><img src="logo/4.png" class="u"></div>
            <div class="col-md-3 col-xs-3 "><img src="logo/5.png" class="u"><img src="logo/6.png" class="u"></div>
            <div class="col-md-3 col-xs-3 "><img src="logo/7.png" class="u"><img src="logo/8.png" class="u"></div>
            <div class="col-md-3 col-xs-3 "><img src="logo/9.png" class="u"><img src="logo/3.png" class="u"></div>
        </div>
    </div>

    <hr>
<?php }?>
    <div class="content">
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>

<footer class="page-footer center-on-small-only "  style="background-color: #4285F4;" >
    <hr>
    <div class="footer-copyright w" >
        <div class="container-fluid w">
            © <?=date('Y')?> Samarqand viloyati  xalq talim boshqarmasi: <a href="#" rel="nofollow"> 49-Maktab.uz </a>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
    <script type="text/javascript" src="js/tether.min.js"></script>
    <script type="text/javascript" src="js/MarcOS.js"></script>
    <script type="text/javascript" src="js/mdb.js"></script>
</body>

</html>
<?php $this->endPage() ?>
