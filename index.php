<?php
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		if($_POST['email'] == "anna.ahlstrom@live.com" && $_POST['password'] == "pizzaislekker")
		{
			header('Location: news.php');
		}
		else
		{
			$errorMsg = "<b>Invalid Login Details!</b><br>Please try again.";
		}
	}
?>
<!DOCTYPE html>
<html>
	<?php include 'includes/head.php'; ?>
	<body>
		<div class="container">
			<div class="loginScreen">
				<?php
					$pageTitle = 'Login';
					$menuVisible = false;
					include 'includes/nav.php';

					if(isset($errorMsg))
					{
						echo '<div class="errorMsg">' . $errorMsg . '</div>';
					}
				?>
				<h2 class="loginTitle">Udit</h2>
				<form action="" method="post">
					<input type="text" name="email" placeholder="email" required autofocus autocomplete='off'>
					<input type="password" name="password" placeholder="password" required>
					<input type="checkbox" id="rememberMe">
					<label for="rememberMe">
						<div class="checkbox"></div>
						<span>Remember me</span>
					</label>
					<input type="submit" name="btnAction" value="login">
				</form>
				<div class="noAccount">
					<span>
						Don't have an account yet?<br>
						<a href="register.php">SIGN UP</a>
					</span>
				</div>
			</div>
		</div>
	</body>
</html>