<?php
require "libs/MySQL.php";
$db = new MySQL();

// Cargar un XML con SimpleXMLIterator
$libros = simplexml_load_file('libros.xml', 'SimpleXMLIterator');

// Número de elementos con XML
$total = $libros->count();
function altaLibro($autor,$titulo,$editorial,$precio,$fecha,$paginas,$db){
    $sql = "SELECT * FROM libros WHERE ";
    $sql.= "autor='".$autor."' AND ";
    $sql.= "titulo='".$titulo."'";
    $r = $db->query($sql);
    if ($r==NULL) {
        $sql = "INSERT INTO libros VALUES(0,";
        $sql.= "'".$autor."',";
        $sql.= "'".$titulo."', ";
        $sql.= "'".$editorial."', ";
        $sql.= "'".$precio."', ";
        $sql.= $fecha.", ";
        $sql.= $paginas.")";
        if($db->queryNoSelect($sql)){
            $salida = "Ok";
        } else {
            $salida = "Error";
        }
        return $salida;
    } else {
        return "ya existe";
    }
}
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Uso de Iterator</title>
</head>
<body>
<?php if (!$libros) { ?>
    <p>No hay datos disponibles</p>
<?php } else {
    print "<h2>Total libros: ".$total."</h2>";
    print "<table border='1'>";
    print "<tr>";
    print "<th>Autor</th>";
    print "<th>Título</td>";
    print "<th>Editorial</td>";
    print "<th>Precio</td>";
    print "<th>Fecha</td>";
    print "<th>Páginas</td>";
    print "<th>Res</td>";
    print "</tr>";
    foreach ($libros as $libro) {
        $r = altaLibro($libro->autor,$libro->titulo,$libro->editorial,$libro->precio,$libro->fecha,$libro->titulo["paginas"],$db);
        print "<tr>";
        print "<td>".$libro->autor."</td>";
        print "<td>".$libro->titulo."</td>";
        print "<td>".$libro->editorial."</td>";
        print "<td>".$libro->precio."</td>";
        print "<td>".$libro->fecha."</td>";
        print "<td>".$libro->titulo["paginas"]."</td>";
        print "<td>".$r."</td>";
        print "</tr>";
        
    }
    print "</table>";
}
?>
</body>
</html>