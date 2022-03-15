<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
    $controller = $_GET['controller'];
    $action = $_GET['action'];
}else
{
    $controller = 'pages';
    $action = 'home';
}?>
<html>
    <head></head>
    <body>
        <?php echo "controller= ".$controller.",action=".$action;?>
        <br>[<a href="?controller=pages&action=home">home</a>]
        [<a href="?controller=login&action=signin">เข้าสู่ระบบ</a>]
        [<a href="?controller=company&action=index">Company</a>]
        [<a href="?controller=lecturer&action=signin">เข้าสู่ระบบอาจารย์</a>]
      <br>
         
        <?php require_once("./routes.php");?>
    </body>
</html>