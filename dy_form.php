<!DOCTYPE HTML>
<html lang="en-US">
<head>
  <?php include 'navigation.php';?>
<style>
body {
    background-image: url("https://previews.123rf.com/images/klenova/klenova1509/klenova150900063/45304678-Wooden-spoon-and-ingredients-on-old-background-Vegetarian-food-health-or-cooking-concept--Stock-Photo.jpg");
}
</style>

<meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<title>How to create form using jQuery UI</title>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/pepper-grinder/jquery-ui.css" media="screen" rel="stylesheet" type="text/css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js" type="text/javascript"></script>
<script type="text/javascript" src="lib/jquery.ui.core.js"></script>
<script type="text/javascript" src="lib/jquery.ui.widget.js"></script>
<script type="text/javascript" src="jquery-ui-form.js"></script>
<link rel="stylesheet" href="style.css" />
<script type="text/javascript">

$(function()
{
$("form").form();
});
</script>
<center><h1><em><strong>Enter the stock Values</em></strong></center></h1>
  <div class="container">
    <div class="row">
<div class="col-md-6 col-md-offset-4">

<form action="add_ing.php" class="form-horizontal" method="post">
  <?php
  //include("Connection.php");
  require 'connection.php';
  $conn=Connect();
  // Check connection
  if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT Ingredients_Name FROM Ingredients_details" ;

  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) : ?>
      <div class="form-group form-group-sm">
  <label class="col-sm-3 control-label" for="formGroupInputSmall">
      <?=$row['Ingredients_Name']?>:</label>
    <div class="col-sm-5">
      <input type="text" name="Ing[]" value="" class="form-control" maxlength="3" type="text" autocomplete="off" >
      <script>
      $("input").keyup(function () {
          //if (!this.value.match(/[0-9]/)) {
              this.value = this.value.replace(/[^0-9]/g, '');
          //}
      });
      </script>
    </div>
  </div>
    <?php endwhile;
  }
  else {
      echo "0 RECORDS";
  }
  ?>
  <center>
      <div class="col-sm-5">
  <button type="submit" class="btn btn-primary btn-sm">Submit</button></div>
  <button type="button" class="btn btn-primary btn-sm" onclick="window.location='dynamic_form.php'">New Ingredients</button>

  </center>
</div>
</div>
</form>
</div>
</div>
</div>


</center>
</body>
</html>
