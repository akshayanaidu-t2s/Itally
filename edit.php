<!DOCTYPE HTML>
<html lang="en-US">
<head>
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
<style>
ul {
    list-style-type: none;<input name="name" id="name" type="text" value="Name" onfocus="clearField(this);" onblur="fillField(this);"/>
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover {
    background-color: #111;
}
</style>
</head>

<body background="">

<ul>
  <li><a href="next.php">Previous</a></li>
  <li><a href="previous.php">Next</a></li>
  <li><a href="previous.php">Test Me</a></li>
  <li><a href="previous.php">Update list</a></li>
  <li><a href="graph.html">Graph</a></li>
</ul>
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
