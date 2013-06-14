<?php
  $rootdir="";
  $pagetitle="Examples";
  include $rootdir."inc/top.inc.php";
  $pagedescription=$sysvar_prog_name." is a PHP and CSS based menu generator for websites which is driven by the directory structure and menu.csv files for each directory.";
?>

<p>
Her you will see links to examples of AgerMenu in use in the 
menu.
</p>

<p>
You can download the code at the 
<a href="<?php echo $sysvar_prog_url; ?>"><?php echo $sysvar_prog_name; ?> Homesite</a>.

<p>
<?php echo $sysvar_prog_name; ?> is a PHP and CSS based menu generator for websites 
which is driven by the directory structure and menu.csv 
files for each directory.
</p>

<?php
  include $rootdir."inc/bottom.inc.php";
?>
