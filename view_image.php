<?php

include("inc/functions.inc.php");

page_header("Screenshots ".$_GET['file'], "Screenshots");

?>

<div class="ss_large">
  <img src="<?php echo $_GET['file'] ?>" alt="">
</div>

<?php

page_footer();

?>
