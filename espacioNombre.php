<!DOCTYPE html>
<html>
<head>
	<title>SimpleXML | Espacio de nombres</title>
	<meta charset="utf-8">
	<?php
	$libros_xml = simplexml_load_file("libros.xml");
	$doc_ns = $libros_xml->libro[0]->getDocNamespaces();
	$ns = $libros_xml->libro[0]->autor->getNamespaces(true);

	print "<pre>";
	print var_dump($doc_ns);
	print "</pre>";
	print "<hr>";
	print "<pre>";
	print var_dump($ns);
	print "</pre>";
	?>
</head>
<body>

</body>
</html>