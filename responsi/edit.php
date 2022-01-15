<?php
// include database connection file
include("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{    
    $id = $_POST['id'];
    
    $name=$_POST['usernamee'];
    $email=$_POST['emaill'];
    $pass=$_POST['passwordd'];
        
    // update user data
    $result = mysqli_query($con, "UPDATE user SET username='$name',email='$email',password='$pass' WHERE id=$id");
    
    // Redirect to homepage to display updated user in list
    header("Location: data.php");
}

?>

<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($con, "SELECT * FROM user WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['username'];
    $emai = $user_data['email'];
    $pas = $user_data['password'];
}
?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>SD 1 Gadingharjo</title>
  <link rel="shortcut icon" href="D:\Kuliah\Kampus Mengajar\WebProfile\Test_1\SD GADINGHARJO.png" type="png/x-icon">
</head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg" style="background-color: #3282B8;">
      <div class="container px-3">
        <a class="navbar-brand text-white" href="login.html">Login</a>
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

      <section class="justify-content-center d-flex align-item-center">
        <div class="card text-start mt-5 mb-5" style="width : 60%;">
          <div class="card-header text-center">Welcome user, Please Login . .. </div>
          <div class="card-body" >
            <p id="alert"></p>
            <form action="edit.php" method="POST" >
              <div class="mb-3">
                <label class="form-label">Id</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value=<?php echo $id;?>>
              </div>
              <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="emaill" value=<?php echo $emai;?>>
              </div>
              <div class="mb-3">
                <label class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="usernamee" value=<?php echo $name;?>>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="passwordd" value=<?php echo $pas;?>>
              </div>
              <button type="submit" class="btn btn-primary" name="update">UPDATE</button>
            </form>
          </div>
          <div class="card-footer text-muted text-center">daftar skuy</div>
        </div>
      </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>