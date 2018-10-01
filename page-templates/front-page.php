<?php
global $template_settings, $post;
bb_add_body_classes('front-page');
the_post();
get_header();
?>
<div class='container-fluid background-texture h-100'>
  <div class="row h-100">
    <div class="col-sm-12">
      <div class="text-block"><h1>Welcome To QWeb</h1>
      <p>This theme is a starting point for wordpress theme development. It is built with Bootstrap and Wordpress. In order to work with this theme it is highly recommended that you understand how to use and compile SASS.</p>
      </div>
    </div>
  </div>
</div>
</header>
<?php get_footer(); ?>
