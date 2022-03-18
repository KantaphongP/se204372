<form method="get" action="">

<label>ชื่อ <input type="text" name="name_c"
    value="<?php echo $company->name_c;?>"/> </label><br>
<label> ที่อยู่ <input type="text" name="address_c"
    value="<?php echo $company->address_c;?>"/> </label><br>
<label> เบอร์โทร <input type="text" name="phone_c"
    value="<?php echo $company->phone_c;?>"/> </label><br>
<label> จำนวนรับ <input type="number" name="quantity"
    value="<?php echo $company->quantity;?>"/> </label><br>
<label> ค่าตอบแทน <input type="number" name="income"
    value="<?php echo $company->income;?>"/> </label><br>


<input type="hidden"name="controller"value="company"/>
<input type="hidden" name="id_c" value="<?php echo $company->id_c; ?>"/>
<input type="hidden" name="id_l" value="<?php echo $lecturer->id_l; ?>"/>
<button type="submit"name="action"value="index">back</button>
<button type="submit"name="action"value="update">update</button>
</form>