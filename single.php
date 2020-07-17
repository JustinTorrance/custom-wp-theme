<?php
  get_header();
?>

  <article class="content px-3 py-5 p-md-5">

    <?php
      if( have_posts() ){
        while( have_posts() ){
          the_post();
          //looks for file path, finds type
          get_template_part( 'templates-parts/content', 'article' );
        }
      }
    ?>
    
  </article>

<?php
get_footer();
?>