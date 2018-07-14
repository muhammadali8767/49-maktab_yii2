<?php
$this->title = 'My Yii Application';
?>
<div class="left-content">

<?php if($q==""){?>
    <center><h2>Qidiruvga hech qanday ma'lumot kiritilmadi</h2></center>
<?php } else{?>
        <center><h2>Qidiruv natijalari:</h2></center>
<?php } if(!$news){?>
    <center><h2><u><?=$q?></u> Bo'yicha hech narsa topilmadi</h2></center>
<?php } else{?>
    <div class="news-boxes">
        <ul>
            <?php
            foreach($news as $new){
                ?>
                <li>
                    <img src="img/<?=$new['image']?>" alt="img1">
                    <h4><?=$new['title']?></h4>
                    <span><?=$new['short']?></span>
                    <div class="date-and-readmore">
                        <p class="date"><?=$new['posted_time']?></p>
                        <a href="index.php?r=site/show&id=<?=$new['id']?>">Batafsil</a>
                    </div>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>

    <div class="pages">
        <?=\yii\widgets\LinkPager::widget(['pagination' => $pagination])?>
    </div>
<?php }?>
</div>