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

            $sql = "select id_disco,id_sucursal,id_compañia,nombre_disco,artista,canciones from disco;";
            $resultados = $conexion -> query($sql);

            if($resultados -> num_rows > 0){
                while($row = $resultados -> fetch_assoc()){
                    echo "ID DISCO: ".$row["id_disco"].", ID SUCURSAL: ".$row["id_sucursal"].", ID_COMPAÑIA: ".$row["id_compañia"].", NOMBRE_DISCO: ".$row["nombre_disco"].", ARTISTA: ".$row["artista"].", ARTISTA: ".$row["canciones"]."<br>";
                }
            }else{
                echo "no hay datos";
            }
            ?>
        </article>
    </section>
</body>
</html>