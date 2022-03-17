
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family : "FC Iconic"  ,"FC Iconic", fantasy  ;
}
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 30%;
    left: 0px;
    background: #2F4F58;
}
.user {
  overflow: hidden;
  background-color: #385a64;
  height :80;
}
.user a {
  float: right;
  font-size: 40px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
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
<div class="footer">



</body>
</html>