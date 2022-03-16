<style>
{
    box-sizing:border-box;
    }
    .img picture{
        position: absolute;
        left:70%;
    }
    .babe label {
        position: absolute;
height: 166px;


font-family: 'PT Sans';
font-style: normal;
font-weight: 700;
font-size: 50px;
line-height: 83px;
text-align: center;

color: #000000;
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
    background:#FFF;
    font-family:"DB HelvethaicaMon X Bd v3.2";
}
.form{
    border:1px solid #000;
    position:absolute;
    background-color: #2F4F58;
    border-radius: 10px;
    left: 30%;
    bottom: 40%;
    transform:translate(-50%,50%);
    width: 300px;
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
    border: 1px solid #aaa;
    font-size:16px;
    background:#f5f5f5;
    border-radius:5px;
    outline:none;
    margin-top: 3px;
}
.form .tab-content .form-element label{
   color:#FFF;

}
.form .tab-content .form-element button{
   margin-top:5px;
   width:100%;
   padding: 10px;
   border: none;
   outline:none;
   background:#FF735C;
   border : 1px solid #000;
   color:#FFFF;
   cursor: pointer;
   border-radius:5px;
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
    <div class="babe">
        <label>ระบบจัดการการฝึกงานแบบออนไลน์สำหรับภาควิชาวิศวกรรมคอมพิวเตอร์</label>
</div>
<div class="img">
<picture>
  <img src="Collab-pana.png" alt="Flowers" style="width: 1077px; height: 694px; ">
</picture>
</div>
<div class="form">
    <div class="tab-header">
        <div class="active">Student</div>
        <div>Teacher</div>
    </div>
    <div class="tab-content">
        <div class="tab-body active">
            <form method="get" action="">
                <div class="form-element">
                <label> username <input type="text" name="id_s"/> </label></div>
                <div class="form-element">
                <label> password <input type="text" name="passwords"/> </label></div>
                <div class="form-element">
                <input type="hidden" name="controller" value = "login"/></div>
                <div class="form-element">
                <button type="submit"name="action" value= "check">sign in </button></div>
            
            </form>
        </div>
        <div class="tab-body">
        <form method="get" action="">
        <div class="form-element">
                <label> username <input type="text" name="id_l"/> </label></div>
                <div class="form-element">
                <label> password <input type="text" name="passwords"/> </label></div>
                <div class="form-element">
                <input type="hidden" name="controller" value = "lecturer"/></div>
                <div class="form-element">
                <button type="submit"name="action" value= "check">sign in </button></div>

        </form>
        </div>
        
    </div>
</div>
<div class="footer">
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
