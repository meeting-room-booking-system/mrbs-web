<?
include "inc/main.inc";

doPageHeader("Features");
?>

<H2>Features</H2>
<P>
 MRBS uses <A HREF="http://www.mysql.com/" TARGET="_blank">MySQL</A> for its
 back end, it allows you to book optionally repeating entry's in rooms that
 are grouped by building.
</P>
<UL>
 <LI>Multiple user support with several authentication methods supported,
      Currently includes LDAP, SMB (Windows / SAMBA)
 <LI>Multiple rooms supported, with the ability to put them into logical groups
 <LI>Searching of the entry's
 <LI>Automatically stops bookings from overlapping
 <LI>Ability to specify repeating entry's
 <LI>Automatically displays content in the appropriate language depending on
      browser settings English, German, French, Spanish, Japanese, Chinese
      and Dutch (Some of these may be a bit out of date :( )
</UL>
<P>
 That's about all the important ones I can think of at the moment.
</P>

<? doPageFooter(); ?>
