<?php class SigninController{
    public function sign()
    {
        $student_List=Student::getAll();
        require_once("./views/sign_in/signin.php");
    }
   

}
?>