<!DOCTYPE html>
<html>
<head>
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
  width: 100% ; 
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

.center {
  margin-left: auto;
  margin-right: auto;
}

td, th {
  text-align: center;
  padding: 1em;
  background: #ddd;
  border: 1px solid #FFF;
  
}
    tr:hover td {
    	background-color: #FF735C;
        color:#FFF;
        
    }
    .css-mine {
  margin-top: 1em;
  clear: both;
}
th {
        background-color:#2F4F58;
        color:#FFF;
        font-size:16px;
        
}

body {
  margin: 1.5em;
  position : center;
  font-family: 'Noto Sans Thai', sans-serif;
  margin: 0; 
  height: 100%; 
  overflow: hidden
}

table{
  width: 50%;
  border-collapse: collapse;
  border-radius: 1em;
  overflow: hidden;	
  border: 1px solid #000;
  font-family: 'Noto Sans Thai', sans-serif;
  font-size:14px;
    
}    

.toncon{
    position: absolute;
  top:25%;
  left: 50%;
  transform: translate(-50%,-50%);
  z-index: 1;
  font-size: 400%;  
}

.border{
  border-radius: 50px;
  border: 2px solid #000000;
  background: #FF735C;
  position: absolute;
  top: 60%;
  left: 50%;
  transform: translate(-50%,-50%);
  width: 45%;
  height: 58%;  
  font-size: 165%;
  z-index: 1;
}

.add {
    position : absolute ; 
  top: 5%;
  left : 10%;
  width: 100%;
  color:#FFF;
}
.add input{
    
    width:80%;
    padding: 10px;
    font-size:16px;
    outline:none;
    margin-top: px;
    background: #C4C4C4;
    border: 1px solid #FFF;
    box-sizing: border-box;
    border-radius: 15px;
  }
  .add button{
    width:80%;
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
    <button class="dropbtn">การฝึกงาน/เพิ่มสถานประกอบการ 
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

<div class="toncon">
<label>เพิ่มสถานประกอบการ </label>
</div>

<div class="border">
    <div class="add">
        <form method="get" action="">

            <label> ชื่อ <br><input type="text" name="name_c"/> </label><br>
            <label> ที่อยู่ <br><input type="text" name="address_c"/> </label><br>
            <label> เบอร์โทร <br><input type="text" name="phone_c"/> </label><br>
            <label> จำนวนรับ <br><input type="number" name="quantity"/> </label><br>
            <label> ค่าตอบแทน <br><input type="number" name="income"/> </label><br>


            <input type="hidden" name="controller" value = "company"/>
            <input type="hidden" name="id_l" value="<?php echo $lecturer->id_l;?>"/><br><br>
            <button type="submit"name="action" value = "index"> back </button><br><br>
            <button type="submit"name="action" value= "addCompany"> save </button><br>

        </form>
    </div>
</div>

</body>
</html>