<!doctype html>
<html lang="en">
    <head>
        <title>PROYECTO 1 BASE DE DATOS</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <div class="container">
            <!-- formulario, nombre, apellidos, email, etc.-->
            <?php 
                $nombre = $email = $comentario = $website = $opcion = "";
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    $nombre = basededatos1($_POST["nombre"]);
                    $email = basededatos1($_POST["email"]);
                    $comentario = basededatos1($_POST["comentario"]);
                    $website = basededatos1($_POST["website"]);
                    $opcion = basededatos1($_POST["opcion"]);
                }
                function basededatos1($data){
                    $data = trim($data);
                    $data = stripcslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
            ?>    
            <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <label for="">NOMBRE:</label>
                <input type="text" name="nombre"><br><br>
                <label for="">E-MAIL:</label>
                <input type="text" name="email"><br><br>
                <label for="">DEJE SU COMENTARIO:</label><br><br>
                <textarea name="comentario" id="" cols="30" rows="5"></textarea><br><br>
                <label for="">WEBSITE:</label>
                <input type="text" name="website"><br><br>
                <label for="">ESTUDIOS:</label><br><br>
                <input type="radio" name="opcion" value="bachiller"> BACHILLER <br><br>
                <input type="radio" name="opcion" value="superior"> SUPERIOR<br><br>
                <input type="radio" name="opcion" value="doctorado"> DOCTORADO<br><br>
                <input type="submit" name="submit" value="ENVIAR"><br><br>
            </form>
            <?php 
                echo $nombre . "<br>";
                echo $email . "<br>";
                echo $comentario . "<br>";
                echo $website . "<br>";
                echo $opcion . "<br>";
            ?>
        </div>
            

        <footer>
            
        </footer>
        
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
