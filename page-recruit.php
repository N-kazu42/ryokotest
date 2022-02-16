<?php get_header(); ?>

<div class="page-inner">

  <div class="page-main" id="pg-common">
    <?php
    the_content();
    ?>
    <div class="section-buttons entry-button">

      <button type="button" class="button button-ghost" onclick="javascript:location.href = '/entry-form/';">
        <!--タームのObjectを指定して一覧を作成する -->
        エントリーはこちら
      </button>
    </div>
    <div class="recruit-title second">
      <h2>インタビュー</h2>
    </div>
      <ul class="commons">
        <?php
        $common_pages = get_child_pages();
        if ($common_pages->have_posts()) : while ($common_pages->have_posts()) : $common_pages->the_post();
            get_template_part('content/content', 'recruit');
          endwhile;
          wp_reset_postdata();
        endif; ?>


      </ul>

    </div>
  </div>
</div>
<?php get_footer(); ?>