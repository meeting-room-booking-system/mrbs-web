<?
include "inc/main.inc";

doPageHeader("Home");
?>

<H2>Introduction</H2>
<P>
 MRBS is a free, GPL, web application using PHP and MySQL for booking
 meeting rooms. The program supports multiple rooms grouping them by
 building.  The program automatically ensures that conflicting entry's
 cannot be entered, when making a booking you can choose to make the
 booking repeat at daily
</P>
<P>
 It would be easier to look at the <A HREF="demo.php">demo</A> it shows what
 the whole thing is about. 
</P>
<P>
 It is very reliable at this point. All the features that are needed in
 day-to-day operation are included. It's very intuitive for users, so very
 little or no instruction is needed.
</P>
<P>
 Different languages are supported, currently English and Japanese string files
 are included.  This allows the program to be customised to book things other
 than meeting rooms. I have had reports of people using it for booking
 planes (at a flying club), and tables in a restaurant.
</P>
<H2>Contact</H2>
<P>
 If you want to comment then there's a mailing list
 <A HREF="mailto:mrbs-general@lists.sourceforge.net">
  mrbs-general@lists.sourceforge.net
 </A> send absolutely anything there. Go to the
 <A HREF="http://lists.sourceforge.net/mailman/listinfo/mrbs-general">
  mrbs-general admin
 </A> page to sign up, or browse the archives etc. If you really must, you
 can send mail straight to me
 <A HREF="mailto:smason@mtc.ricardo.com">Sam Mason</A> although the
 mailing list might be nicer. 
</P>
<P>
 If you do happen to install MRBS then I'd love to hear from you. It would
 be quite useful to know if this was being implemented anywhere.  Also, if you
 make any changes that you think would be usefull to other people, please send
 me an email with the changes attached, a diff to the latest version is
 the preferable format, but I should be able to sort out what's changed if
 you just send me a tarball of your mrbs directory.
</P>
<P>
 Also if you think of anything should be added or changed on this website
 then, again, please contact me. 
</P>
<H2>History</H2>
<P>
 MRBS was originally written by <A HREF="mailto:daniel@pl14759.demon.co.uk">
 Daniel Gardner</A>.  With the codebase initially taken from
 <A HREF="http://webcalendar.sourceforge.net/">WebCalendar</A> because
 it seemed as though they had similar objectives.  These days there
 is very little code from the original project.
</P>
<P>
 Everything is provided by
 <A HREF="http://sourceforge.net">SourceForge</A>- because they're nice like
 that. 
</P>

<? doPageFooter(); ?>
