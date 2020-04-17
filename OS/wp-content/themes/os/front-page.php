<?php get_header(); ?>
<div class="container">
<?php 
     if(have_posts()){
         while(have_posts()){
             the_post();
    ?>
    <div class="row">
       <div class="col-md-6">
       <h1><?php the_title(); ?></h1>
       </div>
    </div>

      <?php
         }
     }
?>
</div>
<?php get_footer(); ?>