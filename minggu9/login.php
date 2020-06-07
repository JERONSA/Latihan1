
<?php 
//cek tombol submit
if (isset($_POST["submit"])) {
//cek username dan password
	if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
//jika benar, redirect ke halaman admin
		header("Location: admin.php");
		exit;
	} else 
//jika salah, pesan error
		$error = true;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
<h1>Login Admin</h1>
	<?php if(isset($error)): ?>
	<p style="color: red; font-style: italic;">Your Username/Pasword Incorrect!</p>
	<?php endif; ?>

<ul>
	<form action="" method="POST">
		<li>
			<label for="username">Username : </label>
			<input type="text" name="username" id="username">
		</li>
		<li>
			<label for="password">Pasword : </label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<button type="submit" name="submit">LOGIN</button>
		</li>
	</form>
</ul>
</body>
</html>