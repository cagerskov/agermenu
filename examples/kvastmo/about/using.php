<?php
  $rootdir="../";
  $pagetitle="Using AgerMenu";
  $pagedescription="How to install, configure and use AgerMenu as the menu script at your website.";
  include $rootdir."inc/top.inc.php";
?>

<p>
AgerMenu is very easy too install, configure and use when you just follow these 
few steps.
</p>

<h2>Step 1: Before installation</h2>

<p>
The system you want to use AgerMenu has to support PHP version 4.3 or later.
Maybe it can be used on earlier version of PHP then let me know.
</p>

<p>
Backup website data.
</p>

<p>
If you want to use AgerMenu on an existing website then take a copy 
of the existing website so you don't mess the working website.
Copy the primary index.php (if you have one) to old_index.php so it 
doesn't get overwritten when installing AgerMenu. If you have a 
css directory you should rename (move) it to old_css.
</p>

<h2>Step 2: Installation</h2>

<p>
Just unpack AgerCon in an temporary directory and copy the content of 
the example directory to the directory where you want it to be used.
</p>

<h2>Step 3: Converting</h2>

<p>If you are converting an existing website then you have to 
insert the following lines at the top of each PHP files:
</p>

<blockquote><pre>
&lt;?php
$rootdir="../";
$pagetitle="The page's title";
$pagedescription="A description of the page";
include $rootdir."inc/top.inc.php";
?&gt;</pre></blockquote>

<p>
where <tt>"../"</tt> is replaced by the relative path to the 
root of the website where AgerMenu is used. In the top it is 
<tt>""</tt>, in the first subdirectory level it is 
<tt>"../"</tt>, in the secound subdirectory level it is 
<tt>"../../"</tt> and so on.
</p>

<p>
In the bottom of each file you insert the following lines:
</p>

<blockquote><pre>
&lt;?php
include $rootdir."inc/bottom.inc.php";
?&gt;</pre></blockquote>


<p>
If you want to contribute or have a contribution for AgerMenu then please 
write to the main developer Claus Agerskov 
&lt;<a href="mailto:ca@chbs.dk">ca@chbs.dk</a>&gt;.
</p>

<?php
  include $rootdir."inc/bottom.inc.php";
?>
