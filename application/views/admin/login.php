<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?= $meta_title; ?></title>
  <link rel="stylesheet" href="<?= $this->config->item('cdn'); ?>admin/css/style.css">
<style type="text/css">
  .text-danger
  {
    color: red;
    font-size: 19px;
  }
</style>
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Login</h1>
      <form method="post" action="">
      <?php 
            if($this->session->flashdata('message')){
              ?>

              <p class="text-danger"><?php echo $this->session->flashdata('message');?></p>

            <?php 
            }
          ?>  
        <p>Username : <input type="text" name="email" value="" placeholder="Username or Email" required></p>
        <p>Password : <input type="password" name="password" value="" placeholder="Password" required></p>
        <!-- <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p> -->
        <p class="submit">
          <input type="submit" name="login" value="Login">
        </p>
      </form>
    </div>

    <!-- <div class="login-help">
      <p>Forgot your password? <a href="#">Click here to reset it</a>.</p>
    </div> -->
  </section>

</body>
</html>
