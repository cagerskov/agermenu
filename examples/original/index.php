<?php
  $rootdir="";
  $pagetitle="Original example - Entrance";
  $pagedescription="AgerMenu is a PHP and CSS based menu generator for websites which is driven by the directory structure and menu.csv files for each directory.";
  include $rootdir."inc/top.inc.php";
?>

<p>
AgerMenu is a PHP and CSS based menu generator for websites 
which is driven by the directory structure and menu.csv 
files for each directory.
</p>

<p>
This is the original example from version 0.01 with the all 
the updates to current version but with the same layout using 
the same CSS files with just a minor changes to keep the 
example up to date.
</p>

<p>
You can see more examples on the 
<a href="<?php
  if ( file_exists("../examples/index.php") ) {
    echo "..";
  } else {
    echo "http://www.chbs.dk/proj/agermenu";
  }
?>/examples/index.php">AgerMenu Examples Site</a>.
</p>

<?php
  include $rootdir."inc/bottom.inc.php";
?>
