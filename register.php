<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Ragister</title>
</head>

<body>
  <?php
  include('connection.php');

  $sql = "SELECT customer_id,mobile_no from customer ORDER BY customer_id DESC LIMIT 1";
  $result = mysqli_query($conn, $sql);


  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['customer_id'];
      // print_r($id);
      // exit;
    }
  }

  if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $gender = $_POST['radio'];

    $sql = "UPDATE customer SET customer_name='$name',customer_email='$email',customer_city='$city',customer_gender='$gender' where customer_id=$id ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      header("location:order.php");
    } else {
      die(mysqli_error($conn));
    }
  }


  ?>


  <div class="container">
    <div class="row">

      <div class="col-md-6 m-auto pt-5">
        <form action="" method="post" enctype="multipart/form-data">

          <div class="form-group">
            <h3>Register</h3>
            <label for="exampleInputPassword1">First Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input type="email" class="form-control" name="email" placeholder="Ener Email">
          </div>
          <div class="form-group">
            <label for="cars">Select City:</label>
            <select id="cars" name="city" class="form-control" style="padding: 10px;">
              <option value="" selected>Select City</option>
              <option value="banglorer">Banglore</option>
              <option value="chennai">Chennai</option>
              <!-- <option value="kolkata">Kolkata</option> -->
              <!-- <option value="Tiptur">Tiptur</option> -->
              <option value="Hydrabad">Hydrabad</option>
              <!-- <option value="Keral">Keral</option> -->
            </select>
          </div>
          <div>
            <label> Gender:- &nbsp; &nbsp; &nbsp;</label>
            <input type="radio" name="radio" id="option2" value="male">
            <label> Male</label>
            <input type="radio" name="radio" id="option2" value="female">
            <label> FeMale</label>
            <input type="radio" name="radio" id="option2" value="other">
            <label> Other</label>
          </div>
          <br>
          <button type="submit" name="submit" class="btn btn-primary">Register</button>
      </div>
      </form>
    </div>
  </div>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>