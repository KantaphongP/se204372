<table border=1>

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="lecturer">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>วันที่ส่ง</td><td>ชื่อ</td><td>นามสกุล</td><td>คำร้อง</td><td>การอนุมัติ</td></tr>
<?php foreach($petition_List as $petition)
{
        echo "<tr><td>$petition->date_d</td>
        <td>$petition->name_s</td>
        <td>$petition->lastname_s</td>
       <td>
        <a href=?controller=lecturer&action=detailpet&id_p=$petition->id_p>see</a>
        </td> <td>$petition->status_approve</td></tr>";
}
echo "</table>";
?>