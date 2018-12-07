<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <header>
        <h1>Mostrar Datos</h1>
    </header>
    <section>
        <article>
            <?php
            $servidor = "localhost";
            $usuario = "root";
            $password = "root";
            $nombreBD = "carogoMusic";
 
            $conexion = new mysqli($servidor,$usuario,$password,$nombreBD);

            if($conexion -> connect_error){
                die("conexión fallida".$conexion -> connect_error);
            }
            echo "conexión realizada con exito";
            echo "<br>";

            $sql = "select nombre,direccion from sucursal,personal where sucursal.id_sucursal=personal.id_sucursal;";
            $resultados = $conexion -> query($sql);

            if($resultados -> num_rows > 0){
                echo "<table class='table'>";
                echo "<tr>";
                echo "<td>NOMBRE PERSONAL</td>";
                echo "<td>DIRECCION SUCURSAL</td>";
                echo "</tr>";
                echo "<tr>";
                while($row = $resultados -> fetch_assoc()){
                    echo "<td>".$row["nombre"]."</td>"."<td>".$row["direccion"]."</td>";
                }
                echo "</tr>";
                echo "</table>";
            }else{
                echo "no hay datos";
            }
            ?>
        </article>
    </section>
</body>
</html>