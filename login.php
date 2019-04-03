<?php include '../classes/Adminlogin.php';?>

<?php

$al = new Adminlogin();
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$adminUser = $_POST['adminUser'];
	$adminPass = $_POST['adminPass'];

	$loginCheck = $al->adminLogin($adminUser,$adminPass);
}

?>

<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
			<span style="color: gray;font-size: 16px;">
				<?php

				if (isset($loginCheck)) {
					echo $loginCheck;
				}

				?>
			</span>
			<div>
				<input type="text" placeholder="Username" required="" name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>