<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
    <?php
    include('index.php');
    include('../src/php/db_login.php');
session_start();
if(isset($_SESSION['username'])){
  
}else{
  echo "<script>location.herf='login.php'</script>";
}




    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../src/css/booking.css">
   
</head>
<body>
    <div class="productCard">

    <div class="card text-white bg-dark mb-3" style="width: 18rem;">
  <img src="../src/imgs/exercise-machines-cartoon-vector.jpg" class="card-img-top" alt="Gym pic">
  <div class="card-body">
    <h5 class="card-title">Book A Class</h5>
    <p class="card-text">Book a class with your perfered time and trainer by clicking the button below.</p>
    <a href="bookingPage.php" class="btn btn-warning  btn-lg btn-block">Book</a>
  </div>
</div>
    </div>





<!--js-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>