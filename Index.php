<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica2_M07</title>
</head>
<body>

    <?php
        // Definir una constante para el valor del IVA
        define('IVA', 0.21); // Puedes cambiar el valor del IVA según sea necesario

        // Declarar un array de cursos con información
        $cursos = array(
            array(
                'Nom' => 'PHP',
                'Descripció' => 'Introducció a PHP',
                'Preu' => 15.5
            ),
            array(
                'Nom' => 'Laravel',
                'Descripció' => 'Laravel per experts',
                'Preu' => 30
            ),
            array(
                'Nom' => 'Django',
                'Descripció' => 'Dominant Django',
                'Preu' => 10
            )
        );

        // Utilizar un bucle for para recorrer los cursos
        for ($i = 0; $i < count($cursos); $i++) {
            echo $cursos[$i]['Nom'] . "<br>";
            echo $cursos[$i]['Descripció'] . "<br>";
            
            // Calcular el precio con el IVA
            $preuAmbIVA = $cursos[$i]['Preu'] * (1 + IVA);
            echo "Preu amb IVA: " . $preuAmbIVA . "<br>";

            echo "<br>";
        }
    ?>



</body>
</html>