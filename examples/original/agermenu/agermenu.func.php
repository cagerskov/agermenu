<?php
  
  function agermenu_create($prepath,$pagepath,$prefix="") {

    if ( ! file_exists($prepath."menu.csv" ) )  return "File ".$prepath."menu.csv is not found.";

# Getting the menu.csv file containing the menu points. 
# One menu point on each line with link name and file or 
# directory name separatede by a comma,
# 
# Example:  About AgerMenu,about.php
    $content = file($prepath."menu.csv");
    
    foreach($content as $content_line) {
      list($linktext, $linkpath) = explode(",", $content_line);
     
      if ( $linkpath<>"" ) {
     
        $linkpath=$prepath.trim($linkpath);

        if ( file_exists($linkpath) ) {
          echo "<a class=\"agermenu".$prefix."item\" href=\"".$linkpath."\">";
          if ( strstr($pagepath,$linkpath) ) {
            echo "<span class=\"activemenu\">";
            echo $linktext;
            echo "</span>";
            echo "</a>\n";
  
            agermenu_create($linkpath."/",$pagepath,$prefix."sub");
          } else {
            echo $linktext;
            echo "</a>\n";
          } 
        }
      }
    }
    
    return "Menu created on this level.";
  }
  
  function agermenu_relative_path($root_dir) {
    # Return the relative path to the current page viewed
    return $root_dir.ereg_replace("^.*\/(".str_replace("../","[^/]*\/",$root_dir)."[^/]*)$","\\1",$_SERVER['PHP_SELF']);
  }
?>
