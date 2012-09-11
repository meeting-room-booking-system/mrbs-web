<?php

include("inc/functions.inc.php");

page_header(NULL, "Introduction");

?>

<!-- test -->
 
<h2>What is MRBS?</h2>

<p>
  MRBS is a free, GPL, web application using PHP and 
  MySQL/pgsql for booking meeting rooms or other resources.
</p>

<h2>Some features:</h2>
<a href="view_image.php?file=screenshots/mrbs_main.png">
  <img id="features" src="screenshots/mrbs_main_s.png" width="200" height="161" alt="The main screen">
</a>
<ul>
  <li>Web/Intranet based - Available from any workstation 
    through a Browser</li>
  <li>Simple to follow, Web based options and intuitive 
    presentation</li>
  <li>Flexible Repeating Bookings</li>
  <li>Authentication with your existing user database 
    (eg Netware, NT Domain, NIS etc.)</li>
  <li>Ensures that conflicting entries cannot be entered</li>
  <li>Reporting option</li>
  <li>Selectable DAY / WEEK / MONTH views</li>
  <li>Multiple auth levels (read-only, user, admin)</li>
  <li>Support for bookings by time or period - ideal for use in schools</li>
  <li>Room administrators can be notified of bookings by email</li>
  <li>
    Multiple languages supported (translated to Catalan, Czech,
    Chinese, Danish, Dutch, Finnish, French, German, Greek,
    Italian, Japanese, Korean, Norwegian, Portuguese, Slovenian,
    Spanish, Swedish, Turkish)
  </li>
  <li>Stable and in use at many organizations</li>
  <li>MySQL and Postgres support</li>
</ul>
<h2>Demo</h2>
<p>
  There is a demonstration version of MRBS described
  <a href="demo.php">here</a>. Please try not to break it too badly!
</p>
<h2>Stability</h2>
<p>
  MRBS is very reliable at this point. All the features 
  that are needed in day-to-day operation are included. It's very 
  intuitive for users, so very little or no instruction is needed. 
  It is in production use at many large organisations around the world 
  for uses as diverse as it's originally intended meeting rooms to 
  restaurant tables and aeroplanes at a flying school!
</p>
<p>
  Different languages are supported, there are translations 
  for many languages available (current list above).
  If your language is not supported it is very easy to customize as 
  all strings are stored in language-specific files.
</p>
<h2>Contact</h2>

<p>
  See the <a href="contact.php">contact page</a>.
</p>

<h2>History</h2>
<p>
  MRBS was originally written by Daniel Gardner. With the codebase initially 
  taken from <a href="http://webcalendar.sourceforge.net/">WebCalendar</a> 
  because it seemed as though they had similar objectives. These days 
  there is very little (if any) code from the original project. There 
  have been many contributors to the project, most recently Campbell
  Morrison has implemented many features, with some support by John
  Beranek.
</p>
<p>
  Everything is provided by <a href="http://sourceforge.net/">SourceForge</a> -
  because they're nice like that.
</p>

<?php

page_footer();

?>
