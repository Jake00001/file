<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="" method="POST">
text:
  <textarea name="texts"></textarea>
<input type="submit">


<?php
function obr($text){
$texts = explode(" ", $text);   
foreach ($texts as $key => $value){
	$texts [$key] = strrev(ucwords(strrev($value)));
}
$texts = array_slice($texts, 0, 5);
$texts_posl = implode(" ", $texts);
echo "<br>".$texts_posl;
}



obr($_POST["texts"]);





?>
</body>
</html>