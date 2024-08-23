<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 4 PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<style>
    table {
        border-collapse: collapse;
    }
    td {
        border: 2px solid black;
    }
    img {
        width: 100px; /* Ajuste o tamanho das imagens conforme necessário */
        height: auto;
    }
</style>

<body>

<?php
// Título da galeria de imagens
echo "<h1>Galeria de imagens</h1>";
echo "<h4>Gumball</h4>";

// Primeira linha de imagens
echo "<table><tr>";
for ($x = 1; $x <= 5; $x++) {
    echo "<td><img src='img/img" . $x . ".png' alt='Gumball Image " . $x . "'></td>";
}
echo "</tr></table>";

// Segunda linha de imagens
echo "<table><tr>";
for ($x = 6; $x <= 10; $x++) {
    echo "<td><img src='img/img" . $x . ".png' alt='Gumball Image " . $x . "'></td>";
}
echo "</tr></table>";
?>

</body>
</html>
