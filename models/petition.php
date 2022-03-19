<?php class Petition{
     public $id_p;
     public $id_t;
     public $name_t;
     public $name_s;
     public $id_c;
     public $id_s;
     public $date_d;
     public $status_ap_company;
    public $position_s;
    public $name_getbook;
     public $position_g;
    public $name_hr;
    public $phone_hr;
    public $email_hr;
    public $apartment;
    public $date_start;
    public $date_end;
    public $status_approve;
    public  $name_c;
    public $income;
    public  $address_c;
    public  $phone_s;
    public $email_s;
    public $lastname_s;
    public $reason;
    public $year;


    public function __construct($lastname_s,$name_c,$income,$address_c,$email_s,$phone_s,$id_p,$name_s,$id_t,$id_c,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve,$date_d,$reason,$year,$name_t)
    {
        $this->id_p = $id_p;
        $this->id_t = $id_t;
        $this->name_t=$name_t;
        $this->id_c = $id_c;
        $this->id_s=$id_s;
        $this->name_s=$name_s;
        $this->date_d=$date_d;
        $this->status_ap_company=$status_ap_company;
        $this->position_s=$position_s;
        $this->name_getbook=$name_getbook;
        $this->position_g=$position_g;
        $this->name_hr=$name_hr;
        $this->phone_hr=$phone_hr;
         $this->email_hr =$email_hr ;
        $this->apartment=$apartment;
        $this->date_start=$date_start;
        $this->date_end=$date_end;
        $this->status_approve=$status_approve;
        $this->name_c=$name_c;
        $this->income=$income;
        $this->address_c=$address_c;
        $this->email_s=$email_s;
        $this->phone_s=$phone_s;
        $this->lastname_s=$lastname_s;
        $this->reason=$reason;
        $this->year=$year;
       
     
    }
    
    public static function get($id_p)
    {
        require("connection_connect.php");
        $sql="SELECT * FROM petition natural join student natural join company natural join type WHERE id_p='$id_p'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_p=$my_row['id_p'];
        $id_t=$my_row['id_t'];
        $name_t=$my_row['name_t'];
        $id_c=$my_row['id_c'];
        $name_c=$my_row['name_c'];
        $income=$my_row['income'];
        $address_c=$my_row['address_c'];
        $id_s=$my_row['id_s'];
        $name_s=$my_row['name_s'];
        $lastname_s=$my_row['lastname_s'];
        $phone_s=$my_row['phone_s'];
        $email_s=$my_row['email'];
        $date_d=$my_row['date_d'];
        $status_ap_company=$my_row['status_ap_company'];
        $position_s=$my_row['position_s'];
        $name_getbook=$my_row['name_getbook'];
        $position_g=$my_row['position_g'];
        $name_hr=$my_row['name_hr'];
        $phone_hr=$my_row['phone_hr'];
        $email_hr=$my_row['email_hr'];
        $apartment=$my_row['apartment'];
        $date_start=$my_row['date_start'];
        $date_end=$my_row['date_end'];
        $status_approve=$my_row['status_approve']; 
        $reason=$my_row['reason'];
        $year=$my_row['year'];
        require("connection_close.php");
        return new Petition($lastname_s,$name_c,$income,$address_c,$email_s,$phone_s,$id_p,$name_s,$id_t,$id_c,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve,$date_d,$reason,$year,$name_t);

    }
    public static function getAll()
    {
        $petitionList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM petition natural join student natural join company natural join type ";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_p=$my_row['id_p'];
            $id_t=$my_row['id_t'];
            $name_t=$my_row['name_t'];
            $id_c=$my_row['id_c'];
            $name_c=$my_row['name_c'];
            $income=$my_row['income'];
            $address_c=$my_row['address_c'];
            $id_s=$my_row['id_s'];
            $name_s=$my_row['name_s'];
            $lastname_s=$my_row['lastname_s'];
            $phone_s=$my_row['phone_s'];
            $email_s=$my_row['email'];
            $date_d=$my_row['date_d'];
            $status_ap_company=$my_row['status_ap_company'];
            $position_s=$my_row['position_s'];
            $name_getbook=$my_row['name_getbook'];
            $position_g=$my_row['position_g'];
            $name_hr=$my_row['name_hr'];
            $phone_hr=$my_row['phone_hr'];
            $email_hr=$my_row['email_hr'];
            $apartment=$my_row['apartment'];
            $date_start=$my_row['date_start'];
            $date_end=$my_row['date_end'];
            $status_approve=$my_row['status_approve']; 
            $reason=$my_row['reason'];
            $year=$my_row['year'];
            $petitionList[] = new Petition($lastname_s,$name_c,$income,$address_c,$email_s,$phone_s,$id_p,$name_s,$id_t,$id_c,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve,$date_d,$reason,$year,$name_t);
        }
        require("connection_close.php");
        return $petitionList;


    }
    public static function search($key)
    {
        $petitionList=[];
        require("connection_connect.php");
        $sql="SELECT * FROM petition natural join student natural join company natural join type WHERE date_d like '%$key%' or name_s like '%$key%' or lastname_s like '%$key%' or status_approve like '%$key%' or year like '%$key%' or name_t like '%$key%'";
        $result=$conn->query($sql);
        while($my_row=$result->fetch_assoc())
        {
            $id_p=$my_row['id_p'];
            $id_t=$my_row['id_t'];
            $name_t=$my_row['name_t'];
            $id_c=$my_row['id_c'];
            $name_c=$my_row['name_c'];
            $income=$my_row['income'];
            $address_c=$my_row['address_c'];
            $id_s=$my_row['id_s'];
            $name_s=$my_row['name_s'];
            $lastname_s=$my_row['lastname_s'];
            $phone_s=$my_row['phone_s'];
            $email_s=$my_row['email'];
            $date_d=$my_row['date_d'];
            $status_ap_company=$my_row['status_ap_company'];
            $position_s=$my_row['position_s'];
            $name_getbook=$my_row['name_getbook'];
            $position_g=$my_row['position_g'];
            $name_hr=$my_row['name_hr'];
            $phone_hr=$my_row['phone_hr'];
            $email_hr=$my_row['email_hr'];
            $apartment=$my_row['apartment'];
            $date_start=$my_row['date_start'];
            $date_end=$my_row['date_end'];
            $status_approve=$my_row['status_approve']; 
            $reason=$my_row['reason'];
            $year=$my_row['year'];
            $petitionList[] = new Petition($lastname_s,$name_c,$income,$address_c,$email_s,$phone_s,$id_p,$name_s,$id_t,$id_c,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve,$date_d,$reason,$year,$name_t);
        }
        require("connection_close.php");
        return $petitionList;

    }
   
     
     public static function update($id_p,$reason)
     {
        require("connection_connect.php");
        $sql="UPDATE `petition` SET `status_approve`='อนุมัติ',`reason`='$reason' WHERE id_p=$id_p;";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function update2($id_p,$reason)
     {
        require("connection_connect.php");
        $sql="UPDATE `petition` SET `status_approve`='ไม่อนุมัติ',`reason`='$reason' WHERE id_p=$id_p;";
        $result=$conn->query($sql);
        require("connection_close.php");
        return ;
        
     }
     public static function Add($id_t,$id_c,$id_s,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$date_d,$year)
     {
        require("connection_connect.php");
        $sql = "INSERT INTO `petition`(`date_d`, `id_t`, `id_c`, `id_s`, `status_ap_company`, `position_s`, `name_getbook`, `position_g`, `name_hr`, `phone_hr`, `email_hr`, `apartment`, `date_start`, `date_end`, `status_approve`, `year`) VALUES
         ('$date_d',$id_t,$id_c,'$id_s','รอดำเนินการ','$position_s','$name_getbook','$position_g','$name_hr','$phone_hr','$email_hr','$apartment','$date_start','$date_end','รอดำเนินการ','$year')";
        $result = $conn->query($sql);
  
        require("connection_close.php");
        return  ;
     }
    

     public static function getInf($id_s)
    {
        require("connection_connect.php");
        $sql="SELECT id_p,id_t,id_c,name_c,income,address_c,id_s,name_s,lastname_s,phone_s,email,date_d,status_ap_company,position_s,name_getbook,
        position_g,name_hr,phone_hr,email_hr,apartment,date_start,date_end,status_approve,reason,year,name_t
        FROM petition  natural join student NATURAL JOIN company NATURAL JOIN type INNER JOIN (SELECT MAX(date_d) AS maxdate , id_s  AS id FROM petition WHERE id_s = '$id_s') AS A ON petition.date_d = A.maxdate  AND petition.id_s = A.id;";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        $id_p=$my_row['id_p'];
        $id_t=$my_row['id_t'];
        $name_t=$my_row['name_t'];
        $id_c=$my_row['id_c'];
        $name_c=$my_row['name_c'];
        $income=$my_row['income'];
        $address_c=$my_row['address_c'];
        $id_s=$my_row['id_s'];
        $name_s=$my_row['name_s'];
        $lastname_s=$my_row['lastname_s'];
        $phone_s=$my_row['phone_s'];
        $email_s=$my_row['email'];
        $date_d=$my_row['date_d'];
        $status_ap_company=$my_row['status_ap_company'];
        $position_s=$my_row['position_s'];
        $name_getbook=$my_row['name_getbook'];
        $position_g=$my_row['position_g'];
        $name_hr=$my_row['name_hr'];
        $phone_hr=$my_row['phone_hr'];
        $email_hr=$my_row['email_hr'];
        $apartment=$my_row['apartment'];
        $date_start=$my_row['date_start'];
        $date_end=$my_row['date_end'];
        $status_approve=$my_row['status_approve']; 
        $reason=$my_row['reason'];
        $year=$my_row['year'];
        require("connection_close.php");
        return new Petition($lastname_s,$name_c,$income,$address_c,$email_s,$phone_s,$id_p,$name_s,$id_t,$id_c,$id_s,$status_ap_company,$position_s,$name_getbook,$position_g,$name_hr,$phone_hr,$email_hr,$apartment,$date_start,$date_end,$status_approve,$date_d,$reason,$year,$name_t);

    }
    public static function convertDate($datee){
        if(strstr($datee,"-") || strstr($datee,'/')){
            $datee = preg_split("/[\/]|[-]+/",$datee);
            $datee = $datee[2]."/".$datee[1]."/".$datee[0];
            return $datee;
        }
    }


}

?>