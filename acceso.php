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
       
    </header>
    <section>
       
        <article>

           
            <?php 
            $servidor = "localhost";
            $usuario = "root";
            $password = "root";

            $nombreBD="carogoMusic";
            #se crea la conexion
            $conexion = new mysqli($servidor,$usuario,$password,$nombreBD);
            #chequeo la conexion
            if($conexion -> connect_error){
                die("conexion fallida".$conexion -> connect_error);
            }   
            
            ?>
        </article>
        <article>
            <?php 
             $username = $_POST["username"];
             $pass = $_POST["pass"];
             
 

 
             

           $sql = "SELECT * FROM usuarios WHERE nombre ='".$username."' AND pass =  '".$pass."'";

      $resultados = mysqli_query($conexion,$sql);
            $filas=mysqli_num_rows($resultados);

           if($filas> 0){
               
                include('sucursal.html');
               
           }else{
               echo"datos incorectos";
           }
        
           $conexion -> close();

            ?>
        </article>    
     </section>
</body>
</html>