<html>
	<head>
		<title> NULL </title>
	</head>
	<body> 
	
	<?php 
		$var1 = null;
		$var2 = "";
	?>
	
	var1 null?: <?php echo is_null($var1); ?> <br/>
	var2 null?: <?php echo is_null($var2); ?> <br/>
	
	var1 set?: <?php echo isset($var1); ?> <br/>
	var2 set?: <?php echo isset($var2); ?> <br/>
	
	<?php //In PHP, these values are considered as empty: "", null, 0, 0.0, "0", false, array() ?>
	</body>
</html>