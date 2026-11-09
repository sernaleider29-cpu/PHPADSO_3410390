<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Tipos de variables
    //  En PHP no es necesario declarar el tipo de Datos
    $dia = 4; // tipo INT
    $salario = 2000000.50; // Tipo double
    $nombre = "Ana"; // Tipo String
    $estado = true; // Tipo Boolean

    //Impresión de variables
    echo "<br> Variable tipo entero: $dia";
    echo "<br> Variable tipo double:" . $salario;
    echo "<br> Variable tipo String:" . $nombre;
    echo "<br> Variable tipo boolean:" . $estado;
    echo "<hr>";
    
    echo "{$nombre} gana \$$salario"; //Interpolación y escape de caracteres
    echo "<br>";
    echo "<hr>";
    
    //Uso de printf
    $texto = sprintf("Hoy es %d", $dia);
    echo "$texto";
    $peras = 3;
    $manzanas = 5;
    $mangos = 4;
    $precioFrutas = 25500.30;
    $texto = sprintf("Tengo %d peras, %d manzanas, %d mangos y costaron $%.2f", $peras, $manzanas, $mangos, $precioFrutas);
    echo "<br>" . $texto;

    //Uso de Heredoc
    echo "<hr>";
    $titulo = "Programa de formación";
    $texto = "Analisis y Desarrollo de Software";
    $html = <<<HTML
    <div class = "card">
        <h2>$titulo</h2>
        <p>$texto</p>
    HTML;
    echo $html;

    //Ejercicio
    $numero = rand(10,15);
    $randomTexto = ["Diez", "Once", "Doce", "Trece", "Catorce", "Quince"];
    $texto = $randomTexto [$numero - 10];
    echo "El numero es $numero, y se escribe $texto";
    ?>
</body>

</html>