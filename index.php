<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Practica 12</title>
</head>
<body>
    <h1>Usando Variables</h1>
    <?php
    $Nombre="Adrian";
    $Edad=20;
    $SalarioMensual=8500.50;
    $Sindicalizado=false;
    echo $Nombre. '<br>';
    echo $Edad. '<br>';
    echo $SalarioMensual. '<br>';
    echo $Sindicalizado. '<br>';
    echo 'Empleado', $Nombre. 'tiene', $Edad,'years old';
    ?>
    <h1>Operaciones Aritmeticas</h1>
    <?php
    $Numero1=15;
    $Numero2=10;
    $Suma=$Numero1+$Numero2;
    $Resta=$Numero1-$Numero2;
    $Multiplicacion=$Numero1*$Numero2;
    $Division=$Numero1/$Numero2;
    echo 'suma', $Suma. 'resta', $Resta. 'multiplicacion', $Multiplicacion. 'division', $Division;
    echo 'suma', ($Numero1+$Numero2);
    if ($Sindicalizado==true)
    {
        echo 'va a huelga';
    }
    else
    {
        echo 'trabajara';
    }
    ?>
</body>
</html>