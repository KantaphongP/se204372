<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'login';
    $action = 'signin';
}?>
<html>
    <head></head>
    <body>
       
        <?php require_once("./routes.php");?>
    </body>
</html>