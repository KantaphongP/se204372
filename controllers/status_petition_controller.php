<?php class StatusPetitionController{
   
   public function statusPetition(){
    $id_s = $_GET['id_s'];
    //$id_s = 'b6220503555';
    //echo $id_s;
    $student_sp = Student::get($id_s);
    $inf_pet = Petition::getInf($id_s);
    //$inf_com = Company::get($id_s);
    $datee_start = Petition::convertDate($inf_pet->date_start);
    $datee_end = Petition::convertDate($inf_pet->date_end);
    require_once('views/status_petition/statuspet.php');
   }
   

}
?>