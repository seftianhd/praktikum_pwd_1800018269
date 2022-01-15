<?php
session_start();
if ($_SESSION['START'] == false && !isset($_SESSION['START'])) {
    header('location: index.php');
}
include "koneksi.php";

// $data = mysqli_query($con, "SELECT * FROM user");
// if (isset($_POST['cari'])) {
//     $cari = htmlspecialchars($_POST['search']);
//     $data = mysqli_query($con, "SELECT * FROM user WHERE username LIKE '%$cari%' OR email LIKE '%$cari%' ");
// }
?>

<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>SD 1 Gadingharjo</title>
    <link rel="shortcut icon" href="D:\xampp\htdocs\Test_1\SD GADINGHARJO.png" type="png/x-icon">
</head>

<body class="overflow-e-hidden">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #3282B8;">
        <div class="container px-3">
            <a class="navbar-brand text-white" href="login.html" id="masok">LoginLogin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="data.php">Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="services.php">Services</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <div class="h2">DATA JSON & XML</div>
            <div class="btn-group my-5" role="group" aria-label="Basic example">
                <a href="json.php" type="button" class="btn btn-success">JSON</a>
                <a href="xml.php" type="button" class="btn btn-success">XML</a>
            </div>
            <?php 
            $url = "http://localhost/pwd/responsi/json.php";
            $client = curl_init($url);
            curl_setopt($client, CURLOPT_RETURNTRANSFER, 1);

            $response = curl_exec($client);
            $result = json_decode($response);
         ?>
        </div>
        <div class="container">
            <?php foreach ($result as $r) { ?>
            <div class="card my-3" style="width: 18rem;">
                <div class="card-header"><?php echo "Username " . $r->username . "<br />"; ?></div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo "ID : " . $r->id . "<br />"; ?></li>
                    <li class="list-group-item"><?php echo "Email : " . $r->email . "<br />"; ?></li>
                </ul>
            </div>
        <?php  }?>
        </div>

        
    </section>


    <footer class="bg-dark">
        <div class="container d-flex justify-content-between py-3">
            <div class="text-white">Copyright &copy Your Website 2021</div>
            <div class="text-white text-end">kyaa</div>
        </div>
    </footer>
</body>

</html>

<?php


if ($_SESSION['START'] == false && !isset($_SESSION['START'])) {
    echo "
    <script>
    document.querySelector('#masok').textContent = 'LOGIN';
    </script>
    ";
} else if ($_SESSION['START'] == true) {
    echo "
    <script>
    document.querySelector('#masok').textContent = 'LOGOUT';
    </script>
    ";
}

?>

<script type="text/javascript">
    if (document.querySelector('#masok').containts = "LOGOUT") {
        document.querySelector('#masok').setAttribute('href', 'logout.php')
    } else {
        document.querySelector('#masok').setAttribute('href', 'login.html')
    }
</script>