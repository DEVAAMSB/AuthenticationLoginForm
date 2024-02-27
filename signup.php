<!DOCTYPE html>
<html lang="en">
<head>
	<title>Authentication | Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
              <label>
                  <input type="text"
                         name="name"
                         placeholder="Name"
                         value="<?php echo $_GET['name']; ?>">
              </label><br>
          <?php }else{ ?>
              <label>
                  <input type="text"
                         name="name"
                         placeholder="Name">
              </label><br>
          <?php }?>

          <label>User Name</label>
          <?php if (isset($_GET['uname'])) { ?>
              <label>
                  <input type="text"
                         name="uname"
                         placeholder="User Name"
                         value="<?php echo $_GET['uname']; ?>">
              </label><br>
          <?php }else{ ?>
              <label>
                  <input type="text"
                         name="uname"
                         placeholder="User Name">
              </label><br>
          <?php }?>


     	<label>Password</label>z
         <label>
             <input type="password"
name="password"
placeholder="Password">
         </label><br>

          <label>Re Password</label>
         <label>
             <input type="password"
                    name="re_password"
                    placeholder="Re Password">
         </label><br>

     	<button class="button" type="submit">Sign Up</button>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
</body>
</html>