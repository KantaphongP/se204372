<?php class StatusPetitionController{
   
   public function statusPetition(){
    //$id_s = $_GET['id_s'];
    $id_s = 'b6220503555';
    $student_sp = Student::get($id_s);
    $inf_pet = Petition::get($id_s);
    $inf_com = Company::get($id_s);
    require_once('views/status_petition/statuspet.php');
   }
   

}
?>