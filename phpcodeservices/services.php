<?php
include('../connection.php');
$baseurl='http://localhost/learning/admin/img/';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
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
              <p><i class="fa fa-server me-2"></i>Services</p>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-11">
          <a href="services-detail.php" class="btn btn-success fs-6 float-end rounded-0 my-2"><i class="fa fa-plus me-2"></i>Add New</a>
          <table class="table table-success table-hover table-bordered table-striped-column">
            
            <thead>
              
              <tr>
                <th scope="col">#</th>
                <th scope="col">Service Name</th>
                <th scope="col">Image</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $read ="SELECT * FROM `services`";
                $result = $Connection->query($read);
                
                if ($result -> num_rows > 0) {
                    while ($rows = $result -> fetch_assoc()) {
                        // echo"Lastname coming from database <br>";
                        // echo $rows ['lastname'];
                        ?>
                            <tr>
                <th scope="row"><?php echo $rows ['sortorder']?></th>
                <td><?php  echo $rows ['Servicename']?></td>
                <td><img src="<?php echo $baseurl.$rows['Image']?>" height="100" alt=""></td>
                <td><a href="#" class="text-decoration-none bg-success text-white border p-1"><i class="fa fa-check me-1"></i>Active</a></td>
                <td>
                <a href="services-edit.php?user_id=<?php echo $rows ['id'];?>" class="text-decoration-none text-white bg-primary px-2 py-1"><i class="fa fa-edit me-2"></i>Edit</a>

                  <button data-bs-toggle="modal" data-bs-target="#DeleteModal" type="button" value="<?php echo $rows ['id'];?>" class="border-0 ms-2 text-decoration-none text-white bg-danger px-2 py-1 deletebtn"><i class="fa fa-trash me-2"></i>Delete</button></td>
              </tr>
                        <?php
                    }
                }
              ?>
              
              
              
            </tbody>
          </table>
          <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                <form action="delete.php" method="POST">
        <input type="hidden" name="delete_id" class="delete_user_id">
      Are You Sure You want to Delete This?<br>
                
        <button type="button" class="btn btn-secondary mt-2 float-end" data-bs-dismiss="modal">Close</button>
        <input type="submit" name="deleteb" class="btn btn-Danger deletebtnm mt-2 float-end me-2" value="Delete">
                </form>
      </div>
      
    </div>
  </div>
</div>
        </div>
      </div>
      
    </div>
  </div>
  
  </div>
  <!-- footer -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
     $(document).ready(function(){
        $('.deletebtn').click(function(e){
            e.preventDefault();

            var user_id = $(this).val();
            // Set the value of the input field in the modal
            $('.delete_user_id').val(user_id);
            // Use the correct ID selector in the next line
            $('#DeleteModal').modal('show'); // Add the '#' before 'DeleteModal'
        });
    });
</script>
  <script src="../bootstrap-5.2.3-dist/js/bootstrap.min.js"></script>
</body>

</html>