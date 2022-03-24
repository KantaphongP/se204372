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
  z-index: 2;
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
  z-index: 2;
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

.toncon{
  position : absolute ; 
  top:18%;
  left : 5% ;
  font-size: 400%;  
  
  

}

.border{
  border-radius: 50px;
  border: 2px solid #000000;
  background: #FF735C;
  position: absolute;
  width: 90%;
  height: 67%;  
  position: absolute;
  top: 60%;
  left: 50%;
transform: translate(-50%,-50%);
  font-size: 120%;
  z-index: 1;
}
.col1 {
  position : absolute ; 
  top: 5%;
  left : 2%;
  width: 33.33%;
  color:#FFF;
}
.col1 input{
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
.col1 select{
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

.col2 {
  position : absolute ; 
  top: 0%;
  left : 98%;
  width: 100%;
  color:#FFF;
}
.col2 input{
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
.col3 {
  position : absolute ; 
  top: 0%;
  left : 98%;
  width: 100%;
  color:#FFF;
}
.col3 input{
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
.col3 button{
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

.col3 .back-btn {
  position: absolute;
      top:100%;
      left:44%;
      z-index: 3;
      width:40%;
}

.col3 .back-btn button:hover {
        color: #385a64;
        background: #FFF;
        border: 2px solid #385a64;
    }

.col3 .save-btn {
  position: absolute;
      top:100%;
      left:0%;
      z-index: 2;
      width:40%;
}

.col3 .save-btn button:hover {
        color: #385a64;
        background: #FFF;
        border: 2px solid #385a64;
    }


</style>
</head>
<body>

<div class="user">
<label> <?php echo  "$student->name_s  $student->lastname_s";?> </label>
<br><br><a href="?controller=login&action=signin">logout</a>
</div>

<div class="navbar">
<a href=?controller=login&action=home&id_s=<?php echo $student->id_s;?>>หน้าแรก</a>
<a href=?controller=company&action=indexs&id_s=<?php echo $student->id_s;?>>ค้นหาสถานประกอบการ</a>
  <div class="dropdown">
    <button class="dropbtn">การฝึกงาน/ใบยื่นคำขอฝึกงาน
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
    <a href=?controller=login&action=petition&id_s=<?php echo $student->id_s;?>>ใบยื่นคำขอฝึกงาน </a>
    <a href=?controller=status_petition&action=statusPetition&id_s=<?php echo $student->id_s;?>>ตรวจสอบสถานะ</a>
    </div>
  </div> 
</div>

<div class="toncon">
<label> <?php echo  "คำร้องขอฝึกงาน";?> </label>
</div>
  
<div class="border">
  <form class="get" action="">
  <div class="col1">
    
      <label>วันที่ <br><input type="date" name="date_d" required/></label><br><br>
      <label>ชื่อ <br><input type="text" name="name_s" value="<?php echo "$student->name_s $student->lastname_s";?>"/></label><br><br>
      <label>รหัสนิสิต<br> <input type="text" name="id_s"value="<?php echo $student->id_s;?>"/></label><br><br>
      <label>เบอร์โทรศัพท์ <br><input type="text" name="phone_s"value="<?php echo $student->phone_s;?>"/></label><br><br>
      <label>ตำแหน่งที่ไปฝึก <br><input type="text" name="position_s"  placeholder="กรอกตำแหน่ง" required/></label><br><br>
      <label>ประเภทการฝึก <br><select name="id_t">
      <?php foreach($type_List as $dep) {echo "<option value = $dep->id_t>
      $dep->name_t</option>";}
      ?></select></label><br><br>
  <div>

  <div class="col2">
    <label>ชื่อผู้ที่จะให้ภาควิชาออกหนังสือให้ <br><input type="text" name="name_getbook" placeholder="กรอกชื่อ" required/></label><br><br>
    <label>ตำแหน่งผู้ที่จะให้ภาควิชาออกหนังสือให้ <br><input type="text" name="position_g" placeholder="กรอกตำแหน่ง" required/></label><br><br>
    <label>ชื่อบริษัท<br> <select name="id_c">
    <?php foreach($company_List as $dep) {echo "<option value = $dep->id_c>
    $dep->name_c</option>";}
    ?></select></label><br><br>
    <label>ชื่อผู้ประสานงาน <br><input type="text" name="name_hr" placeholder="กรอกชื่อ" required/></label><br><br>
    <label>เบอร์โทรศัพท์ <br><input type="text" name="phone_hr" placeholder="กรอกเบอร์โทรศัพท์" required/></label><br><br>
    <label>อีเมล <br><input type="text" name="email_hr" placeholder="กรอกอีเมล" required/></label><br><br>
  <div>

  <div class="col3">
    <label>ที่พัก <br><input type="text" name="apartment"/></label><br><br>
    <label>วันที่เริ่มฝึก <br><input type="date" name="date_start" required/></label><br><br>
    <label>วันสุดท้ายของการฝึก <br><input type="date" name="date_end" required/></label><br><br>
    <label>ปีการศึกษา <br><input type="text" name="year" placeholder="กรอกปีการศึกษา" required/></label><br><br>
    <input type="hidden" name="controller" value="login"/>
    <div class ="b">
        <!-- <div class="back-btn ">
          <button type="submit" name="action" value ="index">back</button><br><br>
        </div> -->
        <div class="save-btn">
        <button type="submit" name="action" value ="addpetition">save</button><br><br>
    </div>
  <div>
  </form>
<div>

