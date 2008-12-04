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
      "NEWS" => array("link" => "view_text.php?section=NEWS&file=NEWS"),
      "ChangeLog" => array("link" => "view_text.php?section=ChangeLog&file=ChangeLog"),
      "Donate" => array("link" => "donate.php"),
    );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
                      "http://www.w3.org/TR/html4/loose.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MRBS: <?php echo($title ? $title : $section) ?></title>
    <link rel="stylesheet" href="mrbs.css" type="text/css">
  </head>

  <body>
    <table width="705" border="2" cellpadding="0" cellspacing="0" bordercolor="#0066FF">
      <tbody>
        <tr> 
          <td width="699" height="445" valign="top"> 
            <table width="100%" border="0" cellpadding="0" cellspacing="0" bordercolor="#0066FF">
              <tbody>
                <tr> 
                  <td valign="top" height="24" colspan="5"> 
                    <table width="100%" border="0" cellpadding="3" cellspacing="0">
                      <tbody>
                        <tr> 
                          <td width="691" height="24" valign="top" class="topbar" bgcolor="#0066FF">
<?php
  $first = TRUE;
  foreach ($top_links as $link => $vals)
  {
    if ($first)
    {
      $first = FALSE;
    }
    else
    {
      echo " | ";
    }
    $class = ($section == $link) ? "currentsection" : "othersection";
      
    echo "<a class=\"$class\" href=\"".$vals["link"]."\">".$link."</a>\n";
  }
?>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </td>
                </tr>
                <tr> 
                  <td valign="top" colspan="2" rowspan="3">
                    <a href="/">
                      <img src="images/mrbs.png" width="130" height="50" border="0">
                    </a>
                  </td>
                  <td width="12" height="4"></td>
                  <td width="552"></td>
                  <td width="5"></td>
                </tr>
                <tr> 
                  <td height="34"></td>
                  <td colspan="2" valign="middle" bgcolor="#FFFFFF"> 
                    <h1><?php echo(isset($title) ? $title : (isset($top_links[$section]['subtitle']) ? $top_links[$section]['subtitle'] : $section)) ?></h1>
                  </td>
                </tr>
                <tr>
                  <td height="12"></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr> 
                  <td height="13" width="10"></td>
                  <td width="120"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td height="337"></td>
                  <td colspan="3" valign="top">
<?php
}

function page_footer()
{
?>
    </td>
                  <td></td>
                </tr>
                <tr>
                  <td height="17"></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
<?php
}
?>
