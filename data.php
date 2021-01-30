<?php
$server = "localhost";
$user = "root";
$pwd = "";
$db = "uas";

$koneksi = new mysqli($server,$user,$pwd,$db);

$result = mysqli_query($koneksi,"select * from user");
$arrBiodata = [];

while($row = mysqli_fetch_assoc($result)){
	$arrBiodata[] = $row;
}
echo json_encode($arrBiodata);
