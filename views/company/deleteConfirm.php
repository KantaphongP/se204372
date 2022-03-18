<?php echo "<br>Are you sure to delete this company<br>
            $company->name_c <br>";?>

<form method="get" action="">
    <input type="hidden" name="controller" value="company"/>
    <input type="hidden" name="id_c" value="<?php echo $company->id_c;?>"/>
    <input type="hidden" name="id_l" value="<?php echo $lecturer->id_l;?>"/>
    <button type="submit" name="action" value="index">back</button>
    <button type="submit" name="action" value="delete"> delete</button>
</form>
           