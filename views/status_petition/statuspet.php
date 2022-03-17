<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family : "FC Iconic"  ,"FC Iconic", sans-serif ;
  margin: 0; 
  height: 100%; 
  overflow: hidden
}

.user {
  overflow: hidden;
  background-color: #385a64;
  height :90;
  z-index:0;
}
.user a {
  position: absolute;
  
  font-size: 40px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  z-index:1;
}
.user label {
  position: fixed;
  right : 0%;
  font-size: 40px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}


.navbar {
  overflow: hidden;
  background-color: #385a64;
  left: 0% ;
}

.navbar a {
  float: left;
  font-size: 25px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 25px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background: #59767e;;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #385a64;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.greet label{
  position : absolute ; 
  top : 33%; 
  left : 12% ;
  font-size: 600%; 
}

.greet a{
  position : absolute ; 
  top : 45%; 
  left : 16.2% ;
  font-size: 250%;
}
.greet a1{
  position : absolute ; 
  top : 50%; 
  left : 15.7% ;
  font-size: 250%;
}
.img{
  position : absolute ; 
  z-index: 1;
  top : 2%;
  left : 55% ;
}

.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 30%;
    left: 0px;
    background: #2F4F58;
    z-index: 0;
}

.footer label{
  position : absolute ; 
  top : 8%; 
  left : 2.5% ;
  font-size: 250%;
  color : white ;
}

</style>
</head>
<body>

<div class="user">
<label> <?php echo  "$student_sp->name_s  $student_sp->lastname_s";?> </label>
<br><br><a href="?controller=login&action=signin">logout</a>
</div>

<div class="navbar">
  <a href="#home">หน้าแรก</a>
  <a href="?controller=company&action=indexs">ค้นหาสถานประกอบการ</a>
  <div class="dropdown">
    <button class="dropbtn">การฝึกงาน/ตรวจสอบสถานะ 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

    <a href=?controller=login&action=petition&id_s=<?php echo $student_sp->id_s;?>>ใบยื่นคำขอฝึกงาน </a>
    <a href=?controller=status_petition&action=statusPetition&id_s=<?php echo $student_sp->id_s;?>>ตรวจสอบสถานะ</a>

    <a>ประวัติการฝึกงาน</a>
    <a>ตรวจสอบคำร้อง</a>
    <a>ตรวจสอบประวัติ </a>
    </div>
  </div> 
</div>
<div class ="greet">
  
<!--</div>
<div class="img">
<img src="Welcome-pana.png" alt="Welcome" width="900px" height="900px">
</div>
<div class="footer">
  <label>ข่าวสารการฝึกงาน</label>
</div>-->

<?php 
    echo "<h2>สถานะการยื่นคำร้องขอฝึกงาน : $inf_pet->status_approve </h2>
    <h3>ข้อมูลนักศึกษา</h3>
    ชื่อ : $student_sp->name_s $student_sp->lastname_s รหัสนิสิต : $student_sp->id_s <br>
    เบอร์โทรศัพท์ : $student_sp->phone_s<br>
    อีเมล : $student_sp->email<br><br>
    <h3>ข้อมูลการฝึกงาน</h3>
    ตำแหน่งที่ไปฝึก : $inf_pet->position_s<br>
    ชื่อผู้ที่จะให้ภาควิชาฯออกหนังสือ : $inf_pet->name_getbook<br>
    ตำแหน่งของผู้ที่จะให้ภาควิชาฯออกหนังสือ : $inf_pet->position_g<br>
    ระยะการฝึกงาน : $inf_pet->date_start ถึง $inf_pet->date_end <br>
    <h3>ข้อมูลสถานประกอบการ</h3>
    ชื่อสถานประกอบการ : $inf_pet->name_c<br>
    สถานที่ตั้ง : $inf_pet->address_c<br>
    จำนวนค่าตอบแทน : $inf_pet->income บาท/วัน<br>
    ชื่อผู้ประสานงาน : $inf_pet->name_hr<br>
    เบอร์โทรศัพท์ : $inf_pet->phone_hr<br>
    ที่พัก : $inf_pet->apartment<br>";
    

?>

</body>
</html>
