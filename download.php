<?php

include("inc/functions.inc.php");

page_header(NULL, "Download");

?>

            <ul>
              <li class="body">
                <a href="http://sourceforge.net/project/showfiles.php?group_id=5113">
                  Download Tarball</a>
              </li>
              <li class="body">
                <a href="http://sourceforge.net/svn/?group_id=5113">
                  SVN Instructions</a>
              </li>
            </ul>
            <p class="body">
              The latest releases will always be available
              <A href="http://sourceforge.net/project/showfiles.php?group_id=5113">
                on the Sourceforge download page</a> along with release notes
              describing what's changed. Just find the latest release and click the
              &quot;Download&quot; link by the &quot;mrbs&quot; package like this :
            </p>
            <p align="center" class="body">
              <br>
              <img src="images/mrbs_download.png"
               alt="Picture of SF download page" width="505" height="107"> 
            </p>
            <p class="body">
              Alternatively you can get MRBS via SVN,
              insructions are <a href="http://sourceforge.net/svn/?group_id=5113">here</a>.
              Releases are currently made from the trunk <b>mrbs/trunk</b>,
              but further minor releases are likely to be made on a stabke
              branch.
            </p>
            
            <pre>
      $ svn co https://mrbs.svn.sourceforge.net/svnroot/mrbs/mrbs/trunk mrbs
</pre>

            <p class="body">
              For installation instructions please refer to a file 
              called "<a href="view_text.php?section=Documentation&amp;file=INSTALL">INSTALL</a>" in the tarball that 
              you download.
            </p>

<?php

page_footer();

?>
