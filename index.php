<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="BetKing, la forma más sencilla de apostar">
    <?php require_once 'app/config.php'; ?>
    <?php require_once 'app/dependencias.php'; ?>
    <title>BetKing, la forma más sencilla de apostar</title>
</head>
<body class="bg-light">
    <?php 
        session_start();
        require_once 'view/navbar.php';
        
        if(isset($_GET['view'])){
            $url = explode("/", $_GET['view']);

            if(count($url)<2)

                switch($url[0]){
                    case 'inicio': 
                        require_once 'view/inicio.php';
                        break;
                    case 'registro': 
                        require_once 'view/registro/registro.php';
                        break;    
                    case 'login': 
                        require_once 'view/login/login.php';
                        break;
                    case 'deportes': 
                        require_once 'view/deportes/deportes.php';
                        break;
                    case 'soccer': 
                        require_once 'view/deportes/soccer.php';
                        break;
                    case 'box': 
                        require_once 'view/deportes/box.php';
                        break;       
                    case 'americano': 
                        require_once 'view/deportes/americano.php';
                        break;       
                    default:
                        require_once 'view/404.php';
                        break;

                }  
            else
                header("location:".SERVIDOR."404");        

        }else{
            require_once 'view/inicio.php';
        }
    ?>
</body>
</html>