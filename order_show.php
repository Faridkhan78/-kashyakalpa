<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Show_order</title>

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>


  <?php
  include 'connection.php';

  $sql = "SELECT city,adult,kids,infants,stays,tent,order_date,wallet FROM customer_order ORDER BY order_id  DESC LIMIT 1;";
  $result = mysqli_query($conn, $sql);

  if ($row = mysqli_fetch_assoc($result)) {
  }


  ?>
  <div class="container">
    <div class="justify-content-center row  mt-5">
      <div class="col-lg-6 border border-dark p-3">
        <h2 class="border-bottom  border-dark text-center">Your Order Detailes</h2>
        <div class="field border-bottom">
          <h5>City  &nbsp;&nbsp;  <?php echo $row['city']; ?></h5>
        </div>
        <div class="field border-bottom ">
          <h5>Adult  &nbsp;&nbsp;  <?php echo $row['adult']; ?></h5>
        </div>
        <div class="field border-bottom">
          <h5>Kids  &nbsp;&nbsp; <?php echo $row['kids']; ?></h5>
        </div>
        <div class="field border-bottom">
          <h5>infants &nbsp;&nbsp;  <?php echo $row['infants']; ?></h5>
        </div>
        <div class="field border-bottom">
          <h5>Stay  &nbsp;&nbsp;  <?php echo $row['stays']; ?></h5>
        </div>
        <div class="field border-bottom">
          <h5>Tent   &nbsp;&nbsp; <?php echo $row['tent']; ?></h5>
        </div>       
        
        <div class="field border-bottom">
          <h5>Order_Date &nbsp;&nbsp;   <?php echo $row['order_date']; ?></h5>
        </div>

         
        <div class="field border-bottom">
          <h5>Wallet &nbsp;&nbsp; <?php echo $row['wallet']; ?></h4>
        </div>
        <div class="field text-center mt-3">
          <a href="index.html"> <button class="btn btn-primary">Back To Home</button></a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>