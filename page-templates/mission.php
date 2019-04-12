<html>
<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>

<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="Styles.css">
  <title> Scientista's Mission </title>
  <style>
    @font-face {
        font-family: 'playlistscript';
        src: url('playlist_script-webfont.woff2') format('woff2'),
          url('playlist_script-webfont.woff') format('woff'),
	url('../fonts/Playlist Script.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
      }
      /* montserrat-regular - latin */
@font-face {
  font-family: 'Montserrat';
  src: url('../fonts/montserrat-v12-latin-regular.woff2') format('woff2'),
    url('../fonts/montserrat-v12-latin-regular.woff') format('woff');
    font-style: normal;
    font-weight: normal;
}
    body {background-color: #d2d1ff;
        font-family: 'playlistscript';}
  </style>
</head>

<body>
  <div class = "container-fluid" style = "background-color: #6c4f99">
    <h1 align = "left";
    style = "padding-top: 15px;
        padding-bottom: 15px;
        padding-left: 20px
        font-family: playlistscript;
        color: white">
      Scientista
    </h1>
  </div>
  <div align = "center">
    <p style = "font-family: Montserrat;
    color: black">
      Queen's University Scientista is the first Canadian Chapter of the Scientista Foundation (http://www.scientistafoundation.com/) to be found in 2015. The aim is to promote the advancement of undergraduate and graduate women in science, technology, engineering, mathematics, and medicine (STEMM) on Queen's University’s campus through campus events and campus-related resources as well as by connecting women to a larger network of women in STEMM. Queen's University Scientista strives to provide women in STEMM with the resources and support necessary to help them succeed in their current and future endeavors. We will do this through publication of online content, posting of science resources and opportunities, hosting campus events to build the Scientista community, and engaging with women in STEMM at a national level.
    </p>
  </div>
</body>

<?php get_footer(); ?>
</html>
