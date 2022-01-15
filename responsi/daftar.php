<script type="text/javascript">
	function alert1() {
		alert("kata sandi salah / username salah ")
	}
	function altuser() {
		alert("email, username, dan password harus diisi")
	}
	function altpw() {
		alert("kata sandi harus diisi ")
	}
	
</script>

<?php 
include "koneksi.php";

$email = $_POST['email'];
$user = $_POST['username'];
$pass=$_POST['password'];

if (empty($_POST["email"])) {
		echo "
		<script>
		altuser();
		setTimeout(function() {  
			document.location.href='signup.html';
			}, 1000);
		</script>
		";
	}elseif(empty($_POST["username"])){
		echo "
		<script>
		altuser();
		setTimeout(function() {  
			document.location.href='signup.html';
			}, 1000);
		</script>
		";
	}elseif(empty($_POST["password"])){
		echo "
		<script>
		altuser();
		setTimeout(function() {  
			document.location.href='signup.html';
			}, 1000);
		</script>
		";
	}else{
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
                
    		// Insert user data into table
    		$result = mysqli_query($con, "INSERT INTO user(username,email,password) VALUES('$user','$email','$pass')");
        
    		// Show message when user added
    		echo "
				<script>
				altuser();
				setTimeout(function() {  
					document.location.href='signup.html';
				}, 1000);
				</script>
			";
		}
	}
?>

