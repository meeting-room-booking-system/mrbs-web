<?
if (! preg_match("/^\w+\.mrbs$/",$show)) {
	$show="about.mrbs";
}

if (! preg_match("/MSIE|Lynx/",$HTTP_USER_AGENT)) {
	$dontbedull = 1;
}

$farray = file($show);

list($key, $title) = each($farray);

?>

<html>
<head>
<title><?echo $title?></title>
</head>

<? if ($dontbedull) { ?>

<BODY marginheight=0 marginwidth=0 topmargin=0 leftmargin=0 BGCOLOR="white"
background=bg.gif>

<table border=0 cellspacing=0 cellpadding=0>
<tr>
<td colspan=2>
<img src=bg-top.gif>
</td>
</tr> 
<tr>
<td width=160 valign=top>
<img src=ae_top1.gif><br>

<?
}
function button($u, $d, $l) {
	global $dontbedull;
	if ($dontbedull) {
		echo "<a href=$l><img src=$u border=0></a><br>\n";
	} else {
		echo "<a href=$l>$d</a><br>\n";
	}
}


button("about-up.gif","About","index.php3?show=about.mrbs");
button("demo-up.gif","Demo","index.php3?show=demo.mrbs");
button("faq-up.gif","FAQ","index.php3?show=faq.mrbs");
button("bugs-up.gif","Bugs","index.php3?show=bugs.mrbs");
button("get-up.gif","Download","index.php3?show=get.mrbs");

if ($dontbedull) {
?>
<img src=ae_end1.gif>

<p>

</td><td valign=top>
<?
}
echo "<h1>$title</h1>\n";

while (list($key, $val) = each($farray)) {
	$val = preg_replace("# http://(.*?)/(.*?) #"," <a href=http://\\1/\\2>http://\\1/\\2</a> ",$val);
	$val = preg_replace("/^(\w+)$/","<h2>\\1</h2>",$val);
	echo "$val<br>\n";
}

?>
<p><br><p>
<hr>
Meeting Room Booking System Web<br>
<address>daniel@pl14759.demon.co.uk</address><br>
<img src="http://sourceforge.net/sflogo.php?group_id=5113&type=1">

<? if ($dontbedull) { ?>
</td>
</tr>
</table>
<? } ?>
</body>
</html>

<?

if (! (preg_match("/xindex\.php3/",$HTTP_REFERER))) {
	$logstr = date("Y-m-d H:i:s")."\t$HTTP_ACCEPT_LANGUAGE\t$REQUEST_URI\t".gethostbyaddr($REMOTE_ADDR)."\t$HTTP_REFERER\t$HTTP_USER_AGENT\n";
	$log = fopen("/home/groups/mrbs/log2/mrbs.log","a");
	fwrite($log,$logstr);
	fclose($log);
}
?>
