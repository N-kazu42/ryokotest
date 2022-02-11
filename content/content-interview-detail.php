<li class="interviewList-item">
    <div class="interview-image">
        <?php
        $image_id = get_sub_field('interview_img');
        echo wp_get_attachment_image($image_id, 'top');
        ?>
    </div>
    <div class="interview-body">
        <p class="interview-title"><?php the_sub_field('interview_title'); ?> </p>
        <p class="interview-caption">
            <?php the_sub_field('interview_text'); ?>
        </p>
        <!-- <div class="interview-detail">
            <dl>
                <dt>営業時間</dt>
                <dd><?php //the_sub_field('interview_hours'); ?></dd>
            </dl>
            <dl>
                <dt>フロア情報</dt>
                <dd><?php //the_sub_field('interview_floor_info'); ?></dd>
            </dl>
        </div> -->
    </div>
</li>