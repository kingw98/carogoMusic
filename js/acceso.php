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
        <h1>Recibe Datos</h1>
    </header>
    <section>
        <article>
            <?php 
             ini_set('display_errors' , 'off');
             ini_set('display_startup_erros','off');
             error_reporting(0);

            $username = $_POST["username"];
            $pass = $_POST["pass"];
            

            echo "username: " .$username . "<br>";
            echo "pass: " .$pass . "<br>";
           
            ?>
        </article>
        <article>
            <h2>Conexion</h2>
            <?php 
            $servidor = "localhost";
            $usuario = "root";
            $password = "root";

            $nombreBD="login";
            #se crea la conexion
            $conexion = new mysqli($servidor,$usuario,$password,$nombreBD);
            #chequeo la conexion
            if($conexion -> connect_error){
                die("conexion fallida".$conexion -> connect_error);
            }   
            echo"conexion realizada con exito";
            ?>
        </article>
        <article>
            <?php 
           $sql = "SELECT * FROM usuarios WHERE nombre ='".$username."' AND pass =  '".$pass."'";
           $resultados = $conexion -> query($sql);

           try{
               if(mysql_result($resultados, 0))
               {$result = mysql_result($resultados, 0);
               echo "Usuario validado correctamente";

           }else
           echo"Usuario o contraseña erroneas.";
        }catch(Exception $error){}
        
           $conexion -> close();

            ?>
        </article>    
     </section>
</body>
</html>