<?php 
    echo "<h2>สถานะการยื่นคำร้องขอฝึกงาน : $inf_pet->status_approve </h2>
    <h3>ข้อมูลนักศึกษา</h3>
    ชื่อ : $student_sp->name_s $student_sp->lastname_s รหัสนิสิต : $student_sp->id_s <br>
    เบอร์โทรศัพท์ : $student_sp->phone_s<br>
    อีเมล : $student_sp->email<br><br>
    <h3>ข้อมูลการฝึกงาน</h3>
    ตำแหน่งที่ไปฝึก : $inf_pet->position_s<br>
    ชื่อผู้ที่จะให้ภาควิชาฯออกหนังสือ : $inf_pet->name_getbook<br>
    ตำแหน่งของผู้ที่จะให้ภาควิชาฯออกหนังสือ : $inf_pet->position_g<br>
    ระยะการฝึกงาน : $inf_pet->date_start ถึง $inf_pet->date_end <br>
    <h3>ข้อมูลสถานประกอบการ</h3>
    ชื่อสถานประกอบการ : $inf_pet->name_c<br>
    สถานที่ตั้ง : $inf_pet->address_c<br>
    จำนวนค่าตอบแทน : $inf_pet->income บาท/วัน<br>
    ชื่อผู้ประสานงาน : $inf_pet->name_hr<br>
    เบอร์โทรศัพท์ : $inf_pet->phone_hr<br>
    ที่พัก : $inf_pet->apartment<br>";


?>
