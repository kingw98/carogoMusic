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
        <h1>Recibe datos</h1>
    </header>
    <section>
        <article>
            <?php
            $id = $_POST["id_sucursal"];
            $id_sucursal_nueva = $_POST["id_sucursal_nueva"];
            $direccion = $_POST["direccion"];
            $fono = $_POST["fono"];
            $email = $_POST["email"]
            ?>
        </article>
        <article>
            <h2>Conexión</h2>
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
            ?>
        </article>
        <article>
            <h2>Ingresar datos</h2>
            <?php
            $sql="update sucursal set id_sucursal = '".$id_sucursal_nueva."', direccion = '".$direccion."', fono = '".$fono."', email = '".$email."' where id_sucursal = '".$id."';";
            if($conexion -> query($sql) == true){
                echo "datos actualizados correctamente";
            }else{
                echo "Error: ".$sql." ".$conexion -> connect_error;
            }
            $conexion -> close();
            ?>
        </article>
    </section>
</body>
</html>