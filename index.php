<!DOCTYPE html>
<html>
<head>
	<title>PHP Ajax-Curd</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">  	
  	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script> 
  	<?php 
	/**
	* @author ARUN G
  	* @author ARUN G <arungovindgobi@gmail.com>
  	* @link http://arung.in/
  	* @link https://github.com/arung-in/
  	*/
 	?>
</head>
<body>
  <h2>Ajax-curd Example</h2>
  <p>The .table-striped class adds zebra-stripes to a table:</p>
  <!-- data-table -->
  <table class="table table-striped display" id="data-table">
    <thead>
      <tr>
        <th>Serial No.</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>  
  </table> 
  <script type="text/javascript">
  	$(document).ready(function() { 
  		$('#data-table').DataTable( {
  			"processing": true,
	        "serverSide": true,
	        "ajax": {
	        	"dataType": 'json',
	        	"contentType": "application/json; charset=utf-8",
	            "url": "crud.php",
	            "type": "POST",
	            "dataSrc": function (json) {
		           //return $.parseJSON(json.d);
		           return json;
		        }
	        },
	    	"columns": [ 
	    		{ "data": "id" }, 
	    		{ "data": "full_name" }, 
	    		{ "data": "email_id" } 
	    		]
  		});
  		
	}); 

  </script>
</body>
</html>