<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | Errores</title>
	<meta charset="utf-8">
	<?php
	libxml_use_internal_errors(true);
	$libros_xml = simplexml_load_file("libros.xml");
	if ($libros_xml===false) {
		foreach (libxml_get_errors() as $error) {
			print "Nivel: ".$error->level."<br>";
			print "Codigo: ".$error->code."<br>" ;
			print "Columna: ".$error->column."<br>" ;
			print "Mensaje: ".$error->message."<br>" ;
			print "Archivo: ".$error->file."<br>" ;
			print "Linea: ".$error->line."<br>" ;
			print "<hr>";
		}
	} else {
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
	}
	?>
</head>
<body>

</body>
</html>