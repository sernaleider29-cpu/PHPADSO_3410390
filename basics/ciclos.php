<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclos en PHP</title>
</head>

<body>
    <?php
    # Ciclo FOT
    $limite = 50;
    for ($i = 0; $i <= $limite; $i++) {
        echo "[FOR] $i <br>";
        # Impresion de los numeros del 0 al 50
    }
    echo "------------------------------------------------- <br>";
    //Ciclo WHILE
    $limite = rand(50, 100);
    $inicio = 1;
    echo "<br>";
    //Impresion del numeros del 1 al limite aleatorio (Entre 50 y 100)
    while ($inicio <= $limite) {
        echo "[WHILE] Número " . $inicio . "<br>";
        $inicio++;
    }
    echo "-------------------------------------------- <br>";
    // Do WHILE
    $dia = date("d");
    $inicio = rand(10, 20);
    #Mostrar los números del 1 a la fecha actual
    do {
        echo "Mostrar números del 1 a la fecha actual [DO..WHILE] Número $inicio <br>";
    } while ($inicio <= $dia);
    echo "---------------- <br>";
    #Mostrar la Tabla de multiplicar del 2.
    # Utilizar for, while y do...while
    $multiplos = 2;
    for ($i=1; $i <= 10 ; $i++) { 
        echo "[FOR] 2x $i =" .(2 *$i)."<br>";
    }
    echo "----------------------- <br>";
    $i = 1;
    while ($i <= 10) {
        echo "[WHILE] 2x $i =" .(2 *$i)."<br>";
        $i++;
    }
    echo "----------------------------- <br>";
    $a = 1;
    do {
        echo "[DO...WHILE] 2x $a =" .(2 *$a)."<br>";
        $a++;
    } while ($a <= 10);
    ?>
</body>

</html>