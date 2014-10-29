<?php session_start(); ?>
<?php  $first_name = $_SESSION["first_name"]; ?>	
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>2. periood 9. praktikum - teine</title>
</head>
<body>
	<pre>
		<?php  print_r($_SESSION); ?>
	</pre>
	<br>
	<?php echo $first_name; ?>
	<br>
	<a href="index.php">Esimene leht</a>
</body>
</html>
		