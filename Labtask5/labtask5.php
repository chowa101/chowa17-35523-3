<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<fieldset style="width: 300px; ">
<legend><h3><b>Customer</b></h3></legend>
<pre><b>Name                : </b><input type="text" name="name"><br>
<b>Total Paid          : </b><input type="text" name="Total Paid"><br>
<b>Total Discount Have : </b><input type="text" name="Total Discount Have"><br></pre>
<hr style="border: 0.1px solid;">
<input type="checkbox" id="Display" name="Display" value="Display"> Display
<hr style="border: 0.1px solid;">
<input type="submit" value="SAVE">
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>Food List</b></h3></legend>
<table style="width:100%">
  <tr>
    <th> Food Name</th>
    <th>Paid</th> 
  </tr>
  <tr>
    <td>Burger</td>
    <td>300</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Pizza</td>
    <td>500</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Cake</td>
    <td>100</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
</table>
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>Edit Customer Identity</b></h3></legend>
<pre><br>Name</b>
<input type="text" name="name">
<br>contact Number</b>
<input type="text" name="Adress">
<br>Address</b>
<input type="text" name="Number">
<hr style="border: 0.1px solid;">
<input type="checkbox" id="Display" name="Display" value="Display"> Display
<hr style="border: 0.1px solid;">
<input type="submit" value="SAVE">
</pre>
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>Last order</b></h3></legend>
<b>Name: Pizza</br>Total Price: 450</br>Discount Price: 50</br>Deliverman Name: Alif</b>
<hr style="border: 0.1px solid;">
<input type="submit" value="Delete">
</fieldset>

<fieldset style="width: 300px; ">
<legend><h3><b>Most Ordered</b></h3></legend>
<input type="text" name="search by name"><input type="submit" value="Search By Name">
<table style="width:100%">
  <tr>
    <th>Food Name</th>
    <th>Paid</th> 
  </tr>
  <tr>
    <td>Pizza</td>
    <td>500</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Burger</td>
    <td>300</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
  <tr>
    <td>Cake</td>
    <td>100</td>
    <td><a href=""><u>edit</u></a></td>
    <td><a href=""><u>delete</u></a></td>
  </tr>
</table>
</fieldset>

</form>

</body>
</html>