<?php
    include_once 'includes/survey4.php';
?>
<!DOCTYPE html>
<html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sistemas de encuestas</title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
    <link rel="stylesheet" href="main.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="fonts.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
    <header>
        <div class="menu_bar">
            <a href="#" class="bt-menu"><span class="icon-briefcase"></span>Encuesta día del niño</a>
        </div>
 
        <nav>
            <ul>
                <li><a href=""><span class="icon-briefcase"></span>Encuesta día del niño</a></li>
            </ul>
        </nav>
    </header>
    <?php
        $survey = new Survey();
        $showResults = false;
        $option = '';

        if(isset($_POST['lenguaje'])){
            $showResults = true;
            
            $survey->setOptionSelected($_POST['lenguaje']);
            $survey->vote();
        }
    ?>
    <section>
    <form action="#" method="POST">
        <h2>¿Usted se mantiene informado sobre las ultimas noticias hacerca del covid-19?</h2>
        <?php
            if($showResults){
                $queryLanguages = $survey->showResults();

                echo "<h2>" . $survey->getTotalVotes() . " votos totales</h2>";
                
                foreach ($queryLanguages as $lenguaje) {
                    $porcentaje = $survey->getPercentageVotes($lenguaje['votos']);

                    include 'vistas/vista-resultados4.php';
                }
                include 'vistas/sig4.php';
            }else{
                include 'vistas/vista-votacion4.php';
            }
        ?> 
    </form>
</section>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>