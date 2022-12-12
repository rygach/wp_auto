<?php
get_header('private_policy');

the_post();
?>
<div class="container">
  <?php
  the_title();
  the_content();
  ?>
</div>

<?php
get_footer();
?>