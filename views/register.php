<?php
  include_once '../css/register.css';
?>
<html>
   <head>
      <title>Register</title>
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="css/register.css">
      <link rel = "stylesheet" type="text/css" href ="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   </head>
   <body>
      <div class="container">
          <form method="post" action="../controller/RegisterController.php" id="register_form">
            <h3>Register</h3>
            <div class="form-group">
               <input type = "hidden" name = "id" value = "<?php echo $id; ?>" >
            </div>
            <div class="form-group">
               <input type="text" name="username" placeholder="UserName" value="">
            </div>
            <div class="form-group"<?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
               <input type="email" name="email" placeholder="Email" value="">
               <?php if (isset($email_error)): ?>
               <span><?php echo $email_error; ?></span>
               <?php endif ?>
            </div>
            <div class="form-group">
               <input type="password"  placeholder="Password" name="password">
            </div>
            <div class="form-group">
               <button type="submit" class="btn btn-primary" name="register" id="reg_btn">Register</button>
               Already Registered <a href="login.php">Login</a>
            </div>
         </form>
      </div>
   </body>
</html>