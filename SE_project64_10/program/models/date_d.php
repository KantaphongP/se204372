
    <?php class Date_d{
     public $date_d;
    

    
  
    public function __construct($date_d)
    {
        $this->date_d = $date_d;
        
        
    }
    public static function getAll()
    {
        $dateList=[];
        require("connection_connect.php");
        $sql="SELECT DISTINCT date_d FROM petition natural join student natural join company natural join type ORDER BY date_d DESC;";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
          
            $date_d=$my_row['date_d'];
          
            $dateList[] = new Date_d($date_d);
        }
        require("connection_close.php");
        return $dateList;


    }
    
    


}

?>