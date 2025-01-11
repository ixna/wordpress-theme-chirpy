<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_header(); ?>
  
  <body data-topbar-visible="true">

    <!-- 左侧sidebar -->
    <?php get_template_part('templates/module', 'sidebar') ?>
    <!-- 顶部面包屑和搜索 -->
    <?php get_template_part('templates/module', 'topbar') ?>

    <div id="main-wrapper" class="d-flex justify-content-center">
      <div id="main" class="container pl-xl-4 pr-xl-4">
        <div class="row">
          <!-- core -->
          <div id="core-wrapper" class="col-12 col-lg-11 col-xl-9 pr-xl-4">
            <div class="post pl-1 pr-1 pl-md-2 pr-md-2">
              <?php 
                $search_word = get_search_query();
                if ( have_posts() ) {
                  echo '<h3>Search results for "' . $search_word . '"</h3>';
                  echo '<div id="post-list">';
                  while ( have_posts() ) {
                      the_post();             
                      get_template_part("templates/search", "list");
                  } // end while
                  get_template_part('templates/post', 'paginator');
                  echo '</div>';
              } else {
                echo '<div class="page_not_found">';
                echo '<img src="http://io.fifo.site/fifo-page-empty.svg" width="250" height="250">';
                echo '<h2>No results found for keyword "' . $search_word . '"</h2>';
                echo '<p><a href="/">Return to home</a></p>';
                echo '</div>';
              }// end if
              ?>
            </div>
          </div> <!-- #core-wrapper -->
          <?php get_template_part('templates/widget','panel'); ?>
        </div><!-- #row -->
      </div>
    </div> <!-- #main-wrapper -->

    <!-- The Footer -->
    <?php get_footer(); ?>

    <?php get_template_part('templates/backtop','bar'); ?>
    <?php get_template_part('templates/soda','notification'); ?>
    <?php get_template_part('templates/js','selector'); ?>
  </body>
</html>
