<?php get_header(); ?>
<div class="container  about-page">
<?php 
     if(have_posts()){
             the_post();
    ?>
    <div class="row">
       <div class="col-md-6">
       <?php the_post_thumbnail(); ?>
       <h1><?php the_title(); ?></h1>
       <p><?php the_content(); ?></p>

       </div>
    </div>

      <?php
     }
?>
</div>
<?php get_footer(); ?>