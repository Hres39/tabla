<?php
    require 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABLA REGISTRO</title>

    <!-- Aqui es el logo de utc en chiquito, va en la 
    parte superior (arriba) izquierda -->
    <link rel="website icon" type="png" 
    href="https://seeklogo.com/images/U/universidad-tres-culturas-logo-197F96E3D2-seeklogo.com.png">

    <head>
        <body>

<p>TABLA REGISTRO CALAVERA LITERARIA<p>
            <table border="1">
                <thead>
                    <tr>    
                        <th>nombre</th>
                        <th>grupo</th>
                        <th>carrera</th>
                        <th>plantel</th>
                        <th>calavera</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while($obj=pg_fetch_object($consulta)){ ?>
                        <tr>
                            
                            <td><?php echo $obj->nombre;?></td>
                            <td><?php echo $obj->grupo;?></td>
                            <td><?php echo $obj->carrera;?></td>
                            <td><?php echo $obj->plantel;?></td>
                            <td><?php echo $obj->calavera;?></td>

                        </tr>
                    </tbody>
                    <?php
                }
                ?>
            </table>

                        


                </tbody>

            </table>

        </body>
    </head>