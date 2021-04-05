<?php
include"dbcon.php";
$connect = mysqli_connect($host, $user, $pass, $db);
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "SELECT * FROM dbox WHERE 
	
	TMP LIKE '%".$search."%' 
	OR HUM LIKE '%".$search."%' 
	OR VOC LIKE '%".$search."%'
	OR CH4 LIKE '%".$search."%' 
	OR date LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM dbox ORDER BY id DESC";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered" style="background-color:transparent; color: grey;">
						<tr>
							<th>Temperature(C)</th>
							<th>Humidity(%)</th>
							<th>Air Pollution(PPM)</th>
							<th>Movement (Binary)</th>
							<th>Date</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["TMP"].'</td>
				<td>'.$row["HUM"].'</td>
				<td>'.$row["VOC"].'</td>
				<td>'.$row["CH4"].'</td>
				<td>'.$row["date"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>