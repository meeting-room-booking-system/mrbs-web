<?php

// Include standard functions
include("inc/functions.inc.php");

page_header(NULL, "Demo");

?>

<ul>
  <li><a href="https://mrbsdemo.mooo.com/mrbs/">Demonstration installation</a></li>
  <li><a href="https://mrbsdemo.mooo.com/periodmrbs/">Demonstration using periods</a></li>
  <li><a href="https://mrbsdemo.mooo.com/mrbs/admin.php">Area/room configuration</a></li>
  <li><a href="https://mrbsdemo.mooo.com/mrbs/help.php">Additional Help</a></li>
</ul>
<p>
  These installations should always be running the latest released version.
  If they happen to be running an older version they should still be a good
  demo of what MRBS does. Sometimes the Sourceforge web servers hosting the
  demo run rather slowly, you should see better performance on your own
  web server!
</p>
<p>
  The installations are a standard installation of MRBS, using the simpler
  'config' authentication system, to stop people deleting users.
  You can use the <a href="https://mrbsdemo.uk.to/mrbs/admin.php">area/room configuration</a>
  system, although we'd prefer it if you didn't delete other users' configuration!
  You can login as any of the following users, only the user "admin" has
  administrative rights. Additional help is available under the
  <a href="https://mrbsdemo.uk.to/mrbs/help.php">help</a> link at the top of the page.
</p>

<table class="prettytable">
  <thead>
    <tr>
      <th>Username</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>demo1</td><td>demo</td>
    </tr>
    <tr>
      <td>demo2</td><td>demo</td>
    </tr>
    <tr>
      <td>admin</td><td>admin</td>
    </tr>
  </tbody>
</table>

<?php

page_footer();

?>
