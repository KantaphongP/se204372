<?php class LecturerController{
    public function signin()
    {
        require_once("./views/sign_in/signin.php");
    }
    public function check()
    {
        $id_l=$_GET['id_l'];
        $passwords=$_GET['passwords'];
        $check=Lecturer::sign($id_l,$passwords);
       //echo $check;
       if($check ==1)
       {
        require_once("./views/sign_in/signin.php");
       }
       else
       {
        $lecturer=Lecturer::get($id_l);
        require_once("./views/lecturer/welcome.php");
       }
    }
    public function home()
    {
        $id_l=$_GET['id_l'];
        $lecturer=Lecturer::get($id_l);
        require_once("./views/lecturer/welcome.php");
    }
    public function petition()
    {
        $id_l=$_GET['id_l'];
        //echo 'jjjjj';
        //$id_l='jjjjj';
        $lecturer=Lecturer::get($id_l);
        
        $petition_List=Petition::getAll();
        require_once("./views/lecturer/petition.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $petition_List=Petition::search($key);
        require_once('./views/lecturer/petition.php');
    }
    public function detailpet()
    {
        $id_p=$_GET['id_p'];
        $petition=Petition::get($id_p);
        $date_s=Petition::convertDate($petition->date_start);
        $date_e=Petition::convertDate($petition->date_end);
        require_once('./views/lecturer/detail.php');
    }
    public function approve()
    {
        $reason=$_GET['reason'];
        $id_p=$_GET['id_p'];
        Petition::update($id_p,$reason);
        LecturerController::petition();
    }
    public function no()
    {
        $reason=$_GET['reason'];
        $id_p=$_GET['id_p'];
        Petition::update2($id_p,$reason);
        LecturerController::petition();
    }
   

}
?>