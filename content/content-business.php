<article class="article-card downup">
    <div class="image">
        <?php
        $image_id = get_sub_field('business_img');
        echo wp_get_attachment_image($image_id,'business');
        ?>
    </div>
    <div class="body">
        <p class="title"><?php the_sub_field('business_title'); ?></p>
        <p class="excerpt"><?php the_sub_field('business_text'); ?></p>

    </div>
</article>