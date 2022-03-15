<?php class Lecturer{
     public $id_l;
     public $name_l;
    public $lastname_l;
    public $passwords;
   
  



    public function __construct($id_l,$name_l,$lastname_l, $passwords)
    {
        $this->id_l = $id_l;
        $this->name_l = $name_l;
        $this->lastname_l = $lastname_l;
        $this->passwords = $passwords;
     
    }
    public static function sign($id_l,$passwords)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM lecturer WHERE id_l='$id_l' AND passwords ='$passwords'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        if(is_null($my_row['id_l']))
        {
            $y=1;
        }
        else
        {
            $y=2;
        }
        require("connection_close.php");
        return $y;


    }
    public static function getAll()
    {
        $companyList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM company ";
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
    public static function get($id_l)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM lecturer WHERE id_l='$id_l'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_l = $my_row['id_l'];
        $name_l = $my_row['name_l'];
        $lastname_l= $my_row['lastname_l'];
        $passwords=$my_row['passwords'];
    
        require("connection_close.php");
        return new Lecturer($id_l,$name_l,$lastname_l, $passwords);

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
   
     public static function Add($name_c,$address_c,$phone_c,$quantity,$income)
     { 
        
        require("connection_connect.php");
        $sql = "INSERT INTO `company`( `name_c`, `address_c`, `phone_c`, `quantity`, `income`) VALUES ('$name_c','$address_c','$phone_c',$quantity,$income);";
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