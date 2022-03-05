<?php
$controllers = array('pages'=>['home','error']) ; 
function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "workcycle" :  require_once("./models/workcycle.php"); 
                            require_once("./models/fieldhospital.php"); 
                            $controller = new WorkCycleController(); break ;
        
        case "workcycledetail" :  require_once("./models/wddoctor.php"); 
                                  require_once("./models/wdstaff.php");
                                  require_once("./models/workcycle.php"); 
                                  require_once("./models/workcycledetail.php");
                                  require_once("./models/doctor.php");
                                  require_once("./models/staff.php");
                                  require_once("./models/position.php"); 
                                  $controller = new WorkCycleDetailController(); break ;

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