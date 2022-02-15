<?php
/*
Template Name: 事業内容
*/

get_header();
?>
<div class="page-inner full-width">
  <div class="page-main" id="pg-interviewDetail">
    <div class="lead-inner">
      <div class="contribution business">

        <?php
        $interviews = array('first_business', 'second_business', 'third_business', 'forth_business');

        foreach ($interviews as $interview) :
          if (have_rows($interview)) :
            while (have_rows($interview)) : the_row();
              get_template_part('content/content', 'business');
            endwhile;
          endif;
        endforeach;
        ?>

      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>