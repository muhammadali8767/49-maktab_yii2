<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="container" >
    <div align="center" ><h2>Foto galereya<p><img src="logo/n.png"></h2></div>
    <div class="row">

        <?php
        foreach($photos as $photo){
            ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="view overlay hm-white-slight">
                        <div class="img" style="background-image:url('http://maktab/img/galery/<?=$photo['image']?>');"></div>
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
   <!-- <div class="pages">
        <?/*=\yii\widgets\LinkPager::widget(['pagination' => $pagination])*/?>
    </div>-->
</div>