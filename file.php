<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<form action="" method="POST">
Введите путь к файлу:
<input name="adress" type="text">
<td><button class="btn btn-primary" href="#">OK</button></td>
</form>
 
<table class="table table-hover">
<thead>
<tr>
<th>TEXT</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<?php
$file = $_POST["adress"]; // F:\\name2.txt
$homepage = file_get_contents($file, "r");
echo $homepage;
?>
</td>
</tr>
</tbody>
</table>
<table class="table table-hover">
<thead>
<tr>
<th>INFO</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<?php
$file = $_POST["adress"];
$stat = stat($file);
$a = round($stat['size']/1024, 2);
$b = date('l jS \of F Y h:i:s A', $stat['mtime']);
echo "Размер $a Кбайта" . "<BR>";
echo "Время изменения: $b" . "<BR>"; 
?>
</td>
</tr>
</tbody>
</table>
<table class="table table-hover">
<thead>
</thead>
<tbody>
<tr>
<td>

</div>
 </body>
</html>
<body>
</body>
</html>