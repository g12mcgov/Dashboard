<?php 
	session_start();
	
	if (!(isset($_SESSION['login']) && $_SESSION['login'] != '')) {
		header ("Location: login.php");
	}

?>

<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php echo '<p> Dashboard </p>'; ?> 
 </body>
</html>