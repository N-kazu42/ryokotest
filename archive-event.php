<?php get_header(); ?>

<!-- Contents Start -->

<div class="page-inner full-width">
  <div class="page-main" id="pg-news">
    <p>菱工産業が行うイベントの様子や、社員たちの交流などをご紹介します!</p>
    <ul>
      <li class="ac"><a href="/kinds/hold/">展示会・説明会</a></li>
      <li><a href="/kinds/study/">勉強会</a></li>
      <li><a href="/kinds/exchange/">交流会</a></li>
    </ul>
    <div class="main-container">
      <div class="main-wrapper">
        <div class="newsLists">

          <?php
          if (have_posts()) :
            while (have_posts()) : the_post();
            get_template_part('content/content','archive');
            endwhile;
          endif; ?>
        </div>
        <!-- ページャーを表示させる -->
        <div class="pager">
          <ul class="pagerList">
          <?php
            if (function_exists('page_navi')):
              page_navi();
            endif;
            ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>


<?php //get_template_part( 'loop', 'index' ); 
?>

</div>
<!-- Contents End -->

<?php get_footer();
