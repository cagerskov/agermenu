<?php
# Her angives værdier for de parametre, som er gældende for hele 
# systemet.
$sysvar_prog_name="AgerMenu";
$sysvar_prog_url="http://www.agercon.dk/proj/agermenu/";
$sysvar_prog_version="0.03.01";
$sysvar_prog_date="2013-06-14";
$sysvar_copyright_name="Claus Agerskov";
$sysvar_copyright_url=$rootdir."about/licenses/";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<title><?php echo $sysvar_prog_name.":".$pagetitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="description" content="<?php echo $pagedescription; ?>" /> 
<link rel="StyleSheet" href="<?php echo $rootdir; ?>css/screen.css" type="text/css" media="screen" /> 
<link rel="StyleSheet" href="<?php echo $rootdir; ?>css/print.css" type="text/css" media="print" />

<!-- The menu is created using <?php echo $sysvar_prog_name." ".$sysvar_prog_version ?> -->
<!--   <?php echo $sysvar_prog_url; ?> -->

<!-- <?php echo $sysvar_prog_name." ".$sysvar_prog_version ?> part 1 (CSS's) begin -->
<?php 
  if (file_exists($rootdir."agermenu/screen.css")) {
    echo "<link rel=\"StyleSheet\" href=\"".$rootdir."agermenu/screen.css\" type=\"text/css\" media=\"screen\" />\n";
  }
  if (file_exists($rootdir."agermenu/print.css")) {
    echo "<link rel=\"StyleSheet\" href=\"".$rootdir."agermenu/print.css\" type=\"text/css\" media=\"print\" />\n";
  }
?>
<!-- <?php echo $sysvar_prog_name." ".$sysvar_prog_version ?> part 1 (CSS's) end -->

</head>
<body>

<!-- <?php echo $sysvar_prog_name." ".$sysvar_prog_version ?> part 2 (The menu) begin -->
<div id="agermenu">

<a class="agermenulogo" href="<?php echo $rootdir."index.php"; ?>"><?php echo $sysvar_prog_name; ?></a>

<?php
  # The old default place (version 0.01 and 0.02) for 
  # the agermenu.func.php file for backward compatibility
  if (file_exists($rootdir."inc/agermenu.func.php")) {
    $agermenufuncfile=$rootdir."inc/agermenu.func.php";
  }
  
  # The new default place (from version 0.03) for 
  # the agermenu.func.php file
  if (file_exists($rootdir."agermenu/agermenu.func.php")) {
    $agermenufuncfile=$rootdir."agermenu/agermenu.func.php";
  }

  # Only include if the agermenu.func.php file exists
  if (file_exists($agermenufuncfile)) {
    include $agermenufuncfile;
    agermenu_create($rootdir,agermenu_relative_path($rootdir));
  } else {
    echo "<p>No AgerMenu function file found (agermenu.func.php)</p>\n";
  }
?>

<p class="agermenufooter"><a class="agermenufooter" href="<?php echo $sysvar_prog_url; ?>"><?php echo $sysvar_prog_name; ?> <?php echo $sysvar_prog_version; ?></a></p>

</div>
<!-- <?php echo $sysvar_prog_name." ".$sysvar_prog_version ?> part 2 (The menu) end -->

<div id="content">
<h1><?php echo $pagetitle; ?></h1>
