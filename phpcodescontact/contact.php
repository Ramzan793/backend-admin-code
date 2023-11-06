<?php
include("../connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Detail</title>
  <!-- css -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/06aa298bcf.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="../bootstrap-5.2.3-dist/css/bootstrap.min.css">

</head>

<body >
  <div>
    <label for="check"><i class="fa-solid fa-bars" id="sidebar_btn"></i></label>
  </div>
  <input type="checkbox" id="check" >
  <header class="header">
    Welcome to DashBoard
  </header>
  <!-- Side bar Start -->

  <div class="sidebar">
    <center>
      <img src="../img/logo.webp" class="logo_img" alt="not Designed">
      <h4>R-Tech</h4>
    </center>
    <a href="../admin.php"><i class="fa-solid fa-desktop"></i><span>Dashboard</span></a>
    <a href="../phpcodes/banners.php"><i class="fa fa-picture-o"></i><span>Banners</span></a>
    <a href="../phpcodeservices/services.php"><i class="fa fa-server"></i><span>Services</span></a>
    <a href="../phpcodesprojects/projects.php"><i class="fa-solid fa-folder"></i><span>Projects</span></a>
    <a href="../phpcodescategory/category.php" ><i class="fa-solid fa-folder"></i><span>Projects Category</span></a>
    <a href="../phpcodescms/cms.php"><i class="fa-solid fa-file"></i><span>CMS</span></a>
    <a href="contact.php" class="active"><i class="fa-solid fa-address-card"></i><span>Contact us</span></a>
    <a href="../loginform.php"><i class="fa fa-sign-out"></i><span>Logout</span></a>

  </div>
  <!-- Side bar ends -->
  <!-- main Content -->
  <div class="content mb-5">
  <div class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 bg-breadcr">
          <div class="breadcrumb-sec">
              <p><i class="fa fa-address-card me-2"></i>Enter Your Contact Information </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="detail-box">
            <div class="bg-warning text-white fs-5 py-1 ps-2">
              Contact Information
            </div>
            <form class="text-center" action="code.php" method="POST" enctype="multipart/form-data">
              <?php
                $read ="SELECT * FROM `contact`";
                $result = $Connection->query($read);
                
                if ($result -> num_rows > 0) {
                    while ($rows = $result -> fetch_assoc()) {
                        // echo"Lastname coming from database <br>";
                        // echo $rows ['lastname'];
                      ?>
                      <input type="hidden" name="user_id" value="<?php echo $rows['id']; ?>">
              <label>Phone Number</label> <input class="w-75" type="text" value="<?php echo $rows['phone'] ?>" name="number" id=""><br>
              <label>Email Address</label> <input type="email" class="w-75" name="email" value="<?php echo $rows['Email'] ?>" id="">
              <label>Address</label> <input type="text" class="w-75" name="address" value="<?php echo $rows['address'] ?>"id="">
              <div class="bg-warning text-start text-white fs-5 py-1 ps-2">
                Social Media Links
              </div>
              <label>Facebook</label> <input type="text" class="w-75" name="facebook" value="<?php echo $rows['facebook'] ?>" id="">
              <label>Instagram</label> <input type="text" class="w-75" name="instagram" value="<?php echo $rows['instagram'] ?>" id="">
              <label>Linkedin</label> <input type="text" class="w-75" name="linkedin" value="<?php echo $rows['linkedin'] ?>" id="">
              <?php          
            }
                }
              ?>
              

              <input type="submit" class="submit-btn" value="Submit"> <a href="contact.php" class="cancel-btn">Cancel</a>
            </form>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>
  <!-- footer -->
  <script src="../js/script.js"></script>
  <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

</body>

</html>