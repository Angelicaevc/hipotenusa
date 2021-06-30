<html>
    <head>
        <meta charset="utf-8">
        <title>Hipotenusa</title>
    </head>
    <body>
        <?php
        if(isset($_POST['btnP']) && $_POST['btnP']=='Calcular'){

            $cateto1 =3;
            $cateto2 =4;
            $hip =null;
    
            $hip= (sqrt(pow($cateto1,2)+pow($cateto2,2)));
    
            echo"<h3> Cálculo de la Hipotenusa del Triángulo Rectangulo </h3>";
            echo'Cateto Opuesto: '.$cateto1, '<br/>';
            echo'Cateto Adyacente: ' .$cateto2, '<br/>';
            echo'Hipotenusa del Triángulo: '.$hip, '<br/><br/>'; 
        }
        ?>
    </body>
</html>