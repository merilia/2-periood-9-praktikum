<?php session_start(); ?>
<?php 
//	$_SESSION["first_name"] = "Merili"; 
//	$_SESSION["last_name"] = "Asu";
//	$_SESSION["email"] = "merili.asu@khk.ee";

	$email = "merili.asu@khk.ee";
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 9. praktikum</title>
</head>
<body>
	<pre>
		<?php print_r($_SESSION); ?>
	</pre>
	<a href="teine.php">Teine leht</a>
</body>
</html>
		