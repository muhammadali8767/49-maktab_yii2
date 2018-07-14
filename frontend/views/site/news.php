<?php
$this->title = 'My Yii Application';
?>

<div class="container" >
    <div align="center" ><h2>Yangiliklar<p><img src="logo/n.png"></h2></div>
    <div class="row">

        <?php
        foreach($news as $new){
            ?>

            <div class="col-lg-4">
                <div class="card">
                    <div class="view overlay hm-white-slight">
                        <div class="img" style="background-image:url('http://maktab/img/news/<?=$new["image"]?>');"></div>
                        <a href="#">
                            <div class="mask"></div>
                        </a>
                    </div>
                    <div class="card-block fixed-bottom">
                        <h5 class="card-title"><?=$new['title']?></h5>
                        <p class="card-text o"><?=$new['short']?></p>
                        <span><?=$new['posted_time']?><a href="index.php?r=site/show&page=news&id=<?=$new['id']?>" class="btn btn-info btn-md">Batafsil</a></span>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="pages">
        <?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>
    </div>
</div>