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
<label> <?php echo  "$student->name_s  $student->lastname_s";?> </label>
<br><br><a href="?controller=login&action=signin">logout</a>
</div>

<div class="navbar">
  <a href="#home">หน้าแรก</a>
  <a href="?controller=company&action=indexs">ค้นหาสถานประกอบการ</a>
  <div class="dropdown">
    <button class="dropbtn">การฝึกงาน 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

    <a href=?controller=login&action=petition&id_s=<?php echo $student->id_s;?>>ใบยื่นคำขอฝึกงาน </a>
    <a href=?controller=status_petition&action=statusPetition&id_s=<?php echo $student->id_s;?>>ตรวจสอบสถานะ</a>

    <a>ประวัติการฝึกงาน</a>
    <a>ตรวจสอบคำร้อง</a>
    <a>ตรวจสอบประวัติ </a>
    </div>
  </div> 
</div>
<div class ="greet">
<form method="get" action="">
<label>วันที่ <input type="date" name="date_d"/></label><br>
<label>ชื่อ <input type="text" name="name_s" 
    value="<?php echo $student->name_s;?>"/></label><br>
<label>รหัสนิสิต <input type="text" name="id_s"
    value="<?php echo $student->id_s;?>"/></label><br>
<label>เบอร์โทรศัพท์ <input type="text" name="phone_s"
    value="<?php echo $student->phone_s;?>"/></label><br>
<label>ตำแหน่งที่ไปฝึก <input type="text" name="position_s"/></label><br>
<label>ประเภทการฝึก <select name="id_t">
    <?php foreach($type_List as $dep) {echo "<option value = $dep->id_t>
    $dep->name_t</option>";}
    ?>
</select></label><br>

<label>ชื่อผู้ที่จะให้ภาควิชาออกหนังสือให้ <input type="text" name="name_getbook"/></label><br>
<label>ตำแหน่งผู้ที่จะให้ภาควิชาออกหนังสือให้ <input type="text" name="position_g"/></label><br>
<label>ชื่อบริษัท <select name="id_c">
    <?php foreach($company_List as $dep) {echo "<option value = $dep->id_c>
    $dep->name_c</option>";}
    ?>
</select></label><br>


<label>ชื่อผู้ประสานงาน <input type="text" name="name_hr"/></label><br>
<label>เบอร์โทรศัพท์ <input type="text" name="phone_hr"/></label><br>
<label>อีเมล <input type="text" name="email_hr"/></label><br>
<label>ที่พัก <input type="text" name="apartment"/></label><br>
<label>วันที่เริ่มฝึก <input type="date" name="date_start"/></label><br>
<label>วันสุดท้ายของการฝึก <input type="date" name="date_end"/></label><br>

<input type="hidden"name="controller"value="login"/>
<button type= "submit"name="action"value="index">back</button>
<button type= "submit"name="action"value="addpetition">save</button>

</form>




</div>





</body>
</html>




