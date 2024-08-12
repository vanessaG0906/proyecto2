<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | AppendChild AppendAttribute</title>
	<meta charset="utf-8">
	<?php
	$libros = [
		['id' => 1, 'autor' => 'Gabriel García Márquez', 'titulo'=>'Cien años de soledad'],
		['id' => 2, 'autor' => 'Gabriel García Márquez', 'titulo'=>'El amor en tiempos del cólera'],
		['id' => 3, 'autor' => 'Gabriel García Márquez', 'titulo'=>'El coronel no tiene quien le escriba']
	];

	$libros_xml = simplexml_load_string("<libros></libros>");

	foreach ($libros as $l) {
		$libro = $libros_xml->addChild('libro');
		$libro->addAttribute('id', $l['id']);
		$libro->addChild('autor', $l['autor']);
		$libro->addChild('titulo', $l['titulo']);
	}

	$libros_xml->asXML("libros.xml");
	print "El archivo ha sido creado...";
	?>
</head>
<body>

</body>
</html>