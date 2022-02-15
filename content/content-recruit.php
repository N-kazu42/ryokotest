<li class="common-item downup">
    <a class="common-link" href="<?php the_permalink(); ?>">
        <div class="common-image">
            <?php the_post_thumbnail('common'); ?>
        </div>
        <div class="common-body">
            <p class="name">
                <?php
                $name_title = get_the_title();
                $name_title = str_replace("／", '<br>', $name_title, $n);
                echo $name_title;
                ?>
            </p>
            <div class="buttonBox">
                <button type="button" class="seeDetail">MORE</button>
            </div>
        </div>
    </a>
</li>