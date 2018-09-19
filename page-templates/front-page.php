<?php
global $template_settings, $post;
bb_add_body_classes('front-page');
the_post();
get_header();
$fields = get_fields();
extract($fields);
?>
<div class="nav-header">
  <div class="contain">
    <span class="logo-explab">Exp Lab</span>
    <span class="logo-sep"></span>
    <span class="logo-berkley">Berkley - University of California</span>
  </div><!-- /.contain -->
</div><!-- /.nav-header -->
<?php if($header) { ?>
<header>
  <?php bb_print_r($header); ?>
  <div class="header-image" style="<?php echo bb_bkg_img($header['background_image']); ?>"></div>
  <div class="header-image-cover"></div>
  <div class="header-text">
    <div class="contain">
      <?php
      if($header['headline'])
        echo "<h1>{$header['headline']}</h1>";
      echo wpautop($header['subline']);
      ?>
    </div><!-- /.contain -->
  </div><!-- /.header-text -->
</header>
<?php } ?>
<?php if($change_video) { ?>
<section class="change">
  <div class="contain">
    <div class="row">
      <div class="col-sm-5">
        <div class="change-video">
          <div class="change-video-image" style="<?php echo bb_bkg_img($change_video['image']); ?>"></div>
          <span>Play Video</span>
        </div><!-- /.change-video -->
      </div><!-- /.col -->
      <div class="col-sm-7">
        <div class="change-content">
          <?php
          if($change_video['headline'])
            echo "<h3>{$change_video['headline']}</h3>";
          echo wpautop($change_video['copy']);
          if($change_video['copy_subline'])
            echo "<strong>{$change_video['copy_subline']}</strong>";
          ?>
        </div>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.contain -->
</section><!-- /.change -->
<?php } ?>
<?php if($story) { ?>
<section class="story">
  <div class="contain">
    <div class="story-video">
      <div class="story-video-image" style="<?php echo bb_bkg_img($story['image']); ?>"></div>
      <div class="story-link-text">
        <?php echo $story['link_text']; ?>
      </div>
      <div class="story-name">
        <?php echo $story['name'] ?>
        <span><?php echo $story['subname']; ?></span>
      </div>
    </div>
  </div>
</section><!-- /.story -->
<?php } ?>
<?php if($who_is_it_for_content) { ?>
<section class="who-is-it-for">
  <div class="contain">
    <hgroup>
      <strong>01</strong>
      <?php
      if($who_is_it_for_content['title'])
       echo "<h2>{$who_is_it_for_content['title']}</h2>";
      ?>
    </hgroup>
    <div class="who-is-it-for-content">
        <div class="row">
          <?php foreach($who_is_it_for_content['text_blocks'] as $text_block) { ?>
            <div class="col-sm-6">
              <div class="text-block">
                <h4><?php echo $text_block['headline']; ?></h4>
                <?php echo wpautop($text_block['text']); ?>
              </div>
            </div>
          <?php } ?>
        </div><!-- /.row -->
    </div><!-- /.who-is-it-for-content -->
  </div><!-- /.contain -->
</section>
<?php } ?>
<?php if($what_will_you_experience) { ?>
  <section class="what-will-you-experience">
    <div class="contain">
      <hgroup>
        <strong>02</strong>
        <?php
        if($what_will_you_experience['title'])
         echo "<h2>{$what_will_you_experience['title']}</h2>";
        ?>
      </hgroup>
      <div class="what-will-you-experience-image">
        <div class="what-will-you-experience-image-inner" style="<?php echo bb_bkg_img($what_will_you_experience['header_image']); ?>"></div>
      </div>
      <div class="what-will-you-experience-content">
          <div class="row">
            <?php foreach($what_will_you_experience['text_blocks'] as $text_block) { ?>
              <div class="col-sm-6">
                <div class="text-block">
                  <h4>
                    <strong><?php echo $text_block['number']; ?></strong>
                    <em><?php echo $text_block['headline']; ?></em>
                  </h4>
                  <?php echo wpautop($text_block['text']); ?>
                </div>
              </div>
            <?php } ?>
          </div><!-- /.row -->
      </div><!-- /.what-will-you-experience-content -->
    </div><!-- /.contain -->
  </section><!-- /.what-will-you-experience -->
<?php } ?>
<?php if($story_2) { ?>
<section class="story">
  <div class="contain">
    <div class="story-video">
      <div class="story-video-image" style="<?php echo bb_bkg_img($story_2['image']); ?>"></div>
      <div class="story-link-text">
        <?php echo $story_2['link_text']; ?>
      </div>
      <div class="story-name">
        <?php echo $story_2['name'] ?>
        <span><?php echo $story_2['subname']; ?></span>
      </div>
    </div>
  </div>
</section><!-- /.story -->
<?php } ?>
<?php if($what_will_you_learn) { ?>
<section class="what-will-you-learn">
  <div class="contain">
    <hgroup>
      <strong>03</strong>
      <?php
      if($what_will_you_learn['title'])
       echo "<h2>{$what_will_you_learn['title']}</h2>";
       echo wpautop($what_will_you_learn['subtitle']);
      ?>
    </hgroup>
  </div>
</section>
<?php } ?>
<?php if($what_do_i_get) { ?>
<section class="what-do-i-get">
  <div class="contain">
    <hgroup>
      <strong>04</strong>
      <?php
      if($what_do_i_get['headline'])
       echo "<h2>{$what_do_i_get['headline']}</h2>";
       echo wpautop($what_do_i_get['content']);
      ?>
    </hgroup>
    <div class="timeline">
      <div class="timeline-inner">
        <h4><?php echo $what_do_i_get['timeline']['title']; ?></h4>
        <?php foreach($what_do_i_get['timeline']['points'] as $key => $point) { ?>
          <div class="point">
            <div class="key">0<?php echo ($key + 1); ?></div>
            <strong><?php echo $point['title']; ?></strong>
            <?php echo wpautop($point['text']); ?>
          </div>
        <?php } ?>
      </div>
    </div><!-- /.timeline -->
  </div><!-- /.contain -->
</section><!-- /.what-do-i-get -->
<?php } ?>
<?php get_footer(); ?>
