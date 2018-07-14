<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Rahberiyat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" >
    <div align="center" ><h2>Rahbariyat<p><img src="logo/n.png"></h2></div>
    <div class="row">
        <div class="container">
            <div class="row no_padding title__block nothing no-margin">
                <span>
                    <div style="width: 98%; float: right;">
                        <center>
                            <h1>Samarqand viloyati Pastdarg`om tumanidagi</h1>
                            <h2> 49-umumiy O`rta ta`lim maktabini</h2>
                            <br>
                            <h1>RAHBARIYAT</h1>
                            <br>
                        </center>
                        <?php
                            foreach($rahbariyat as $rahbar) {
                                ?>
                                <div>
                                    <center>
                                        <h2><?=$rahbar['lavozim']?></h2>
                                        <br>

                                        <h2><?=$rahbar['fio']?></h2>
                                        <br>
                                        <img width="40%" src="img/<?=$rahbar['image']?>">
                                    </center>
                                    <br>

                                        <center>Qabul kunlari: <?=$rahbar['qabul']?>
                                            <br>Ma`lumot:
                                        </center>
                                        <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?=$rahbar['malumot']?>

                                    <br>
                                    <br>
                                </div>
                            <?php
                            }
                        ?>


                    </div>


                </span>

            </div>

        </div>
    </div>
    <style>
        .pagination{
            float: inherit;
            align-self: center;
        }
        .pagination li{
            border: 1px solid blue;
            border-radius: 5px;
            width: 40px;
            height: 40px;
            float: inherit;
            text-align: center;
            margin: 5px;
            font-size: 25px;

        }
    </style>
<div class="row">
    <div class="col-xs-4 offset-4">    <nav aria-label="...">
            <?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>
        </nav>
    </div>
</div>

</div>