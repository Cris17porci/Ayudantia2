<html>
    <head>
        <title>Login ISW</title>
    </head>
    <body>
        <?php
        $usuario="isw";
        $contraseņa="isw";
        $user=$_POST['user'];
        $pass=$_POST['pass'];
        
        if ($user!=$usuario)
            {
            echo "Usuario incorrecto Vuelva atras para ingresar nuevamente  ";
            ?>
            <a href="<?=$_SERVER["HTTP_REFERER"]?>">  Regresar  </a>
            <?php
            
            }
            elseif ($pass!=$contraseņa)
                {
                echo "Contraseņa incorrecta Vuelva atras para ingresar nuevamente      ";
                ?>
            <a href="<?=$_SERVER["HTTP_REFERER"]?>">  Regresar  </a>
                <?php
                }
                
                else
                    {
                    ?>
            <h1>A Ingresado Correctamente </h1>
            <h2> Recuerde que este es solo un prueba de un login para ISW 2013/01</h2>
                <?php
                
                    }
                    ?>
    </body>
</html>