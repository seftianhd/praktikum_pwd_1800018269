<?php

include "koneksi.php";

$sql="select * from user";
$tampil = mysqli_query($con,$sql);

if (mysqli_num_rows($tampil) > 0) {
    $no=1;
    $response = array();
    $response["data"] = array();
    while ($r = mysqli_fetch_array($tampil)) {
        $h['id'] = $r['id'];
        $h['username'] = $r['username'];
        $h['email'] = $r['email'];
        $h['password'] = $r['password'];
        array_push($response["data"], $h);
    }
    echo json_encode($response);
}else {
    $response["message"]="tidak ada data";
    echo json_encode($response);
}

?>