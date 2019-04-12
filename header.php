<?php
global $template_settings, $post;
?>
<!DOCTYPE html>
<html>
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
    <a class="navbar-brand" href="#" style="font-family:Playlist Script"><img src="https://scontent.fybz2-1.fna.fbcdn.net/v/t1.0-9/17553954_1327013367391375_6630613070457911774_n.jpg?_nc_cat=111&_nc_ht=scontent.fybz2-1.fna&oh=65593539e40f881291acf55315bab5e4&oe=5D30C649"></a>
    <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" onclick="navToggle()">
      <span class="hamburger-box">
        <span class="hamburger-inner"></span>
      </span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#events">
            Past Events
          </a>
	</li>
        <li class="nav-item">
          <a class="nav-link" href="https://www.facebook.com/pg/scientistaqueens/events">
            Upcoming Events
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#conference">Conference</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://www.scientistafoundation.com/toolsresources">Resources</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
