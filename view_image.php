<?php

include("inc/functions.inc.php");

page_header("Screenshots ".$_GET['file'], "Screenshots");

?>
            <img src="<?php echo $_GET['file'] ?>">

<?php

page_footer();

?>
