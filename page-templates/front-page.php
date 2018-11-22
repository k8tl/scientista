<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>
<div class='container-fluid background-texture h-100'>
  <div class="row h-100">
    <div class="col-sm-12">

    </div>
  </div>
</div>
</header>
<section class="first-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>We made this section</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4">
        <h3>first</h3>
      </div>
      <div class="col-lg-4">
        <h3>second</h3>

      </div>
      <div class="col-lg-4">
        <h3>third</h3>

      </div>
    </div>
  </div>


</section>
<?php get_footer(); ?>
