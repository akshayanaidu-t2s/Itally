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
  <p>

    <table class="table table-striped table-inverse" id="dataTable" border="10">
      <div class="container">
        <div class="row">
    <form action="dynamic_table.php" method="post">
  <center>  <input type="button" class="btn btn-primary btn-sm" value="Add Ingredient" onClick="addRow('dataTable') " />
    <input type="button" class="btn btn-primary btn-sm" value="Remove Ingredient" onClick="deleteRow('dataTable') "  />
    <center></p>

<div class="col-md-6 col-md-offset-3">
<form action="/action_page.php" class="form-horizontal">
  <td>
  <div class="form-group">
<label class="col-sm-2 control-label">
  Ingredient:</label>
  <div class="col-sm-10">
      <input type="text" required="required" name="Ingredient_Name[]" size="10">
    </div>
  </div>
</td>
<td>
  <div class="form-group">
  <label class="col-sm-2 control-label">
  Pizza:</label>
    <div class="col-sm-10">
      <input type="text" required="required" class="small"  name="Pizza[]" size="10">
      <script>
      $("input").keyup(function () {
          //if (!this.value.match(/[0-9]/)) {
              this.value = this.value.replace(/[^0-9]/g, '');
          //}
      });
      </script>
    </div>
  </div>
</td>
<td>
  <div class="form-group">
  <label class="col-sm-2 control-label">
  Burger:</label>
    <div class="col-sm-10">
        <input type="text" required="required" class="small"  name="Burger[]" size="10">
        <script>
        $("input").keyup(function () {
            //if (!this.value.match(/[0-9]/)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            //}
        });
        </script>
      </div>
    </div>
  </td>
  <td>
    <div class="form-group">
    <label class="col-sm-2 control-label">
    Roti:</label>
    <div class="col-sm-10">
        <input type="text" required="required" class="small"  name="Roti[]" size="10">
        <script>
        $("input").keyup(function () {
            //if (!this.value.match(/[0-9]/)) {
                this.value = this.value.replace(/[^0-9]/g, '');
            //}
        });
        </script>
      </div>
      </div>
    </td>
    <td>
      <div class="form-group">
      <label class="col-sm-2 control-label">
        Noodles:</label>
        <div class="col-sm-10">
  <input type="text" required="required" class="small"  name="Noodles[]" size="10">
  <script>
  $("input").keyup(function () {
      //if (!this.value.match(/[0-9]/)) {
          this.value = this.value.replace(/[^0-9]/g, '');
      //}
  });
  </script>
</div>
</div> </td>
<td>
  <div class="form-group">
  <label class="col-sm-2 control-label">
     Dessert:</label>
   <div class="col-sm-10">
       <input type="text" required="required" class="small"  name="Dessert[]" size="10">
       <script>
       $("input").keyup(function () {
           //if (!this.value.match(/[0-9]/)) {
               this.value = this.value.replace(/[^0-9]/g, '');
           //}
       });
       </script>
     </div>
   </div> </td>
   <td>
     <div class="form-group">
     <label class="col-sm-2 control-label">
       FishCurry:</label>
       <div class="col-sm-10">
           <input type="text" required="required" class="small"  name="Fish_Curry[]" size="10">
           <script>
           $("input").keyup(function () {
               //if (!this.value.match(/[0-9]/)) {
                   this.value = this.value.replace(/[^0-9]/g, '');
               //}
           });
           </script>
         </div>
       </div>
     </td>
     <td>
       <div class="form-group">
       <label class="col-sm-2 control-label">
           PaneerTikka:</label>
         <div class="col-sm-10">
             <input type="text" required="required" class="small"  name="Paneer_Tikka[]" size="10">
             <script>
             $("input").keyup(function () {
                 //if (!this.value.match(/[0-9]/)) {
                     this.value = this.value.replace(/[^0-9]/g, '');
                 //}
             });
             </script>
           </div>
         </div>
       </td>

</table>
<center><label>
  <div class="btn-group btn-group-justified" role="group" aria-label="...">
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default">Submit</button>
    </div>
</label>
</center>
</form>
</body>
</html>
</head>
<script>
//var table1 = document.getElementById('data');
function addRow(tableID) {
  console.log("add row is working");
	var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  //var rowCount = 0;
  // if(rowCount==0)
  // {
  //    var body = document.getElementsByTagName('body')[0];
  //          var row = table.insertRow(rowCount);
  //         var tbl = document.createElement('table');
  //         var tbl = document.createElement('table');
  //         tbl.setAttribute('border', '1');
  //         tbl.setAttribute('class', 'form');
  //         var tbdy = document.createElement('tbody');
  //         var tr = document.createElement('tr');
  //         var td = document.createElement('td');
  //
  //           var cell1 = row.insertCell(0);
  //           var element1 = document.createElement("input");
  //           element1.type = "checkbox";
  //           element1.name="chkbox[]";
  //           td.appendChild(cell1.appendChild(element1));
  //
  //
  //           var cell2 = row.insertCell(1);
  //           //cell2.innerHTML ="Ingredient Name";
  //           var element2 = document.createElement("input");
  //           element2.type = "text";
  //           element2.name = "Ingredient_Name[]";
  //           td.appendChild(cell2.appendChild(element2));
  //
  //
  //           var cell3 = row.insertCell(2);
  //           //cell3.innerHTML = "Quantity ";
  //           var element3 = document.createElement("input");
  //           element3.type = "text";
  //           element3.name = "Quantity[]";
  //         td.appendChild(cell3.appendChild(element3));
  //           tr.appendChild(td);
  //           tbdy.appendChild(tr);
  //           tbl.appendChild(tbdy);
  //           body.appendChild(tbl)
  //
  //
  // }
  var row = table.insertRow(rowCount);
		 var colCount = table.rows[0].cells.length;
    //var colCount = 3;
		for(var i=0; i <colCount; i++) {
			var newcell = row.insertCell(i);
			newcell.innerHTML = table.rows[0].cells[i].innerHTML;
		}

}

function deleteRow(tableID) {
	var table = document.getElementById(tableID);
  //var table = table1;
	var rowCount = table.rows.length;
	for(var i=0; i<rowCount; i++) {
		var row = table.rows[i];
		var chkbox = row.cells[0].childNodes[0];
    if(null != chkbox && true == chkbox.checked) {
			if(rowCount <= 1) { 						// limit the user from removing all the fields
				alert("Cannot Remove all the Ingredients.");
				break;
			}
			table.deleteRow(i);
			rowCount--;
			i--;
		}
	}
}
</script>
