<?php
$fichero = fopen('ejemplo.txt', 'r');

if ($fichero === false) {
    echo 'No se encuentra el fichero, ejemplo.txt';
} else {
    echo 'Se abrió exitosamente el fichero ejemplo.txt';
}

echo "<br>";

$fichero2 = fopen('holamundo.txt', 'r+');

if ($fichero2 === false) {
    echo 'No se encuentra el fichero, holamundo.txt';
} else {
    echo 'Se abrió exitosamente el fichero holamundo.txt';
}

echo "<br>";

$fichero3 = fopen('ejemplo3.txt', 'r');
if ($fichero3 === false) {
    echo 'No se encuentra el fichero, ejemplo3.txt';
} else {
    while (!feof($fichero3)) {
        $car3 = fgetc($fichero3);
        echo $car3;
    }
}

fclose($fichero3);

echo "<br>";

$fichero4 = fopen('matriz.txt', 'r');
if ($fichero4  === false) {
    echo 'No existe el fichero matrix.txt';
} else {
    while (!feof($fichero4)) {
        $n = fscanf($fichero4, '%d %d %d %d');
        echo $n[0] . "<br>" . $n[1] . "<br>" . $n[2] . "<br>" . $n[3];
    }
}
rewind($fichero4);

echo "<pre>";
while (!feof($fichero4)) {
    $n = fscanf($fichero4, '%d %d %d %d', $n1, $n2, $n3, $n4);
    echo $n1 . "<br>" . $n2 . "<br>" . $n3 . "<br>" . $n4;
}
fclose($fichero4);

echo "<br>";

$contenido = file_get_contents('crear.txt');
echo 'Contenido del fichero ' . $contenido;
$res = file_put_contents('p.txt', 'Fichero creado con un file_put_contents');

if($res) {
    echo 'creado';
} else {
    echo 'error';
}
