
<style>
<<<<<<< HEAD
=======
  
>>>>>>> 465b65b77123f2a1d0dfc35a2195568e10571603

{
    box-sizing:border-box;
}
.img {
    position : fixed;
    left:55%;
    top : 13.5%;
    z-index:1;    
}
.h1 {
    text-align:center;
    color: #000;

}
/*.p {
    position: absolute;
    height: 166px;
    font-style: bold;
    font-weight: 700;
    font-size: auto;
    line-height: 83px;
    text-align: center;
    color: #000000;
}*/
.body .title {
    text-align:center;
    font-size:50px;
    font-family: 'Noto Sans Thai', sans-serif;
    color:#000;
}
.footer {
    position: fixed;
    bottom: 0;
    width: 100%;
    height: 10%;
    left: 0px;
    background: #2F4F58;
}
body {
    overflow:hidden;
    margin:0;
    height: 100%;
    width : 100%;
    background:#FFF;
    font-family: 'Noto Sans Thai', sans-serif;
    font-style:bold;
    font-size: auto;
}
.form{
    font-family: 'Noto Sans Thai', sans-serif;
    font-size:14px;
    font-style:bold;
    border:1px solid #000;
    position:absolute;
    background-color: #2F4F58;
    border-radius: 10px;
    left: 30%;
    bottom: 40%;
    transform:translate(-50%,50%);
    width: 28%;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
}
.form .tab-header {
    height:50px;
    line-height:50px;
}
.form .tab-header > div {
    width: 50%;
    float:left;
    text-align:center;
    background:#FFF;
    color:#555;
    cursor:pointer;
}
.form .tab-header > div.active {
    border-radius:10px;
    background:#2F4F58;
    color:#FFF;

}
.form .tab-content {

    color:#FFF;
    padding: 20px;
}
.form .tab-content .form-element {

    color:#FFF;
    margin:10px 0px;
}
.form .tab-content .form-element input{
    width:100%;
    padding: 10px;
    font-size:16px;
    outline:none;
    margin-top: 3px;
    background: #C4C4C4;
border: 1px solid #FFF;
box-sizing: border-box;
border-radius: 15px;
}
.form .tab-content .form-element label{
    left:30%;
   color:#FFF;

}
.form .tab-content .form-element button{
    font-family: 'DB Ozone X';
    font-size:16px;
    font-style:bold;
   margin-top:5px;
   width:30%;
   padding: 10px;
   border: none;
   outline:none;
   background:#FF735C;
   border : 1px solid #000;
   color:#000;
   cursor: pointer;
   border-radius:50px;
   
}
.form .tab-content > div.active {
    display:block;
}
.form .tab-content > div {
    display:none;
}



</style>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    </head>

<body>
<div>
    <h1>ระบบจัดการการฝึกงานแบบออนไลน์สำหรับภาควิชาวิศวกรรมคอมพิวเตอร์</h1> 
</div>
    
    
    <div class="form">
        <div class="tab-header">
            <div class="active">สำหรับนิสิต</div>
                <div>สำหรับอาจารย์</div>
        </div>
        <div class="tab-content">
            <div class="tab-body active">
                <form method="get" action="">
                    <div class="form-element">
                        <label> บัญชีผู้ใช้เครือข่ายนนทรี <input type="text" name="id_s"/> </label></div>
                    <div class="form-element">
                        <label> รหัสผ่าน <input type="text" name="passwords"/> </label></div>
                    <div class="form-element">
                        <input type="hidden" name="controller" value = "login"/></div>
                    <div class="form-element">
                        <button type="submit"name="action" value= "check">เข้าสู่ระบบ </button></div>
            
                </form>
            </div>
            <div class="tab-body">
                <form method="get" action="">
                    <div class="form-element">
                        <label> บัญชีผู้ใช้เครือข่ายนนทรี <input type="text" name="id_l"/> </label></div>
                    <div class="form-element">
                    <label> รหัสผ่าน <input type="text" name="passwords"/> </label></div>
                    <div class="form-element">
                    <input type="hidden" name="controller" value = "lecturer"/></div>
                    <div class="form-element">
                    <button type="submit"name="action" value= "check">เข้าสู่ระบบ </button></div>

                </form>
            </div>
        </div>
    </div>
    <div class="img">  
    <img src="Collab-pana.png" alt="Intern" style="width: 100%; float: right;">
    </div>
    
    <div class="footer">
</body>
</html>
<script>
        let tabPanes = document.getElementsByClassName("tab-header")
    [0].getElementsByTagName("div");

    for(let i=0;i<tabPanes.length;i++){
        tabPanes[i].addEventListener("click",function(){
            document.getElementsByClassName("tab-header")
            [0].getElementsByClassName("active")
            [0].classList.remove("active");
            tabPanes[i].classList.add("active");

            document.getElementsByClassName("tab-content")
            [0].getElementsByClassName("active")
            [0].classList.remove("active");

            document.getElementsByClassName("tab-content")
            [0].getElementsByClassName("tab-body")
            [i].classList.add("active");

        });
    }
    
</script>

<!--<form method="get" action="">

<label> username <input type="text" name="id_s"/> </label><br>
<label> password <input type="text" name="passwords"/> </label><br>

<input type="hidden" name="controller" value = "login"/>

<button type="submit"name="action" value= "check">sign in </button>

</form>-->
