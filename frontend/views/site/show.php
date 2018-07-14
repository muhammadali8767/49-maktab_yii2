<?php
	$this->title = $show['title'];
	echo md5('kingman1164');
?>
<div class="left-content">
	<br>
	<center><h4><?=$show['title']?></h4></center>
	<div class="news-boxes">
        <div style="padding-left: 10%; padding-right: 10%;">
            <center><img src="img/<?=$page?>/<?=$show['image']?>" alt="img1"></center>
            <h4><?=$show['title']?></h4>
            <span><?=$show['text']?></span>
            <div class="date-and-readmore">
                <h4 class="date"><?=$show['posted_time']?></h4>
            </div>
        </div>
    </div>
</div>