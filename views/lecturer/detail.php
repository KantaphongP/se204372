<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: 'Noto Sans Thai', sans-serif;
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
  right : 0%;
  font-size: 40px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  z-index:2;
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


#rcorners2 {
  border-radius: 25px;
  border: 2px solid #385A64;
  background: #FFD058;
  padding: 20px; 
  width: 180px;
  height: 15px;  
  left: 650px;
  top: 23px;
  position: absolute;
  text-align: center;
}
#rcorners2 a{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 100%;
       
}

#rcorners3 {
  border-radius: 10px;
  border: 2px solid #000000;
  background: #E5E5E5;
  width: 530px;
  height: 170px;  
  position: absolute;
  left: 80px;
  top: 33%;
  text-align: left;
  
}

#rcorners3 a{
    position: absolute;
    top:50%;
    left: 55%;
    line-height: 35px;
    transform: translate(-50%,-50%);
    width: 100%;
}

#rcorners4 {
  border-radius: 10px;
  border: 2px solid #000000;
  background: #E5E5E5;
  width: 650px;
  height: 250px;  
  position: absolute;
  left: 55%;
  top: 33%;
  text-align: left;
  
}

#rcorners4 a{
    position: absolute;
    top:50%;
    left: 55%;
    line-height: 35px;
    transform: translate(-50%,-50%);
    width: 100%;
    
}

#rcorners5 {
  border-radius: 10px;
  border: 2px solid #000000;
  background: #E5E5E5;
  width: 530px;
  height: 320px;  
  position: absolute;
  left: 80px;
  top: 60%;
  text-align: left;
  
  
}

#rcorners5 a{
    position: absolute;
    top:50%;
    left: 55%;
    line-height: 35px;
    transform: translate(-50%,-50%);
    width: 100%;
}

.titlestatus{
    position: absolute;
    left: 4.5%;
    top: 17%;
    font-size: 200%;
}

.titlestu{
    position: absolute;
    left: 4.5%;
    top: 26%;
    font-size: 200%;
}

.titleintern{
    position: absolute;
    left: 4.5%;
    top: 53%;
    font-size: 200%;
}

.titlecom{
    position: absolute;
    left: 55%;
    top: 26%;
    font-size: 200%;
}

.reason p{
    position: absolute;
    left: 55%;
    top: 20%;
    font-size: 200%;
}

.vv {
  position : absolute ; 
  top: 70%;
  left : 50%;
  width: 45%;
  color:#FFF;
}
.vv input{
  width:75%;
  padding: 10px;
  font-size:16px;
  outline:none;
  margin-top: px;
  background: #C4C4C4;
  border: 1px solid #FFF;
  box-sizing: border-box;
  border-radius: 15px;
}
.vv button{
  width:75%;
  padding: 10px;
  font-size:16px;
  outline:none;
  margin-top: px;
  background: #385a64;
  border: 1px solid #FFF;
  box-sizing: border-box;
  border-radius: 15px;
  color:#FFF;
  z-index: 2;
  cursor: pointer;
}


</style>
</head>
<body>

<div class="user">
<label> <?php echo  "$lecturer->name_l  $lecturer->lastname_l";?> </label>
<br><br><a href="?controller=login&action=signin">logout</a>
</div>

<div class="navbar">
<a href=?controller=lecturer&action=home&id_l=<?php echo $lecturer->id_l;?>>หน้าแรก</a>
  <a href=?controller=company&action=index&id_l=<?php echo $lecturer->id_l;?>>ค้นหาสถานประกอบการ</a>
  <div class="dropdown">
    <button class="dropbtn">การฝึกงาน/คำร้องขอฝึกงานทั้งหมด 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href=?controller=lecturer&action=petition&id_l=<?php echo $lecturer->id_l;?>> คำร้องขอฝึกงานทั้งหมด</a>
    <a href=?controller=company&action=newCompany&id_l=<?php echo $lecturer->id_l;?>> เพิ่มสถานประกอบการ</a>
    <a>ตรวจสอบคำร้อง</a>
    <a>ตรวจสอบประวัติ </a>
    </div>
  </div> 
</div>
<!--<div class ="greet">
  
</div>
<div class="img">
<img src="Welcome-pana.png" alt="Welcome" width="900px" height="900px">
</div>
<div class="footer">
  <label>ข่าวสารการฝึกงาน</label>
</div>-->
    
    <div class ="titlestatus">
        <h1 style="text-align:left;">สถานะการยื่นคำร้องขอฝึกงาน : </h1>
        <h1 id="rcorners2" style="font-size: 40px; " ><a><?php echo $petition->status_approve ?></a></h1>
    </div>

    <div class ="reason">
        <p>หมายเหตุ : <?php echo $petition->reason ?></p>
    </div>

    <div class ="titlestu">
        <h3>ข้อมูลนักศึกษา</h3>
    </div>

    <div class= "boxstudent">
        <p id="rcorners3" style="font-size: 28px;" ><a><?php echo "<b>ชื่อ : </b> $petition->name_s $petition->lastname_s <br>
            <b>รหัสนิสิต :</b> $petition->id_s <br>
            <b>เบอร์โทรศัพท์ :</b> $petition->phone_s<br>
            <b>อีเมล :</b> $petition->email_s" ?></a></p>
    </div>

    <div class ="titleintern">
        <h3>ข้อมูลการฝึกงาน</h3>
    </div>

    <div class="boxintern">
        <p id="rcorners5" style="font-size: 28px;"><a><?php echo "<b>ชื่อสถานประกอบการ :</b> $petition->name_c<br>
            <b>ตำแหน่งที่ไปฝึก :</b> $petition->position_s<br>
            <b>ชื่อผู้ที่จะให้ภาควิชาฯออกหนังสือ :</b> <br>$petition->name_getbook<br>
            <b>ตำแหน่งของผู้ที่จะให้ภาควิชาฯออกหนังสือ :</b> <br>$petition->position_g<br>
            <b>ระยะการฝึกงาน :</b> <br>$date_s <b>ถึง</b> $date_e" ?></a></p>
    </div>

    <div class ="titlecom">
        <h3>ข้อมูลสถานประกอบการ</h3>
    </div>

    <div class="boxcom">
        <p id="rcorners4" style="font-size: 28px;"><a><?php echo "<b>ชื่อสถานประกอบการ :</b> $petition->name_c<br>
            <b>สถานที่ตั้ง :</b> $petition->address_c<br>
            <b>จำนวนค่าตอบแทน :</b> $petition->income บาท/วัน<br>
            <b>ชื่อผู้ประสานงาน :</b> $petition->name_hr <br>
            <b>เบอร์โทรศัพท์ :</b> $petition->phone_hr<br>
            <b>ที่พัก :</b> $petition->apartment" ?></a></p>
    </div>
    <div class="border">
 <form method="get" action="">
    <div class="vv">
   
          
          <label>เหตุผล <br><input type="text" name="reason"/></label><br>
  
          <input type="hidden"name="controller"value="lecturer"/>
          <input type="hidden" name="id_p" value="<?php echo $petition->id_p; ?>"/>
          <input type="hidden" name="id_l" value="<?php echo $lecturer->id_l; ?>"/>
          
           <button type="submit"name="action"value="approve">/</button>
           <button type="submit"name="action"value="no">X</button>
          <button type="submit"name="action"value="petition">back</button>
</div>
 </form>
</div >


</body>
</html>
