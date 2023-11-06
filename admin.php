<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-dashboard</title>
  <!-- css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Font Awsome -->
  <script src="https://kit.fontawesome.com/06aa298bcf.js" crossorigin="anonymous"></script>
  <!-- Bootstrap -->
  <link rel="stylesheet" href="bootstrap-5.2.3-dist/css/bootstrap.min.css">

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
      <img src="img/logo.webp" class="logo_img" alt="not Designed">
      <h4>R-Tech</h4>
    </center>
    <a href="admin.php" class="active"><i class="fa-solid fa-desktop"></i><span>Dashboard</span></a>
    <a href="phpcodes/banners.php"><i class="fa fa-picture-o"></i><span>Banners</span></a>
    <a href="phpcodeservices/services.php"><i class="fa fa-server"></i><span>Services</span></a>
    <a href="phpcodesprojects/projects.php"><i class="fa-solid fa-folder"></i><span>Projects</span></a>
    <a href="phpcodescategory/category.php"><i class="fa-solid fa-folder"></i><span>Projects Category</span></a>
    <a href="phpcodescms/cms.php"><i class="fa-solid fa-file"></i><span>CMS</span></a>
    <a href="phpcodescontact/contact.php"><i class="fa-solid fa-address-card"></i><span>Contact us</span></a>
    <a href="loginform.php"><i class="fa fa-sign-out"></i><span>Logout</span></a>

  </div>
  <!-- Side bar ends -->
  <!-- main Content -->
  <div class="content mb-5">
   
  <div class="">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-11 bg-breadcr">
          <div class="breadcrumb-sec">
              <p><i class="fa-solid fa-desktop me-2"></i> Dashboard</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-3">
          <div class="card text-white bg-primary mb-3">
            <div class="card-body pb-0 px-0">
              <h3 class="card-title fw-light"><i class="fa fa-picture-o text-white fs-1 ms-2"></i> Banners</h3>
              
              <div class="card-footer">
                <a href="phpcodes/banners.php" class="text-white">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-lg-5"> 
          <div class="card text-white bg-success mb-3" >
            <div class="card-body pb-0 px-0">
              <h3 class="card-title fw-light"><i class="fa fa-file text-white fs-1 ms-2"></i> CMS(Pages)</h3>
              
              <div class="card-footer">
                <a href="phpcodescms/cms.php" class="text-white">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card text-white bg-info mb-3">
            <div class="card-body pb-0 px-0">
              <h3 class="card-title fw-light"><i class="fa fa-phone-square text-white fs-1 ms-2"></i> Contact</h3>
              
              <div class="card-footer">
                <a href="phpcodescontact/contact.php" class="text-white">Read More <i class="fa fa-arrow-circle-o-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>
  <!-- footer -->

  <script src="bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>

</body>

</html>