<?php

include("inc/functions.inc.php");

page_header(NULL, "Download");

?>

<ul>
  <li>
    <a href="http://sourceforge.net/projects/mrbs/files">
      Download Tarball/Zip</a>
  </li>
  <li>
    <a href="https://sourceforge.net/p/mrbs/hg-code/">
      SVN Instructions</a>
  </li>
</ul>
<p>
  The latest releases will always be available
  <A href="http://sourceforge.net/projects/mrbs/files">
    on the Sourceforge download page</a> along with release notes
  describing what's changed. Just find the latest release and click the
  &quot;Download&quot; link by the &quot;mrbs&quot; package like this :
</p>
  <a href="http://sourceforge.net/projects/mrbs/files">
    <img id="download" src="images/mrbs_download.png"
     alt="Picture of SF download page" width="505" height="107" border=0> 
  </a>
<p>
  Alternatively you can get MRBS via Mercurial,
  instructions are <a href="https://sourceforge.net/p/mrbs/hg-code/">here</a>.
  Releases are currently made from the <b>'default'</b> branch.
</p>
            
<pre>
  $ hg clone -r default http://hg.code.sf.net/p/mrbs/hg-code mrbs-hg-code
</pre>

<p>
  For installation instructions please refer to a file 
  called "<a href="view_text.php?section=Documentation&amp;file=INSTALL">INSTALL</a>" in the tarball that 
  you download.
</p>

<?php

page_footer();

?>
