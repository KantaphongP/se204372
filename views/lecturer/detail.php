<?php 
    echo "สถานะการยื่นคำร้องขอฝึกงาน  $petition->status_approve <br> ";
   echo "ข้อมูลนักศึกษา <br> ชื่อ : $petition->name_s $petition->lastname_s รหัสนิสิต : $petition->id_s <br>
        เบอร์โทรศัพท์  : $petition->phone_s  อีเมล : $petition->email_s <br> ";

    echo "<br>ข้อมูลการฝึกงาน <br>
         ตำแหน่งที่ไปฝึก : $petition->position_s <br>
         ชื่อผู้ที่จะให้ภาควิชาออกหนังสือให้ :  $petition->name_getbook <br>
         ตำแหน่งผู้ที่จะให่ภาควิชาออกหนังสือให้ : $petition->position_g <br>
         ระยะเวลา : $petition->date_start ถึง $petition->date_end
         <br><br> ";
    echo "ข้อมูลสถานประกอบการ <br>
         ชื่อสถานประกอบการ : $petition->name_c <br>
         ที่อยู่ : $petition->address_c <br>
         จำนวนค่าตอบแทน : $petition->income <br>
         ชื่อผู้ประสานงาน : $petition->name_hr <br>
         เบอร์โทรศัพท์ : $petition->phone_hr <br>
         ที่พัก : $petition->apartment <br>
         <br>"
        
?>
<form method="get" action="">

        <input type="hidden"name="controller"value="lecturer"/>
        <input type="hidden" name="id_p" value="<?php echo $petition->id_p; ?>"/>
         <button type="submit"name="action"value="petition">back</button>
         <button type="submit"name="action"value="approve">/</button>
         <button type="submit"name="action"value="no">X</button>
</form>