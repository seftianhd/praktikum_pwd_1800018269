<?php
include "koneksi.php"; 
header('Content-Type: text/xml');

$query = "SELECT * FROM user";
$hasil = mysqli_query($con,$query);
$jumField = mysqli_num_fields($hasil);

echo "<?xml version='1.0'?>";
echo "<data>";

while ($data = mysqli_fetch_array($hasil)){
    echo "<user>";
    echo"<id>",$data['id'],"</id>";
    echo"<username>",$data['username'],"</username>";
    echo"<email>",$data['email'],"</email>";
    echo"<password>",$data['password'],"</password>";
    echo "</user>";
}
echo "</data>";
?>