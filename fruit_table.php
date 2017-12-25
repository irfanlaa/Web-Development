<!DOCTYPE html>
<html lang="en">

<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
 <link type="text/css" href="css/jquery.dynatable.css" rel="stylesheet">
 	<script type="text/javascript" src='js/jquery.datatables.js'></script>
  	  	<script type="text/javascript" src='js/jquery.datatables.min.js'></script>
  	 <link type="text/css" href="css/datatables.min.css" rel="stylesheet">
  	  <link type="text/css" href="css/datatables.css" rel="stylesheet">


 </head>

 <body>
  	<table class="table" id="my-table">
  	<thead>
  	<tr>
	  	<th>No.</th>
	  	<th>Fruits</th>
	  	<th>Details</th>
	  	<th>Quantity</th>
	 </tr>
  	</thead>

	<tbody>
		<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	  	<tr>
		  	<td>1</td>
		  	<td>Buah</td>
		  	<td>Buah sedap</td>
		  	<td>30</td>
	  	</tr>
	</tbody>
  	</table>
  

 <script type="text/javascript">
$(document).ready(function() {
	$('#my-table').DataTable( {
        "columnDefs": [
            { "visible": false, "targets": 2 }
        ],
        "order": [[ 2, 'asc' ]],
        "displayLength": 25,
        "drawCallback": function ( settings ) {
            var api = this.api();
            var rows = api.rows( {page:'current'} ).nodes();
            var last=null;
 
            api.column(2, {page:'current'} ).data().each( function ( group, i ) {
                if ( last !== group ) {
                    $(rows).eq( i ).before(
                        '<tr class="group"><td colspan="5">'+group+'</td></tr>'
                    );
 
                    last = group;
                }
            } );
        }
    } );;
});
</script>








 </body>



 </html>
