<?php
global $template_settings, $post;
bb_add_body_classes('Contact');
the_post();
get_header();
get_footer();
<body>
<h1> Contact</h1>
<div class="container">
  <p style = "font-family:georgia,garamond,serif;font-size:16x;">
    If you have any questions about the club or how you can join. Feel free to contatct on us below
  </p>
    <div>
        <a href="mailto:scientista@clubs.queensu.ca">Email Us</a>
    </div>
</div>
</body>
?>
