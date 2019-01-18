<?php
global $template_settings, $post;
bb_add_body_classes('Contact');
the_post();
get_header();
<body>
<h1> Contact Us </h1>
<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="Inquiries">Subject</label>
    <textarea id="Inquries" name="Inquiries" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>
?>
