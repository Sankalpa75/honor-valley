<?php include("includes/header.php"); ?>

<?php if($page=='home') { include("includes/banner.php"); } else if ($page=="contact"){} else {include('includes/smallbanner.php');} ?> 

<?php include("$page.php"); ?>

<?php include("includes/footer.php"); ?>
