<!DOCTYPE html>
<html>
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

form {
  width: 50%;
  align-items: center;
  justify-content: center;
}
.search {
  width: 50%;
  margin-left: auto;
  margin-right: auto;

}
.search_input {
  font-family: 'Noto Sans Thai', sans-serif;
  width:50%;
  height:40px;
  font-size: 18px;
  color:#2F4F58;
  border: 2px solid #2F4F58;
  padding: 15px 30px;
  border-radius: 50px;
  margin-right: -50px;
  margin-top: 10px;
  transition: all 0.2s;
}
/*.search_input:focus {
  outline: none;
  width: 60%;
  background-color: #f0eeee;
}
.search_input:-webkit-input-placehoder {
  font-family: 'Noto Sans Thai', sans-serif;
  font-size : 18px;
  color: #2F4F58;
}*/
.search_button {
  border: none;
  background-color: transparent;
  cursor: pointer;
}
.search_button:focus {
  outline:none;
}
/*.search_button:active {
  transform: translateY(2px);
}*/
.search_icon {
  font-size: 18px;
  color:#FF735C;
}

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
  z-index:2;
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

</style>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
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
    <button class="dropbtn">การฝึกงาน 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">

    <a href=?controller=lecturer&action=petition&id_l=<?php echo $lecturer->id_l;?>> คำร้องขอฝึกงานทั้งหมด</a>
    <a href=?controller=company&action=newCompany&id_l=<?php echo $lecturer->id_l;?>> เพิ่มสถานประกอบการ</a>
    </div>
  </div> 
</div>


<form method="get" action="" class="search">
        <input type="text" name="key" placeholder="Search" class="search_input">
        <!--<input type="text" name="key">-->
        <input type="hidden" name="controller" value="company">
        <input type="hidden" name="id_l" value="<?php echo $lecturer->id_l; ?>"/>
        <button type="submit" name="action" value="search" class="search_button">
        <i class="fas fa-search search_icon"></i>
        </button>
</form>
<table class="center">
<tr><th>ชื่อสถานประกอบการ</th><th>จำนวนที่เปิดรับ</th><th>จำนวนค่าตอบแทน</th><th>แก้ไข</th><th>ลบ</th></tr>
<?php foreach($company_List as $company)
{
        echo "<tr><td>$company->name_c</td>
        <td>$company->quantity</td>
        <td>$company->income</td>
       <td>
        <a href=?controller=company&action=updateForm&id_c=$company->id_c&id_l=$lecturer->id_l>แก้ไข</a>
        </td><td>
        <a href=?controller=company&action=deleteConfirm&id_c=$company->id_c&id_l=$lecturer->id_l>ลบ</a>
        </td></tr>";
}
echo "</table>";
?>


</body>
</html>


