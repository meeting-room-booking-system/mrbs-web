<?

if(!isset($file))
{
	if(isset($HTTP_REFERER))
		Header("Location: " . $HTTP_REFERER);
	else
		Header("Location: " . dirname($REQUEST_URI));
	
	exit();
}

include "inc/main.inc";

doPageHeader("Image Viewer");
?>

<IMG SRC="<?= $file ?>">

<? doPageFooter(); ?>
