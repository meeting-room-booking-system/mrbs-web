<?
include "inc/main.inc";

doPageHeader("Demo");
?>

<H2>Try MRBS</H2>
<P>
 You can find a demonstration installation
 <A HREF="/mrbs/">here</A>
 it should always be running the very latest version straight from CVS, I
 sometimes forget to update it, but it should be a good demo of what the
 program does.
<P>
</P>
 There's nothing about it which is different from what you get. You can even
 use the <A HREF="/mrbs/admin.php3">admin</A> stuff
 although I would prefer it if you didn't delete too much! If you do go and
 delete a room or something then can you add another one back again when
 you're done. You can login as any of the following users.  Additional help
 is available under the <A HREF=/mrbs/help.php3>help</A> link at the top of the
 page.
<PRE>
 username  password

  demo1     demo
  demo2     demo
  admin     admin
</PRE>
<P>
</P>
 Some people have gone a bit mad with adding or deleting stuff, so I've set up
 a cron job that will reload the database with 'good' data at midnight PDT
 daily.
</P>

<? doPageFooter(); ?>
