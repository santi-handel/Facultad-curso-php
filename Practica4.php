<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num=rand(1,100);
        if($num<=50)
        {
            echo "el numero ". $num." es menor igual a 50";
        } 
        else
        {
            echo "el numero ".$num." es mayor a 50";
        }
    ?>
    
</body>
</html>