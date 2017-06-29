<?php
$id=$_GET["Id"];
 ?>


<html>
<head>
<title>Edit Menu</title>
</head>
<body>
<center>
<h3> Edit Menu Details</h3></center>

<?php
//include("Connection.php");
require 'connection.php';
$conn=Connect();
// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT Ingredients_Name FROM Menu_details WHERE Id='".$id."'" ;
//echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc())
    {
    $name=$row['Ingredients_Name'];
}}
else {
    echo "0 RECORDS";
}
$conn->close();
?>

<form action="editmenu.php?ID=<?=$id?>" method="post">
  <center><?=$name?><br>
    <div class="form-group form-group-sm">
    <label class="col-sm-3 control-label" for="formGroupInputSmall">
        Pizza</label>
      <div class="col-sm-5">
  <input type="text" name="Pizza" required><br>
</div>
</div>
<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">
    Burger</label>
  <div class="col-sm-5">
  <input type="text" name="Burger" required><br>
</div>
</div>
<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">
    Roti</label>
  <div class="col-sm-5">
  <input type="text" name="Roti" required><br>
</div>
</div>
<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">
    Noodles</label>
  <div class="col-sm-5">
  <input type="text" name="Noodles" required><br>
</div>
</div>
<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">
    Dessert</label>
  <div class="col-sm-5">
  <input type="text" name="Dessert" required><br>
</div>
</div>
<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">Fish_Curry
</label>
  <div class="col-sm-5">
  <input type="text" name="Fish_Curry" required><br>
</div>
</div>

<div class="form-group form-group-sm">
<label class="col-sm-3 control-label" for="formGroupInputSmall">Paneer_Tikka
</label>
  <div class="col-sm-5">
  <input type="text" name="Paneer_Tikka" required><br>
</div>
</div>



<button type="button" class="btn btn-primary btn-xs">Extra small button</button>
</center>
</form>
</body>
</html>
