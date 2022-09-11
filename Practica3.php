<html>
<head></head>
<body>
    <?php
        $dia=date("d");
        if($dia<=10){
        echo "La pagina se encuentra disponible";    
        }
        else
        {
            echo "sitio fuera de servicio";
        }
    ?>
</body>
</html>