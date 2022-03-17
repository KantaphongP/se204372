<table border=1>
<form method="get" action="">
        <input type="text" name="key">
        <input type="hidden" name="controller" value="company">
        <button type="submit" name="action" value="searchs">
search</button>
</form>
<tr><td>name_c</td><td>quantity</td><td>income</td></tr>
<?php foreach($company_List as $company)
{
        echo "<tr><td>$company->name_c</td>
        <td>$company->quantity</td>
        <td>$company->income</td>
       </tr>";
}
echo "</table>";
?>