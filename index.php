<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head> 
<body>

<h1>Icono del Dia</h1>
<?php
<header name="Arr-Disable-Session-Affinity" value="true"></header>
$instancia=$_SERVER["WEBSITE_INSTANCE_ID"];
echo('Id estancia : '.$instancia);
?>
<br>
<img src="randomicon.php"/>

</body>
</html>



