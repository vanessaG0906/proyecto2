<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | Cadenas</title>
	<meta charset="utf-8">
	<?php
	$libros_xml = simplexml_load_file("libros.xml");
	print "Total de libros: ".$libros_xml->count()."<hr>";
	$previo = "";
	foreach ($libros_xml as $libro) {
		//if ($libro->autor->apellidos!="Vargas Llosa") {

			print strtoupper($libro->titulo)."<br>";
			print "Páginas: ".$libro->titulo["paginas"]."<br>";
			if($libro->autor->apellidos==$previo){
				print "Otro gran libro de ";
			}
			print "Autor: ".$libro->autor->nombre." ";
			print $libro->autor->apellidos."<br>";
			print "Editorial: ".$libro->editorial."<br>";
			print "Precio: $".$libro->precio."<br>";
			print "Fecha: ".$libro->fecha."<br>";
			print "<hr>";
			$previo = (string) $libro->autor->apellidos;
			//var_dump($previo);
		//}
	}

	?>
</head>
<body>

</body>
</html>