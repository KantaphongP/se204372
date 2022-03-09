<?php
$controllers = array('pages'=>['home','error'],'company'=>['index','newCompany','addCompany','search','updateForm','update','deleteConfirm','delete']) ; 
function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "company" :  require_once("./models/company.php"); 
                            $controller = new CompanyController(); break ;
        
       

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