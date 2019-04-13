<?php
global $template_settings, $post;
?>
<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet"/>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet"/>
<head>
<title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui=0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#" style="font-family:Playlist Script"><img src="https://scontent.fybz2-1.fna.fbcdn.net/v/t1.0-9/17553954_1327013367391375_6630613070457911774_n.jpg?_nc_cat=111&_nc_ht=scontent.fybz2-1.fna&oh=65593539e40f881291acf55315bab5e4&oe=5D30C649" style="max-height: 40px; max-width:40px"'></a>
    <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="navToggle()">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Montserrat">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mission">About</a>
        </li>
	<li class="nav-item">
          <a class="nav-link" href="team">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events">
            Past Events
          </a>
	</li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/pg/scientistaqueens/events">
            Upcoming Events
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="conference">Conference</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.scientistafoundation.com/toolsresources">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.podomatic.com/podcasts/queensscientista">Podcast</a>
        </li>
	<li class="nav-item"> 
	<a class="nav-link" href="https://www.facebook.com/pg/scientistaqueens/"><i class="fa fa-facebook"></i></a>
	</li>
	<li class="nav-item">
	<a class="nav-link" href="https://www.instagram.com/scientista.queensu/"><i class="fab fa-instagram"></i></a>
	</li>
	<li class="nav-item">
	  <a class="nav-link" href="mailto:scientista@clubs.queensu.ca"><i class="far fa-envelope"></i></a>
	</li>
      </ul>
     
    </div>
  </nav>
