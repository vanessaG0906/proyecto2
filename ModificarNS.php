<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | XPath</title>
	<meta charset="utf-8">
	<?php
	error_reporting(E_ALL);
	$libros_xml = simplexml_load_file("libros.xml");
	$ns = $libros_xml->getNamespaces(true);

	foreach ($libros_xml as $libro) {
		$aut = $libro->autor->children("aut",true);
		$lib = $libro->children($ns["lib"]);
		//
		$aut->{"apellido-paterno"} .= "*";
		$aut->{"apellido.materno"} .= "*";
		$lib->editorial = "Diana";
		$lib->precio -= 10;
		unset($lib->{"año"});
		unset($pag["paginas"]);
	}
	// print "<pre>";
	// print $libros_xml->asXML();
	// print "</pre>";
	$libros_xml->asXML("librosNuevo.xml");
	print "Listo";
	?>
</head>
<body>

</body>
</html>