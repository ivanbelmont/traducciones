<?php

$id_fichero1=@fopen("palabras.docx", "r") // Abrimos el fichero en modo lectura
or die('<b><i>El fichero "fichero_test.txt" no se ha podido abrir.</i></b><br />');
echo '<b><i>El fichero "fichero_test.txt" existe y está abierto en modo lectura ("r").</i></b><br />';

echo '<br /><br />';
echo '<h2><u>Contar las palabras del fichero</u></h2>'; // Título que antecede al contenido del fichero

// Método largo para contar las palabras de un fichero.
// Usamos rewind para rebobinar el puntero al principio del fichero y el while con !feof para ir hasta su final. Así lo leemos completamente.
$contador_pal=0;
rewind($id_fichero1);
while (!feof($id_fichero1)){
$linea = fgets($id_fichero1);
$contador_pal += count(explode(" ", $linea));
}
fclose($id_fichero1); // Cerramos el fichero
echo "<b><i>El fichero contiene:</i></b><br /><br />";
echo "$contador_pal palabras";
?>