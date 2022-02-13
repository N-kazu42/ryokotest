<?php get_header(); ?>
<!-- news一覧ーーーーーーーーーーーーー -->
<section class="section-contents" id="news">
  <div class="wrapper">
    <!--get_term_by関数を呼び出し、投稿のnewsスラッグの投稿を呼び出す -->
    <span class="section-title-en">News Release</span>
    <h2 class="section-title">News</h2>
    <!--投稿カテゴリーの名前を呼び出す -->
    <p class="section-lead"></p>
    <!--投稿の説明を呼び出す -->
    <ul class="news">
      <?php
      $infoPosts = get_posts('numberposts=3');
      foreach ($infoPosts as $post) :
      ?>

        <li class="news-item">
          <a class="detail-link" href="<?php the_permalink(); ?>">
            <!--記事のリンクを取得 -->
            <time class="time"><?php the_time('Y/m/d'); ?></time>
            <!--記事の日付を取得 -->
            <p class="title"><?php the_title(); ?></p>
            <!--記事のタイトルを取得 -->
            <p class="news-text"><?php echo get_the_excerpt(); ?></p>
            <!--記事の内容を省略して取得 -->
          </a>
        </li>

      <?php endforeach; ?>

    </ul>
    <div class="section-buttons">

      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('news')); ?>';">
        <!--タームのObjectを指定して一覧を作成する -->
        News一覧を見る
      </button>
    </div>
  </div>
</section>
<!-- 営業所一覧 ーーーーーーーーーーーーーー-->
<section class="section-contents" id="office">
  <div class="wrapper">

    <?php
    $shop_obj = get_page_by_path('office');
    $post = $shop_obj;
    setup_postdata($post);
    $shop_title = get_the_title();
    ?>

    <span class="section-title-en">office Information</span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>

    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('office')); ?>';"><?php echo $shop_title; ?>一覧を見る
      </button>
    </div>
  </div>
</section>

<!-- イベント情報を見る ーーーーーーーーーーーーーーーー-->
<section class="section-contents" id="contribution">
  <div class="wrapper">
    <?php
    $contribution_obj = get_page_by_path('event');  //固定ページのスラッグからオブジェクトを取得
    $post = $contribution_obj; //それを$POSTに返して、その後使いまわせるようにする
    setup_postdata($post); //$postをグローバルで使えるようにする
    $contribution_title = get_the_title(); //あとでタイトルが必要なので取得しておく
    ?>

    <span class="section-title-en">Event</span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    <p class="section-lead"><?php echo get_the_excerpt(); ?></p>
    <?php wp_reset_postdata(); ?>
    <!--サブクエリを実行した後に、メインクエリに戻すときに記述する -->

    <div class="articles">

      <?php
      $contribution_pages = get_specific_posts('event', 'kinds', '', 3); //変数からidを取得して子ページを表示していく
      if ($contribution_pages->have_posts()) : //子ページの固定ページがあるか判断
        while ($contribution_pages->have_posts()) : $contribution_pages->the_post();
      ?>
          <article class="article-card">
            <a class="card-link" href="<?php the_permalink(); ?>">
              <!--子ページのリンクを出力 -->
              <div class="card-inner">
                <div class="card-image">
                  <?php the_post_thumbnail('front-contribution'); ?>
                  <!--設定しているサムネイルの大きさで出力 -->
                </div>
                <div class="card-body">
                  <p class="title"><?php the_title(); ?></p>
                  <!--タイトル -->
                  <p class="excerpt"><?php echo get_the_excerpt(); ?></p>　
                  <!--記事 -->
                  <div class="buttonBox">
                    <button type="button" class="seeDetail">MORE</button>
                  </div>
                </div>
              </div>
            </a>
          </article>
      <?php endwhile;
        wp_reset_postdata();
      endif; ?>
    </div>
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('event')); ?>';"><?php echo $contribution_title; ?>を見る
      </button>
    </div>
  </div>
</section>


<!-- 企業情報ーーーーーーーーーーーーーーーーーーーーーーーーーー -->
<section class="section-contents" id="company">
  <div class="wrapper">

    <?php
    $company_page = get_page_by_path('company');  //固定ページのスラッグからオブジェクトを取得
    $post = $company_page; //それを$POSTに返して、その後使いまわせるようにする
    setup_postdata($post); //$postをグローバルで使えるようにする
    $company_title = get_the_title(); //あとでタイトルが必要なので取得しておく
    ?>
    <span class="section-title-en">Enterprise Information</span>
    <h2 class="section-title"><?php the_title(); ?></h2>
    
    <div class="section-buttons">
      <button type="button" class="button button-ghost" onclick="javascript:location.href = '<?php echo esc_url(home_url('company')); ?>';">
        <!--ホームURLを返す関数この場合は/companyをつけて返す -->
        <?php the_title(); ?>
      </button>
    </div>
    <?php wp_reset_postdata(); ?>
  </div>
</section>
<?php get_footer(); ?>