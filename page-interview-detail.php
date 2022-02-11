<?php
/*
Template Name: インタビュー
*/

get_header();
?>
<div class="page-inner full-width">
  <div class="page-main" id="pg-interviewDetail">
    <div class="lead-inner">

      <?php
      if (have_posts()) : while (have_posts()) : the_post();
      ?>
      <h2 class="interview-title">
        <?php  
              $name_title = get_the_title();
              $name_title = str_replace("／", '<br>', $name_title,$n);
              echo $name_title;
        ?>
      </h2> 
         <?php the_content();
        endwhile;
      endif;
      ?>

      <div class="bg-interview"></div>
    </div>
    <div class="interviewList-Container">
      <div class="interviewList-head">
        <span class="title-en"></span>
      </div>
      <div class="interviewList-inner">
        <ul class="interviewList">
          <?php
          $interviews = array('first_interview_detail', 'second_interview_detail');

          foreach ($interviews as $interview) :
            if (have_rows($interview)) :
              while (have_rows($interview)) : the_row();
                get_template_part('content/content', 'interview-detail');
              endwhile;
            endif;
          endforeach;
          ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>