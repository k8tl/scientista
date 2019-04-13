<?php
global $template_settings, $post;
bb_add_body_classes('front-page full-height');
the_post();
get_header();
?>
<!DOCTYPE html>
<html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>

h1, h2, h3 {
font-family: Playlist;
}
</style>
<section class="first-section">
  <div class="container" style="font-family: Montserrat">
    <div class="row">
      <div class="col-lg-12">
        <h2 style="font-family: playlistscript">Past Events</h2>
        <div>
        <h3>Scientista Presents: Being a Woman in STEMM Today</h3>
        <p>Queen’s Scientista hosted their first speaker event of the 2018-2019 school year, centred around the topic of “What is it like being a woman in STEMM today?”

Our featured speakers included returning guest Dr.Virginia Walker and Johanna Mason. Dr.Virginia Walker is a professor for the Department of Biology at Queen’s University. Her area of research is molecular genetics focusing on stress genes and the molecular basis of resistance. Johanna Mason is a current Queen’s masters degree candidate in her second year of research. She holds a BASc in Chemical Engineering.

Together, they brought in a perspective from both the senior and graduate level of academia to talk about their past and current experiences being a woman in a historically male-dominated field.
</p>
</div>
     <div>
        <h3>Queen's Scientista | Momentum: Discussion Panel Luncheon</h3>
        <p>Queen's Scientista was proud to present its annual discussion panel with a sold out venue of over 60 guests with the theme of MOMENTUM. Featuring five diverse panelists and one keynote speaker from various backgrounds in STEM (i.e. industry, academia, professional, etc.), attendees got the chance to learn about the different perspectives and challenges women encounter in STEM. 

With only 24% of STEM workers being female, it was time to see why that is... and build some momentum. </p>
</div>
      </div>
    </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>
