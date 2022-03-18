<!DOCTYPE html>
<html>

        <style>
                
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
  font-family : "FC Iconic"  ,"FC Iconic", sans-serif ;
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
</style>
<head>
        <link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    </head>
<body>
<div class="user">
<label> <?php echo  "$student->name_s  $student->lastname_s";?> </label>
<br><br><a href="?controller=login&action=signin">logout</a>
</div>

<div class="navbar">
<a href=?controller=login&action=home&id_s=<?php echo $student->id_s;?>>หน้าแรก</a>
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
<table class="center">
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="company">
        <button type="submit" name="action" value="searchs">
search</button>
</form>
<tr><th>ชื่อสถานประกอบการ</th><th>จำนวนที่เปิดรับ</th><th>ค่าตอบแทน</th></tr>
<?php foreach($company_List as $company)
{
        echo "<tr><td>$company->name_c</td>
        <td>$company->quantity</td>
        <td>$company->income</td>
       </tr>";
}
echo "</table>";
?>


</body>
</html>
