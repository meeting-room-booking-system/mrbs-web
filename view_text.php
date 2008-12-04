<?php

include("inc/functions.inc.php");

$title = NULL;

if ($_GET["file"] != $_GET["section"])
{
  $title = $_GET["section"]." : ".$_GET["file"];
}

page_header($title, $_GET["section"]);

if (preg_match('/[\/\.]/', $_GET["file"]))
{
  echo "Naughty boy, you can't view that file!\n";
}
else
{
  $handle = fopen($_GET["file"], "r");

  if ($handle)
  {
    $contents = fread($handle, filesize($_GET["file"]));
  
    echo "<pre>".htmlspecialchars($contents)."</pre>\n";
  }
  else
  {
    echo "Failed to open file\n";
  }
}

page_footer();

?>
