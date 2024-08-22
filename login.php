<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<?php include_once "header.php"; ?>
<body><div class="outer-border">
  <div class="wrapper">
    <section class="form login">
      <header>DOGGLE</header><br>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div><br>
        <div class="field input">
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div><br>
        <div class="field button">
          <input style="border-radius: 15px;background-color:#002762;" type="submit" name="submit" value="Login">
        </div>
      </form><br>
      <div class="link">Not yet signed up? <a style="color: #002762;" href="index.php">Signup</a></div>
    </section>
  </div>
  <div style="height: 35px; width:35px; border: 2px solid black; border-radius: 50%; margin-left:170px; margin-top:10px;" class="ipad-botton"></div>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

</body>
</html>
