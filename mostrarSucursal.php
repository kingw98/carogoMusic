<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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

            $sql = "select id_sucursal,direccion,fono,email from sucursal;";
            $resultados = $conexion -> query($sql);

            if($resultados -> num_rows > 0){
                while($row = $resultados -> fetch_assoc()){
                    echo "ID: ".$row["id_sucursal"].", DIRECCION: ".$row["direccion"].", FONO: ".$row["fono"].", EMAIL: ".$row["email"]."<br>";
                }
            }else{
                echo "no hay datos";
            }
            ?>
        </article>
    </section>
</body>
</html>