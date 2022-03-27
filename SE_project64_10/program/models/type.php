<?php class Type{
     public $id_t;
     public $name_t;

    
  
    public function __construct($id_t,$name_t)
    {
        $this->id_t = $id_t;
        $this->name_t = $name_t;
        
    }
    public static function getAll()
    {
        $typeList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM type ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_t = $my_row['id_t'];
            $name_t = $my_row['name_t'];
            
            $typeList[] = new Type($id_t,$name_t);
        }
        require("connection_close.php");
        return $typeList;


    }
    
    
    


}

?>