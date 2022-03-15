
<form method="get" action="">
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
