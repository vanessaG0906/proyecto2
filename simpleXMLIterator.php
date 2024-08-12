<?php
//Cargar el archivo libros
$libros = simplexml_load_file("libros.xml","SimpleXMLIterator");

$total = $libros->count();

print "<h2>Total de libros: ".$total."</h2>";
print "<table border='1'>";
print "<tr>";
print "<th>Autor</th>";
print "<th>Titulo</th>";
print "<th>Editorial</th>";
print "<th>Fecha</th>";
print "<th>Paginas</th>";
print "</tr>";
foreach ($libros as $libro) {
	print "<tr>";
	print "<td>".$libro->autor."</td>";
	print "<td>".$libro->titulo."</td>";
	print "<td>".$libro->editorial."</td>";
	print "<td>".$libro->fecha."</td>";
	print "<td>".$libro->titulo["paginas"]."</td>";
	print "</tr>";
}
print "</table>";