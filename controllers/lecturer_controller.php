<?php class LecturerController{
    public function signin()
    {
        require_once("./views/lecturer/signin.php");
    }
    public function check()
    {
        $id_l=$_GET['id_l'];
        $passwords=$_GET['passwords'];
        $check=Lecturer::sign($id_l,$passwords);
       echo $check;
       if($check ==1)
       {
        require_once("./views/lecturer/signin.php");
       }
       else
       {
        $student=Lecturer::get($id_l);
        require_once("./views/lecturer/welcome.php");
       }
    }
    public function petition()
    {
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
        
    }
   

}
?>