<?php
$controllers = array('pages'=>['home','error'],'company'=>['index','newCompany','addCompany','search','updateForm','update','deleteConfirm','delete'],'login'=>['signin','check','petition','index','addpetition']) ; 
function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "company" : require_once("./models/company.php");
                               $controller = new CompanyController(); break ;
        
        case "login" : require_once("./models/student.php");
                        require_once("./models/petition.php");
                        require_once("./models/company.php");
                        require_once("./models/type.php");
                             $controller = new SigninController(); break ;
        

       

    }
    $controller->{$action}(); 
}
if(array_key_exists($controller,$controllers))
{
    if(in_array($action,$controllers[$controller]))
    {
        call($controller,$action) ;
    }else{
        call('page','error') ;
    }
}else
{    call('page','error') ;}
?>