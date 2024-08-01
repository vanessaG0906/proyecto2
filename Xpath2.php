<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | XPath</title>
	<meta charset="utf-8">
	<?php
	error_reporting(E_ALL);
	$libros_xml = simplexml_load_file("libros.xml");
	$libros_xml->registerXPathNamespace('a', "http://www.ejemplo.com/autores");
	
	$path = "//a:apellido-paterno[text()='García']/../..";
	$ns = $libros_xml->getNamespaces(true);
	$filtro_xml = $libros_xml->xpath($path);
	print "<pre>".var_dump($ns)."</pre>";
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