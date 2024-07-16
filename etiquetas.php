<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | Etiquetas</title>
	<meta charset="utf-8">
	<?php
	$libros_xml = simplexml_load_file("libros.xml");
	print "Total de libros: ".$libros_xml->count()."<hr>";
	foreach ($libros_xml as $libro) {
			print strtoupper($libro->titulo)."<br>";
			print "Páginas: ".$libro->titulo["paginas"]."<br>";
			print "Autor: ".$libro->autor->{"nombre"}." ";
			print $libro->autor->{"apellido-paterno"}." ";
			print $libro->autor->{"apellido.materno"}."<br>";
			print "Editorial: ".$libro->editorial."<br>";
			print "Precio: $".$libro->precio."<br>";
			print "Fecha: ".$libro->{"año"}."<br>";
			print "<hr>";
	}

	?>
</head>
<body>

</body>
</html>