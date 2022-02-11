<?php get_header(); ?>

<div class="page-inner">
  <div class="page-main" id="pg-common">
    <p>日頃より格別のお引き立てを頂き、誠にありがとうございます。<br><br>
    </p>
    <p>今村　太一</p>
    <p class="right"><img src="images/img_company01-1.png" alt="" /></p>
    <ul class="commons">
      <?php
      $common_pages = get_child_pages();
      if ($common_pages->have_posts()) : while ($common_pages->have_posts()) : $common_pages->the_post();
          get_template_part('content/content', 'common');
        endwhile;
        wp_reset_postdata();
      endif; ?>


    </ul>
  </div>
</div>
<?php get_footer(); ?>