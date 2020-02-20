<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">
	<!-- <script src="script/script.js" type="text/javascript"></script> -->

</head>
<body>

<div class="container">

<h2>BOOK STORE SHOP</h2>

<form action="">
  <label for="btitle">Title:</label><br>
  <input id = "bname" type="text" name="bname" placeholder="Title of the Book here"><br>
  <label for="authname">Author:</label><br>
  <input id = "authname" type="text" name="authname" placeholder="Name of the Author here"><br>
<label for="bquantity">Quantity:</label><br>
  <input id = "bquantity" type="number" name="bquantity" placeholder="Total number of the Book here"><br>
  <br>
  <button id = "entry" class="addbtn">ADD TO STOCK</button> 


</form> 	

<table id="display">
	<tr>
		<th>Title</th>
		<th>Author</th>
		<th>Quantity</th>
	</tr>
	
</table>
</div>

<script src="script/script.js" type="text/javascript"></script>
</body>

</html>