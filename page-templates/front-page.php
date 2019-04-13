<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>
<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>
<html lang="en">
<style>
 @font-face {
        font-family: 'playlistscript';
        src: url('playlist_script-webfont.woff2') format('woff2'),
          url('playlist_script-webfont.woff') format('woff'),
	url('../fonts/Playlist Script.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
      }
h1, h2{font-family:'Playlist';}
</style>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Queen's University Scientista</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div>
<img src="https://github.com/k8tl/scientista/blob/master/media/banner.png?raw=true" class="img-fluid" alt="Queen's U Scientista" style="width: 100%">
      </div>
       

<div class="jumbotron" style="background-color: white">
        <div class="container" style="font-family: Montserrat; color:#6c4f99;">
          <h2 class="display-3" style="font-weight: bold; font-family: playlistscript">About Us</h2>
          <p>Queen's University Scientista is the first Canadian Chapter of the <a href="http://www.scientistafoundation.com/" style="color: #d2d1ff; font-weight: bold;">Scientista Foundation</a> to be found in 2015.</p>
          <p><a class="btn btn-primary btn-lg" href="./mission" role="button" style="color: white; background-color:#6c4f99">Learn More About Our Mission &raquo;</a></p>
        </div>
      </div>

    <div class="jumbotron" style="background: linear-gradient(#6c4f99, #d2d1ff); color: white">
        <div class="container" style="font-family: Montserrat">
          <h2 class="display-3" style="font-weight: bold; font-family: playlistscript;">Podcast: Women of Scientista</h2>
          <p>"Women of Scientista" is a social media initiative with the goal of highlighting a women in STEMM on Queen's campus, including professors, researchers and graduate students.</p>
          <p><a class="btn btn-primary btn-lg" href="https://www.podomatic.com/podcasts/queensscientista" style="background-color:#ffffff; color:#6c4f99" role="button">Listen here! &raquo;</a></p>
        </div>
      </div>


   <div class="container" style="font-family: Montserrat">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>The Team</h2>
            <p>Meet our Exec</p>
            <p><a class="btn btn-secondary" href="./team" role="button">Learn More &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Gallery</h2>
            <p>Discover our pictures from the Momentum: Discussion Panel Luncheon.</p>
            <p><a class="btn btn-secondary" href="./gallery" role="button">See More &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Contact Us</h2>
            <p>Contact us with any questions!</p>
            <p><a class="btn btn-secondary" href="./contact" role="button">Contact &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; Scientista 2019</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
  </body>
</html>


<?php get_footer(); ?>
