<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | SimpleXML y DOMDocument</title>
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

	//$libros_xml->asXML("libros.xml");
	//Creamos un objeto DOM
	$doc = new DOMDocument('1.0','utf-8');
	$doc->formatOutput = true;
	//Importa simpleXML
	$nodo = dom_import_simplexml($libros_xml);
	//
	$nodo = $doc->importNode($nodo,true);
	//Añadimos los nodos
	$doc->appendChild($nodo);
	//Guardamos el archivo
	$doc->save('librosNuevo.xml');
	//
	print "El archivo ha sido creado...";
	?>
</head>
<body>

</body>
</html>