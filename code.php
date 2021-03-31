<?php

require 'functions.php';


$val = $_POST["value"];

$dr = $val * .30392;
$fit = $val * .30;
$total = $val + $dr + $fit;


$bp= $total;


$dr3 = ($val * 38.776)/100;
$total3 = $val + $dr3;

$difference = $total2 - $total3;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	<style type="text/css">
	

table {
	text-align: center;
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 6px;
}

tr:nth-child(odd) {
    background-color: #dddddd;
}

</style>
</head>
<body>
	<br/>
	<a href="main.html" class="btn btn-info">Home</a>
	<?php 
		$dr = $val * .30392;
		$fit = $val * .30;
		$total = $val + $dr + $fit;

		$headers = [
			'Basic Pay:',
			'Last',
		];
		$rows = [
			[
				'Basic Pay:', round($val),
			],
			[
				'DR as on June 2018 ( 30.392 ):', round($dr),
			],
			[
				'TOTAL:', round($total),
			],
			[
				'Pay Fixed at:', round($fit),
			],
		];
		render_table('First Table', $headers, $rows, $serial_no = true); 

	?>

	<?php 

		$dr2= ($bp * 7.28)/100;
		$total2 = $bp + $dr2;
		
		$headers = [
			'Basic Pay:',
			'Last',
		];
		$rows = [
			[
				'BP:', round($bp),
			],
			[
				'DR:', round($dr2),
			],
			[
				'TOTAL:', round($total2),
			],
			
		];
		render_table('Second Table', $headers, $rows, $serial_no = true); 

	?>
	<?php 

		$dr3 = $bp * 38.776/100;
		
		$headers = [
			'Basic Pay:',
			'Last',
		];
		$rows = [
			[
				'BP:', round($bp),
			],
			[
				'DR:', round($dr3),
			],
			[
				'TOTAL:', round($bp + $dr3),
			],
			
		];
		render_table('Third Table', $headers, $rows, $serial_no = true); 

	?>

	<?php 

		$dr3 = $bp * 38.776/100;
		
		$headers = [
			'Basic Pay:',
			'Last',
		];
		$rows = [
			[
				'BP:', round($bp),
			],
			[
				'DR:', round($dr3),
			],
			[
				'TOTAL:', round($bp + $dr3),
			],
			
		];
		render_table('Fourth Table', $headers, $rows, $serial_no = true); 

	?>

<?php 
	
?>

</body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</html>

