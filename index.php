<!DOCTYPE html>
<html lang="en">
<head>
	<title>Authentication | Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
         <label>
             <input type="text" name="uname" placeholder="User Name">
         </label><br>

     	<label>Password</label>
         <label>
             <input type="password" name="password" placeholder="Password">
         </label><br>

     	<button class="button" type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
</body>
</html>