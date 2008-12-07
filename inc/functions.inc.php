<?php

function page_header($title, $section)
{
  $top_links = array
    (
      "Introduction" => array("link" => "./"),
      "Demo" => array("link" => "demo.php", "subtitle" => "Demo - Try MRBS"),
      "Screenshots" => array("link" => "sshots.php"),
      "Download" => array("link" => "download.php", "subtitle" => "Getting MRBS"),
      "Documentation" => array("link" => "docs.php"),
      "NEWS" => array("link" => "view_text.php?section=NEWS&amp;file=NEWS"),
      "ChangeLog" => array("link" => "view_text.php?section=ChangeLog&amp;file=ChangeLog"),
      "Donate" => array("link" => "donate.php"),
    );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MRBS: <?php echo($title ? $title : $section) ?></title>
    <link rel="stylesheet" href="mrbs.css" type="text/css">
    <!--[if lte IE 7]>
    <link rel="stylesheet" href="mrbs_ielte7.css" type="text/css">
    <![endif]-->
  </head>

  <body>
  <div id="frame">
    <div id="header">
      <ul> 
        <?php
          foreach ($top_links as $link => $vals)
          {
            $class = ($section == $link) ? "currentsection" : "othersection"; 
            // Don't put a \n at the end of the echo string in order to avoid a one space
            // whitespace gap between list items.   Adjust the gap with padding.
            echo "<li class=\"$class\"><a href=\"".$vals["link"]."\">".$link."</a></li>";
          }
        ?>
      </ul>
    </div> 
     
    <div id="title">               
      <a href="/"><img src="images/mrbs.png" width="130" height="50" alt="logo"></a>
    
      <h1><?php echo(isset($title) ? $title : (isset($top_links[$section]['subtitle']) ? $top_links[$section]['subtitle'] : $section)) ?></h1>
    </div>
    
    <div id="content">         
<?php
}

function page_footer()
{
?>    
      </div>
    </div>
  </body>
</html>
<?php
}
?>
