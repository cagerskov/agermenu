<?php
  $rootdir="";
  $pagetitle="Kvastmo example - Entrance";
  $pagedescription="AgerMenu is a PHP and CSS based menu generator for websites which is driven by the directory structure and menu.csv files for each directory.";
  include $rootdir."inc/top.inc.php";
?>

<p>
AgerMenu is a PHP and CSS based menu generator for websites 
which is driven by the directory structure and menu.csv 
files for each directory.
</p>

<p>
This is the Kvastmo example from version 0.03. 
</p>

<p>
The Kvastmo theme are developed for 
<a href="http://www.kvastmo.dk/">the Kvastmo website</a> 
which is a site in Danish about the time as a senior scout 
in a small town called Benløse (legloose in English if you 
translate it word piece by word piece) which me and one of 
my friends have created.
</p>

<p>
You can see more examples on the 
<a href="<?php
  if ( file_exists("../../examples/index.php") ) {
    echo "../..";
  } else {
    echo "http://www.chbs.dk/proj/agermenu";
  }
?>/examples/index.php">AgerMenu Examples Site</a>.
</p>

<?php
  include $rootdir."inc/bottom.inc.php";
?>
