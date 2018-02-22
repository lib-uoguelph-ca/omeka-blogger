<div class="blogger blog">

    <ul class="posts">
        <?php $count = 0; ?>
        <?php foreach($posts as $post):?>
            <?php 
                if($limit > 0 && $count >= $limit) {
                    break;
                }
                $count++;
            ?>
            <li class="post">
                <span class="title"><?php echo $post->title();?></span>
            </li> 
        <?php endforeach; ?>
    </ul>
</div>


<?php


