<?php
include('../connection.php'); // Include your database connection file
$baseurl='http://localhost/learning/admin/img/';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Banners</title>
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
    <a href="banners.php" class="active"><i class="fa fa-picture-o"></i><span>Banners</span></a>
    <a href="../phpcodeservices/services.php"><i class="fa fa-server"></i><span>Services</span></a>
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
              <p><i class="fa fa-picture-o me-2"></i>Banners <i class="fa fa-angle-right "></i> Edit</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <div class="detail-box">
            <div class="bg-warning text-white fs-5 py-1 ps-2">
              Edit Your Banner
            </div>
            <form class="text-center" action="update.php" method="POST" enctype="multipart/form-data">
              <?php
                if (isset($_GET['user_id'])) {
                  $user_id = $_GET['user_id'];
              
                  // Retrieve the data for the selected record from the database
                  $query = "SELECT * FROM `banner` WHERE id = $user_id";
                  $result = $Connection->query($query);
              
                  if ($result->num_rows > 0) {
                      $row = $result->fetch_assoc();
                      $image_path = $row ['Image'];
                      ?>
                      
                      <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
        <label>Title</label> <input class="w-75" type="text" name="bn_title" value="<?php echo $row['Title'] ?>"  id=""><br>
        <label>Description</label> <input class="w-75" type="text" name="bn_desc" value="<?php echo $row['Description'];?> " id="">
        <label>Sort-Order</label> <input class="w-75" type="number" name="sort" value="<?php echo $row['sortorder'] ?>" id="">
        <label>Image</label>
        <input type="file" onchange="showImage()" class="w-75" placeholder="" name="image" id="fileInput" value="Upload Image">	
        <label for="fileInput" class="custom-upload-button w-75">Upload</label>
        <img src="<?php echo $baseurl.$image_path; ?>" id="imageDisplay" class="mt-3" height="200px" alt=""><br>
        <label>Btn Txt</label> <input class="w-75" type="text" name="btn_text" value="<?php echo $row['btntext'] ?>" id=""><br>
                      
                      <?php
                  }
              }
              ?>
        
        <input type="submit" class="submit-btn" value="Submit"> <a href="banners.php" class="cancel-btn">Cancel</a>
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
