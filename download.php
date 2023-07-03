<?php

include("inc/functions.inc.php");

page_header(NULL, "Download");

?>

<ul>
  <li>
    <a href="https://sourceforge.net/projects/mrbs/files">
      Download releases</a>
  </li>
  <li>
    <a href="https://github.com/meeting-room-booking-system/mrbs-code">
      GitHub repository</a>
  </li>
</ul>
<p>
  The latest releases will always be available
  <A href="https://sourceforge.net/projects/mrbs/files">
    on the Sourceforge download page</a> along with release notes
  describing what has changed. Just find the latest release and click the
  &quot;Download&quot; link by the &quot;mrbs&quot; package like this :
</p>
  <a href="https://sourceforge.net/projects/mrbs/files">
    <img id="download" src="images/mrbs_download.png"
     alt="Picture of SF download page" width="505" height="107" border=0> 
  </a>
<p>
  Alternatively you can get MRBS from <a href="https://github.com/meeting-room-booking-system/mrbs-code">the GitHub repository</a>.
  Releases are currently made from the <b>'main'</b> branch.
</p>
            
<pre>
  $ git clone https://github.com/meeting-room-booking-system/mrbs-code.git
</pre>

<p>
  For installation instructions please refer to a file 
  called "<a href="view_text.php?section=Documentation&amp;file=INSTALL">INSTALL</a>" in the release/repository that 
  you download.
</p>

<?php

page_footer();

?>
