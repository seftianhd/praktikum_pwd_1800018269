<html>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
    <?php
        require('koneksi.php');
        
        // define variables and set to empty values
        $namaErr = $emailErr = $genderErr = $websiteErr = "";
        $nama = $email = $gender = $comment = $website = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama harus diisi";
            }elseif(empty($_POST["email"])){
                $emailErr = "Email harus diisi";
            }elseif(empty($_POST["gender"])){
                $genderErr = "Gender harus dipilih";
            }else{
                if(empty($_POST["website"])){
            $website = "";
        }else{
            $website = test_input($_POST["website"]);
        }

        if(empty($_POST["comment"])){
            $comment = "";
        }else{
            $comment = test_input($_POST["comment"]);
        }

        $nama = test_input($_POST["nama"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);

        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Email tidak sesuai format"; 
        }else{
            mysqli_query($con, "INSERT INTO blog VALUE('$nama', '$email', '$website', '$comment', '$gender')");
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>Posting Komentar </h2>
<p><span class = "error">* Harus Diisi.</span></p>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
     <table>
        <tr>
            <td>Nama:</td>
            <td><input type = "text" name = "nama">
                <span class = "error">* <?php echo $namaErr;?></span>
            </td>
        </tr>
        <tr>
            <td>E-mail: </td>
            <td><input type = "text" name = "email">
                <span class = "error">* <?php echo $emailErr;?></span>
            </td>
        </tr>
        <tr>
            <td>Website:</td>
            <td> <input type = "text" name = "website">
                <span class = "error"><?php echo $websiteErr;?></span>
            </td>
        </tr>
        <tr>
            <td>Komentar:</td>
            <td> <textarea name = "comment" rows = "5" cols = "40"></textarea></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type = "radio" name = "gender" value = "L">Laki-Laki
                <input type = "radio" name = "gender" value = "P">Perempuan
                <span class = "error">* <?php echo $genderErr;?></span>
            </td>
        </tr>
        <tr>
            <td>
                <input type = "submit" name = "submit" value = "Submit"> 
            </td>
        </tr>
    </table>
</form>

<table border="1" cellspacing="0" cellpadding="5" style="text-align: center;">
    <thead style="background-color: lightblue;">
        <tr>
            <td>Nama</td>
            <td>Email</td>
            <td>Website</td>
            <td>Comment</td>
            <td>Gender</td>
        </tr>
    </thead>
    <tbody>

        <?php 
            $query = mysqli_query($con, "SELECT * FROM blog");
            foreach ($query as $data) :
         ?>
         <tr>
            <td><?=$data['nama'] ?></td>
            <td><?=$data['email'] ?></td>
            <td><?=$data['website'] ?></td>
            <td><?=$data['comment'] ?></td>
            <td><?=$data['gender'] ?></td>
         </tr>
         <?php 
            endforeach;
        ?>
    </tbody>
</table>

 
 </body>
</html>