<nav id="topbar">
  <ul>
    <?php
	$items = array(array("index.php", "Home"), array("projects.php", Projects), array("resume.pdf target=_blank", Resume));
	foreach ($items as $itm) {
		if(basename($_SERVER['PHP_SELF'])!=$itm[0]) echo "<li> <a href=",$_SERVER['CONTEXT_PREFIX']."/".$itm[0],"> $itm[1] </a> </li>";
		else echo "<li id=\"currentPage\"> <b> $itm[1] </b> </li>";
	}
     ?>
  </ul>
</nav>      
