<?php
$val = $_POST["value"];

$dr = $val * .30392;
$fit = $val * .30;
$total = $val + $dr + $fit;


$bp= $total;
$dr2= ($bp * 7.28)/100;
$total2 = $bp + $dr2;

$dr3 = ($val * 38.776)/100;
$total3 = $val + $dr3;

$difference = $total2 - $total3;
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	<h2>First Table</h2>
	<table>
		<tr>
			<th>Basic Pay</th>
			<th>DR</th>
			<th>Fitment</th>
			<th>Total</th>
		</tr>
		<tr>
			<td><?php echo $val; ?></td>
			<td><?php echo $dr; ?> </td>
			<td><?php echo $fit; ?>  </td>
			<td><?php echo $total; ?></td>
		</tr>
	</table>
	<h2>Second Table</h2> <br>
	<table>
		<tr>
			<th>BP</th>
			<th>DR</th>
			<th>Total</th>
		</tr>
		<tr>
			<td><?php echo $bp; ?> </td>
			<td> <?php echo $dr2; ?></td>
			<td><?php echo $total2; ?> </td>
		</tr>
	</table>

</body>
</html>


