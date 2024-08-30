<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Wallet</title>

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>

  <?php
  if (isset($_POST['submit'])) {
    include 'connection.php';

    $sql = "SELECT order_id FROM customer_order ORDER BY order_id  DESC LIMIT 1;";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['order_id'];
      }
    }

    $wallet = 'wallet';
    $sql = "update customer_order set wallet='$wallet' where order_id=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
      header("location:order_show.php");
    } else {
      die(mysqli_error($conn));
    }
  }


  ?>


  <div class="container">
    <div class="row mt-5">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="md4">
        <h4>Wallet Recharge</h4>
      </div>

    </div>
    <div class="row mt-4">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="md4">
        <p>you can recharge your wallet for 5000 your farm visit stay with us will be free of cost</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4" id="md4">
        <form action="" method="post">
          <button class="btn btn-primary  ms-5" name="submit">Wallet Recharge</button>
        </form>
      </div>
    </div>
    <!-- <div class="row"></div> -->
  </div>
  </div>
</body>

</html>