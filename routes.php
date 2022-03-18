<?php
$controllers = array('pages'=>['home','error'],'company'=>['index','indexs','searchs','newCompany','addCompany','search','updateForm','update','deleteConfirm','delete'],'login'=>['signin','check','home','petition','index','addpetition'],'lecturer'=>['signin','check','home','petition','search','detailpet','approve','no'],'status_petition'=>['statusPetition']) ; 
function call($controller ,$action){
    //echo "routes to ".$controller."-".$action."<br>" ;
    require_once("controllers/".$controller."_controller.php");
    switch($controller)
    {
        case "pages" : $controller = new PagesController() ; break ;

        case "company" : require_once("./models/company.php");
                             require_once("./models/student.php");
                             require_once("./models/lecturer.php");
                               $controller = new CompanyController(); break ;
        
        case "login" : require_once("./models/student.php");
                        require_once("./models/petition.php");
                        require_once("./models/company.php");
                        require_once("./models/type.php");
                             $controller = new SigninController(); break ;
       
        case "lecturer":require_once("./models/lecturer.php");
                         require_once("./models/petition.php");
                         $controller = new LecturerController(); break ;

        case "status_petition": require_once("./models/student.php");
                                require_once("./models/petition.php");
                                require_once("./models/company.php");
                                $controller = new StatusPetitionController(); break;

       

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