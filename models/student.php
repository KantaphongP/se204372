<?php class Student{
     public $id_s;
     public $name_s;
    public $lastname_s;
    public $password;
     public $email;
    public $phone_s;
    
  
    public function __construct($id_s,$name_s,$lastname_s,$password,$email,$phone_s)
    {
        $this->id_s = $id_s;
        $this->name_s = $name_s;
        $this->lastname_s = $lastname_s;
        $this->password = $password;
        $this->email=$email;
        $this->phone_s=$phone_s;
        
    } 
    public static function sign($id_s,$password)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM company WHERE id_c='$id_c'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_c = $my_row['id_c'];
        $name_c = $my_row['name_c'];
        $address_c= $my_row['address_c'];
        $phone_c=$my_row['phone_c'];
        $quantity = $my_row['quantity'];
        $income=$my_row['income'];
        require("connection_close.php");
        return new Company($id_c,$name_c,$address_c,$phone_c,$quantity,$income);


    }

    public static function getAll()
    {
        $studentList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM student ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_s = $my_row['id_s'];
            $name_s = $my_row['name_s'];
            $lastname_s=$my_row['lastname_s'];
            $password=$my_row['password'];
            $email=$my_row['email'];
            $phone_s=$my_row['phone_s'];
            $studentList[] = new Student($id_s,$name_s,$lastname_s,$password,$email,$phone_s);
        }
        require("connection_close.php");
        return $studentList;


    }
    
    public static function get($id_p)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM company WHERE id_c='$id_c'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_c = $my_row['id_c'];
        $name_c = $my_row['name_c'];
        $address_c= $my_row['address_c'];
        $phone_c=$my_row['phone_c'];
        $quantity = $my_row['quantity'];
        $income=$my_row['income'];
        require("connection_close.php");
        return new Company($id_c,$name_c,$address_c,$phone_c,$quantity,$income);


    }
   
    public static function search($key)
    {
        $companyList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM company WHERE name_c like '%$key%' or quantity like '%$key%' or income like '%$key%' ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_c = $my_row['id_c'];
            $name_c = $my_row['name_c'];
            $address_c= $my_row['address_c'];
            $phone_c=$my_row['phone_c'];
            $quantity = $my_row['quantity'];
            $income=$my_row['income'];
            $companyList[] = new Company($id_c,$name_c,$address_c,$phone_c,$quantity,$income);
        }
        require("connection_close.php");
        return $companyList;

    }
   
     public static function Add($id_t,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve)
     { 
        
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`( `id_t`, `id_s`, `status_ap_company`, `position_s`, `name_getbook`, `position_g`, `name_hr`, `phone_hr`, `email_hr`, `apartment`, `date_start`, `date_end`, `status_approve`)
         VALUES ($id_t,'$id_s','$status_ap_company','$position_s','$name_getbook','$position_g','$name_hr','$phone_hr','$email_hr','$apartment','$date_start','$date_end','$status_approve');";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    
     public static function update($id_c,$name_c,$address_c,$phone_c,$quantity,$income)
     {
        require("connection_connect.php");
        $sql="UPDATE `company` SET `id_c`=$id_c,`name_c`='$name_c',`address_c`='$address_c',`phone_c`='$phone_c',`quantity`=$quantity,`income`=$income WHERE id_c=$id_c";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function delete($id_c)
     {
         require_once("connection_connect.php");
         $sql="DELETE FROM `company` WHERE id_c=$id_c";
         $result=$conn->query($sql);
         require("connection_close.php");
         return ;
     }



}

?>