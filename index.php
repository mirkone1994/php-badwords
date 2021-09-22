<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $paragrafo = "La Juventus è la squadra più ladra del globo terracqueo";
    echo "$paragrafo <br/>";
    echo strlen($paragrafo);
    $badword = $_GET['badword'];
    

    ?>
    <hr>
    <?php 
    $censura = str_replace($badword, '***', $paragrafo);
    echo "$censura <br/>";
    echo strlen($censura)
    ?>
</body>
</html>