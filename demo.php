<?php

include("inc/functions.inc.php");

page_header(NULL, "Demo");

?>

<ul>
  <li><a href="mrbs/">Demonstration installation</a></li>
  <li><a href="periodsmrbs/">Demonstration using periods</a></li>
  <li><a href="mrbs/admin.php">Admin pages</a></li>
  <li><a href="mrbs/help.php">Additional Help</a></li>
</ul>
<p>
  You can find a demonstration installation <a href="mrbs/">here</a>
  it should always be running the very latest version straight from 
  SVN, it's not always up to date, but it should be a good demo
  of what the MRBS does.
</p>
<p>
  There's nothing about it which is different from 
  what you get. You can even use the
  <a href="mrbs/admin.php">admin</a> 
  stuff although we'd prefer it if you didn't delete too much! If
  you do go and delete a room or something then can you add another 
  one back again when you're done. You can login as any of the following 
  users, only the user "admin" has administrative rights.
  Additional help is available under the
  <a href="mrbs/help.php">help</a>  link at the top of the page.
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
