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
                <?php if($links): ?>
                    <span class="title">
                    <a href="<?php echo $post->link; ?>">
                        <?php echo $post->title();?>
                    </a>

                    <div class="body">
                        <?php echo getFeedItemBody($post, $display); ?>
                    </div>
                    </span>
                <?php else: ?>
                    <div class="title"><?php echo $post->title();?></div>
                    <div class="body">
                        <?php echo getFeedItemBody($post, $display); ?>
                    </div>
                <?php endif; ?>
            </li>

        <?php endforeach; ?>


    </ul>

    <?php if($more): ?>
        <div class="more-wrapper"><a class="more" href="<?php echo getFeedLink($posts); ?>">More</a></div>
    <?php endif; ?>
</div>

