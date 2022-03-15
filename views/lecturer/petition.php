<table border=1>

<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="lecturer">
        <button type="submit" name="action" value="search">
search</button>
</form>
<tr><td>name_c</td><td>quantity</td><td>income</td><td>update</td><td>delete</td></tr>
<?php foreach($company_List as $company)
{
        echo "<tr><td>$company->name_c</td>
        <td>$company->quantity</td>
        <td>$company->income</td>
       <td>
        <a href=?controller=company&action=updateForm&id_c=$company->id_c>update</a>
        </td><td>
        <a href=?controller=company&action=deleteConfirm&id_c=$company->id_c>delete</a>
        </td></tr>";
}
echo "</table>";
?>