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
function str($text){
	$a = explode(" ", $text);
	$ab = array($text);
	$b = count($a); 
	$c = $b % 2;
	if ($c == 0)
	{
		echo "ваш текст состоит из четного количества слов: $text" ."<BR>";
	}
	elseif ($c == 1)
	{
		$d = strrev($text);
		echo "ваш текст состоит из нечетного количества слов: $d" ."<BR>";
	}
}

str($_POST["texts"]);
?>



</body>
</html>