<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="" method="POST">
 <textarea name="texts"></textarea>
<td><button class="btn btn-primary" href="#">OK</button></td>
</form>
<?php
function qwerty($text){
	$a = str_split($text);
	for ($i = 0; $i <= (strlen($text)-1); $i++){
		if ($a[$i] == "a"){
		$a[$i] = "@";
}
}
$b = implode($a);
	echo $b;
}
qwerty($_POST["texts"]);
?>



</body>
</html>