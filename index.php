<?php

include("inc/functions.inc.php");

page_header(NULL, "Introduction");

?>

                    <h2>What is MRBS?</h2>
                    <p class="body">
                      MRBS is a free, GPL, web application using PHP and 
                      MySQL/pgsql for booking meeting rooms. It's similar in concept to 
                      Netscape Calendar, but much cheaper!
                    </p>

                    <h2>Some features:</h2>
                    <ul>
                      <li class="body">Web/Intranet based - Available from any workstation 
                        through a Browser</li>
                      <li class="body">Simple to follow, Web based options and intuitive 
                        presentation</li>
                      <li class="body">Flexible Repeating Bookings</li>
                      <li class="body">Authentication with your existing user database 
                        (eg Netware, NT Domain, NIS etc.)</li>
                      <li class="body">Ensures that conflicting entries cannot be entered</li>
                      <li class="body">Reporting option</li>
                      <li class="body">Selectable DAY / WEEK / MONTH views</li>
                      <li class="body">Multiple auth levels (read-only, user, admin)</li>
                      <li class="body">
                        Multiple languages supported (translated to Catalan, Czech,
                        Chinese, Danish, Dutch, Finnish, French, German, Greek,
                        Italian, Japanese, Korean, Norwegian, Portuguese, Slovenian,
                        Spanish, Swedish, Turkish)
                      </li>
                      <li class="body">Stable and in use at many organizations</li>
                      <li class="body">MySQL and Postgres support</li>
                    </ul>
                    <h2>Demo</h2>
                    <p class="body">
                      There is a demonstration version of MRBS described
                      <a href="demo.php">here</a>. Please try not to break it too badly!
                    </p>
                    <h2>Stability</h2>
                    <p class="body">
                      MRBS is very reliable at this point. All the features 
                      that are needed in day-to-day operation are included. It's very 
                      intuitive for users, so very little or no instruction is needed. 
                      It is in production use at many large organisations around the world 
                      for uses as diverse as it's originally intended meeting rooms to 
                      restaurant tables and aeroplanes at a flying school!
                    </p>
                    <p class="body">
                      Different languages are supported, there are translations 
                      for many languages available (current list above).
                      If your language is not supported it is very easy to customize as 
                      all strings are stored in language-specific files.
                    </p>
                    <h2>Contact</h2>
                    <p class="body">
                      The main MRBS mailing list is
                      <a href="mailto:mrbs-general@lists.sourceforge.net"> 
                        mrbs-general@lists.sourceforge.net</a> send absolutely anything 
                      there. You can sign up <a href="http://lists.sourceforge.net/mailman/listinfo/mrbs-general"> 
                        here</a>, or browse the archives etc. </p>
                    <h2>History</h2>
                    <p class="body">
                      MRBS was originally written by <a href="mailto:daniel@danielgardner.org"> 
                        Daniel Gardner</a>. With the codebase initially taken from <a href="http://webcalendar.sourceforge.net/">WebCalendar</a> 
                      because it seemed as though they had similar objectives. These days 
                      there is very little (if any) code from the original project. There 
                      have been many contributors to the project, most notably Sam Mason 
                      and L J Bayak.
                    </p>
                    <p class="body">
                      Everything is provided by <a href="http://sourceforge.net/">SourceForge</a> -
                      because they're nice like that.
                    </p>
                    <p class="body">
                      <a href="http://sourceforge.net">
                        <img src="http://sflogo.sourceforge.net/sflogo.php?group_id=5113&type=1" width="88" height="31" border="0" alt="SourceForge Logo"> 
                      </a>
                    </p>
                    <p class="body">&nbsp;</p>

<?php

page_footer();

?>
