<?php class StatusPetitionController{
   
   public function statusPetition(){
    $id_s = $_GET['id_s'];
    $id_p = $_GET['id_p'];
    //echo $id_p;
    //$id_s = 'b6220503555';
    //echo $id_s;
    $student_sp = Student::get($id_s);
    //$inf_pet = Petition::getInf($id_s);
    $petition=Petition::get($id_p);
    $datee_start = Petition::convertDate($petition->date_start);
    $datee_end = Petition::convertDate($petition->date_end);
    require_once('views/status_petition/statuspet.php');
   }
   

}
?>