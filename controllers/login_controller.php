<?php class SigninController{
    public function signin()
    {
        $student_List=Student::getAll();
        require_once("./views/sign_in/signin.php");
    }
    public function check()
    {
        $id_s=$_GET['id_s'];
        $passwords=$_GET['passwords'];
        $check=Student::sign($id_s,$passwords);
       echo $check;
       if($check ==1)
       {
        require_once("./views/sign_in/signin.php");
       }
       else
       {
        $student=Student::get($id_s);
        require_once("./views/student/welcome.php");
       }
    }
    public function petition()
    {
        $id_s=$_GET['id_s'];
        echo $id_s;
        $student=Student::get($id_s);
        require_once("./views/student/petition.php");
    }
   

}
?>