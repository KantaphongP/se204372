<?php class Company{
     public $id_c;
     public $name_c;
    public $address_c;
    public $phone_c;
     public $quantity;
    public $income;
  



    public function __construct($id_c,$name_c,$address_c,$phone_c,$quantity,$income)
    {
        $this->id_c = $id_c;
        $this->name_c = $name_c;
        $this->address_c = $address_c;
        $this->phone_c = $phone_c;
        $this->quantity=$quantity;
        $this->income=$income;
     
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
    public static function get($id_c)
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