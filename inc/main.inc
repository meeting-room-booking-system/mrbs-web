<?

function doPageHeader($title)
{
?>
<HTML>
 <HEAD>
  <TITLE>MRBS - <?= $title ?></TITLE>
 </HEAD>
 <BODY BGCOLOR=#ffffff>
  <TABLE BORDER=0 HEIGHT=100% CELLPADDING=2>
   <TR VALIGN=TOP HEIGHT=1>
    <TD><A HREF=""><IMG ALIGN=TOP SRC="images/mrbs.png" BORDER=0></A></TD>
    <TD><H1>Meeting Room Booking System</H1></TD>
   </TR>
   <TR VALIGN=TOP>
    <TD VALIGN=TOP ALIGN=RIGHT>
     <A HREF="">Home</A><BR>
     <A HREF="bugs.php">Bugs</A><BR>
     <A HREF="features.php">Features</A><BR>
     <A HREF="download.php">Download</A><BR>
     <A HREF="sshots.php">Screen Shots</A><BR>
     <A HREF="demo.php">Demo</A><BR>
    </TD>
    <TD VALIGN=TOP>
<?
}

function doPageFooter()
{
?>
    </TD>
   </TR>
	 <TR VALIGN=BOTTOM HEIGHT=1>
	  <TD colSpan=2>
     <A HREF="http://sourceforge.net">
      <IMG SRC="http://sourceforge.net/sflogo.php?group_id=5113&type=1" ALT="SourceForge Logo" BORDER=0>
     </A>
	  </TD>
	 </TR>

  </TABLE>
 </BODY>
</HTML>
<?
}

?>
