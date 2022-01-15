<script type="text/javascript">
	function alert1() {
		alert("kata sandi salah / username salah ")
	}
	function altuser() {
		alert("username salah harus diisi")
	}
	function altpw() {
		alert("kata sandi harus diisi ")
	}
	
</script>

<?php 
include "koneksi.php";

$user = $_POST['username'];
$pass=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$user' AND password='$pass'";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["username"])) {
		echo "
		<script>
		altuser();
		setTimeout(function() {  
			document.location.href='login.html';
			}, 1000);
		</script>
		";

		
		
	}elseif(empty($_POST["password"])){
		echo "
		<script>
		altpw();
		setTimeout(function() {  
			document.location.href='login.html';
			}, 1000);
		</script>
		";
		

	}else{

		$p = md5($pass);
        $login=mysqli_query($con,"SELECT * FROM user WHERE username='$user' AND password='$p'");
        $ketemu = mysqli_num_rows($login);
        $r= mysqli_fetch_assoc($login);

        if ($r > 0) {
        	// echo "anu";
        	session_start();
        	$_SESSION['START'] = true;
        	$_SESSION['username'] = $r['username'];
        	header("location:index.php");

        	exit();
        }else{
        	
        	echo "<script>
				alert1();
				setTimeout(function() {  
					document.location.href='login.html';
				}, 1000);
				</script>";
        }
    }
}

?>

