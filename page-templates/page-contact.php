<?php
global $template_settings, $post;
bb_add_body_classes('Contact');
the_post();
get_header();
?>
<body>
<h1 style="font-family: Playlist"> Contact</h1>
<div class="container">
  <p style="font-family: Montserrat;">
    If you have any questions about the club or how you can join, feel free to contact us below!
  </p>
    <div>
        <p><a class="btn btn-secondary" href="mailto:scientista@clubs.queensu.ca" role="button">Email Us &raquo;</a></p>
    </div>
</div>
</body>
<?php get_footer();?>
