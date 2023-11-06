<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Service-Detail</title>
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
    <a href="services.php" class="active"><i class="fa fa-server"></i><span>Services</span></a>
    <a href="../phpcodesprojects/projects.php"><i class="fa-solid fa-folder"></i><span>Projects</span></a>
    <a href="../phpcodescategory/category.php"><i class="fa-solid fa-folder"></i><span>Projects Category</span></a>
    <a href="../phpcodescms/cms.php"><i class="fa-solid fa-file"></i><span>CMS</span></a>
    <a href="../phpcodescontact/contact.php"><i class="fa-solid fa-address-card"></i><span>Contact us</span></a>
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
              <p><i class="fa fa-server me-2"></i>Services <i class="fa fa-angle-right "></i> Edit</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="detail-box">
            <div class="bg-warning text-white fs-5 py-1 ps-2">
              Add Service 
            </div>
            <form class="text-center" action="code.php" method="POST" enctype="multipart/form-data">
    <label>Service Name</label> <input class="w-75" type="text" name="ser_name" id=""><br>
    <label>Sort Order</label> <input class="w-75" type="number" name="sort" id=""><br>
    <label>Service Icon</label>
    <input type="file" onchange="showImage('fileInput', 'imageDisplay')" class="w-75" placeholder="" name="image_icon" id="fileInput">	
    <label for="fileInput" class="custom-upload-button w-75">Upload</label>
    <img src="#" id="imageDisplay" class="mt-3" height="100px" alt=""><br>
    <!-- Service Image -->
    <label>Service Image</label>
    <input type="file" onchange="showImage('fileInputi', 'imageDisplayi')" class="w-75" placeholder="" name="image" id="fileInputi">	
    <label for="fileInputi" class="custom-upload-button w-75">Upload</label>
    <img src="#" id="imageDisplayi" class="mt-3" height="200px" alt=""><br>
    <label>Home content</label> <input class="w-75" type="text" name="ser_homecont" id="">
    
    <label class="maincontent">Main Content</label> <textarea class="w-75 " rows="5" type="text" name="ser_fullcont" id=""></textarea><br>
    <input type="submit" class="submit-btn" value="Submit"> <a href="services.php" class="cancel-btn">Cancel</a>
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