<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>
<html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<body>
<div class="jumbotron" style="background-color: white">
        <div class="container" style="font-family: Montserrat; color:#6c4f99;">
          <h2 class="display-3" style="font-family: Playlist">Details tba</h2>
          <p>Check out our Facebook page for updates!</p>
          <p><a class="btn btn-primary btn-lg" href="https://www.facebook.com/pg/scientistaqueens/" role="button" style="color: white; background-color:#6c4f99">Facebook &raquo;</a></p>
        </div>
      </div>
</body>
<?php get_footer(); ?>
