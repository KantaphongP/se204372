<?php class SigninController{
    public function signin()
    {
        $student_List=Student::getAll();
        require_once("./views/sign_in/signin.php");
    }
   

}
?>