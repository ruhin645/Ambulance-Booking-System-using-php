<!DOCTYPE html>
<html lang="en">

<?php include("vendor/inc/head.php");?>

<body>

  <!-- Navigation -->
  <?php include("vendor/inc/nav.php");?>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">About
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.php">Home</a>
      </li>
      <li class="breadcrumb-item active">About</li>
    </ol>

    <!-- Intro Content -->
    <div class="row">
      <div class="col-lg-6">
        <img class="img-fluid rounded mb-4" src="vendor/img/aboutus.jpg" alt="">
      </div>
      <div class="col-lg-6">
        <h2>About Us</h2>
        <p>
        The Ambulance Booking System is designed to address challenges
in the transportation of emergency medical services.
It tackles issues such as task allocation, vehicle tracking,
route assignment, payment, booking orders, delivery reports,
and ensuring the security of patients, medical personnel, and vehicles. The system utilizes GPS technology to track and
assign tasks to ambulances promptly. It also maintains financial records, ensuring secure payment options like
credit/debit cards or bill payments. 
Additionally, the system keeps a record of booked ambulances,
their current assignments, and availability.
        </p>
      </div>
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container -->

  <!-- Footer -->
<?php include("vendor/inc/footer.php");?>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
