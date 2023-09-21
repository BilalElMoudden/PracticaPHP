<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica1_M07_Bilal</title>
</head>
<body>

    <?php

        $nombre = "Kurt";
        $apellido = "Cagle";
        $edad = 40;
        $fecha = new DateTime();
        $fecha->setDate(1983, 5, 12);

        $telefono = "654332211 - 933332211";
        $direccion = "Carrer de Turin, 15";
        $correo = "kurt.cagle@example.com";
        $trabaja = "Si";
        $altura = 1.67;
        
    ?>

    <h1>Descrivint a Kurt Cagle</h1>

    <h2>Les dades de Kurt son:</h2>

    <ul>
        <li>Es diu <?php echo $nombre; ?></li>
        <li>Te <?php echo $edad; ?> anys</li>      
        <li> Va néixer l'any: <b><?php echo $fecha->format('Y-m-d'); ?> </b></li>
        <li>Els seus teléfons son: <?php echo $telefono; ?></li>
        <li>Viu a: <?php echo $direccion; ?></li>
        <li>El seu email es: <?php echo $correo; ?></li>
        <li>Traeballa: <?php echo $trabaja; ?></li>
        <li>I medeix: <?php echo $altura; ?></li>
    </ul>

    
</body>
</html>