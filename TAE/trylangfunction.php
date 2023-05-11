

<html>

<head>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>



<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<style>
	.dataTables_length,
.dataTables_filter {
    display: inline-block;
    margin-left: 1.5rem;
}
.dt-button-collection {
    width: auto !important;
}
	.dt-button:not(.dt-btn-split-drop) {
        min-width: 4rem !important;
    }


	</style>
<body>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
				<TH>#</TH>
				<TH>BUSINESS NAME</TH>
				<TH>TAXPAYER</TH>
				<TH>TYPE</TH>
				<TH>ADDRESS</TH>
				<TH>BARANGAY</TH>
				<TH>BUSINESS LINE</TH>
				<TH>ACTIVITY</TH>
				<TH>REGISTERED DATE</TH>
				<TH>ACTION</TH>
            </tr>
        </thead>
        <tfoot>
            <tr>
				<TH>#</TH>
				<TH>BUSINESS NAME</TH>
				<TH>TAXPAYER</TH>
				<TH>TYPE</TH>
				<TH>ADDRESS</TH>
				<TH>BARANGAY</TH>
				<TH>BUSINESS LINE</TH>
				<TH>ACTIVITY</TH>
				<TH>REGISTERED DATE</TH>
				<TH>ACTION</TH>
            </tr>
        </tfoot>
    </table>
</body>

<script>
	$(document).ready(function () {
    $('#example').DataTable({
        processing: true,
        serverSide: true,
        ajax: '../server_side/scripts/server_processing.php',
    });
});
	</script>


</html>

<?php
$table = 'businessdt_db'; 
$primaryKey = 'id';

$columns = array(
    array( 'db' => 'REG_ID', 'dt' => 0 ),
    array( 'db' => 'BUSINESS_NAME',  'dt' => 1 ),
    array( 'db' => 'position',   'dt' => 2 ),
    array( 'db' => 'office',     'dt' => 3 ),
    array(
        'db'        => 'start_date',
        'dt'        => 4,
        'formatter' => function( $d, $row ) {
            return date( 'jS M y', strtotime($d));
        }
    ),
    array(
        'db'        => 'salary',
        'dt'        => 5,
        'formatter' => function( $d, $row ) {
            return '$'.number_format($d);
        }
    )
);
 
// SQL server connection information
$sql_details = array(
    'user' => '',
    'pass' => '',
    'db'   => '',
    'host' => ''
    // ,'charset' => 'utf8' // Depending on your PHP and MySQL config, you may need this
);
require( 'ssp.class.php' );
 
echo json_encode(
    SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns )
);



