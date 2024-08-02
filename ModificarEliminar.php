<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | Modificar y elimnar elementos</title>
	<meta charset="utf-8">
	<?php
	$libros_xml = simplexml_load_file("libros.xml");

	foreach ($libros_xml as $libro) {
		$libro->precio += 100;
		$libro->editorial = "Oveja Negra";
		unset($libro->{"año"});
		unset($libro->titulo["paginas"]);
	}
	print "<pre>";
	$libros_xml->asXML("librosNuevo.xml");
	print "Listo";
	print "</pre>";
	?>
</head>
<body>

</body>
</html>