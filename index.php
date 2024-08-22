<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?> 

<?php include_once "header.php"; ?>
<body><div class="outer-border">
  <div class="wrapper">
    <section class="form signup">
      <header>DOGGLE</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <input type="text" name="fname" placeholder="First name" required>
          </div>
          <div class="field input">
            <input type="text" name="lname" placeholder="Last name" required>
          </div>
        </div>
        <div class="field input">
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <input type="password" name="password" placeholder="Enter new password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Upload Image</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input style="border-radius: 10px; background-color:#002762;" type="submit" name="submit" value="Sign Up">
        </div>
      </form>
      <div style="color: black;" class="link">Already signed up? <a style="color: #002762;" href="login.php">Login</a></div>
    </section>
  </div>
  <div style="height: 35px; width:35px; border: 2px solid black; border-radius: 50%; margin-left:170px; margin-top:10px;" class="ipad-botton"></div>
  </div>
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>
</body>
</html>
