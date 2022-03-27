<?php class Year{
     public $year;
    

    
  
    public function __construct($year)
    {
        $this->year = $year;
        
        
    }
    public static function getAll()
    {
        $yearList=[];
        require("connection_connect.php");
        $sql="SELECT DISTINCT year FROM petition ORDER BY year DESC; ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $year = $my_row['year'];
           
            
            $yearList[] = new Year($year);
        }
        require("connection_close.php");
        return $yearList;


    }
    
    
    


}

?>