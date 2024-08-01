<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | XPath</title>
	<meta charset="utf-8">
	<?php
	error_reporting(E_ALL);
	$libros_xml = simplexml_load_file("libros.xml");
	$ns = $libros_xml->getNamespaces(true);
	$path = "//aut:apellido-paterno[text()='García']/../..";
	$filtro_xml = $libros_xml->xpath($path);

	foreach ($filtro_xml as $libro) {
		$aut = $libro->autor->children("aut",true);
		$lib = $libro->children($ns["lib"]);
		$pag = $libro->titulo->attributes("http://www.ejemplo.com/otro");
		//
		print $libro->titulo."<br>";
		print $libro->autor->nombre." ";
		print $aut->{"apellido-paterno"}." ";
		print $aut->{"apellido.materno"}."<br>";
		print "Editorial: ".$lib->editorial."<br>";
		print "Precio: $".$lib->precio."<br>";
		print "Año: ".$lib->{"año"}."<br>";
		print "Pág: ".$pag["paginas"]."<br>";
		print "<hr>";
	}
	?>
</head>
<body>

</body>
</html>