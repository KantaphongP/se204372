<?php class SigninController{
    public function signin()
    {
        $student_List=Student::getAll();
        require_once("./views/sign_in/signin.php");
    }
    public function index()
    {
        $id_s=$_GET['id_s'];
        $student=Student::get($id_s);
        require_once("./views/student/welcome.php");
    }
    public function check()
    {
        $id_s=$_GET['id_s'];
        $passwords=$_GET['passwords'];
        $check=Student::sign($id_s,$passwords);
       //echo $check;
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
    public function home()
    {
        $id_s=$_GET['id_s'];
        $student=Student::get($id_s);
        require_once("./views/student/welcome.php");
    }
    public function petition()
    {
        $id_s=$_GET['id_s'];
        //echo $id_s;
        $student=Student::get($id_s);
        $company_List=Company::getAll();
        $type_List=Type::getAll();
        require_once("./views/student/petition.php");
    }
   public function addpetition()
   {
    $date_d=$_GET['date_d'];  
    $id_t=$_GET['id_t'];
    $id_s=$_GET['id_s'];
    $position_s=$_GET['position_s'];
    $name_getbook=$_GET['name_getbook'];
    $position_g=$_GET['position_g'];
    $id_c=$_GET['id_c'];
    $name_hr=$_GET['name_hr'];
    $phone_hr=$_GET['phone_hr'];
    $email_hr=$_GET['email_hr'];
    $apartment=$_GET['apartment'];
    $date_start=$_GET['date_start'];
    $date_end=$_GET['date_end'];
    $year =$_GET['year'];
    Petition::Add($id_t,$id_c,$id_s,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$date_d,$year);
    SigninController::index();
   }

   public function allPetition()
    {
        $id_s=$_GET['id_s'];
        //echo $id_s;
        $student=Student::get($id_s);
        $petition_List= Petition :: getAllMe($id_s);
        require_once("./views/student/all_petition.php");
    }

}
?>