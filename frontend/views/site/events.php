<?php
$this->title = 'My Yii Application';
?>
<div class="left-content">
	<p>Yangiliklar</p>
	<div class="news-boxes">
		<ul>
            <?php
                foreach($events as $new){
            ?>
                <li>
                    <img src="img/events/<?=$new['image']?>" alt="img1">
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

</div>