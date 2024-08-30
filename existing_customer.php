<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>existing customer</title>

  <link rel="stylesheet" href="css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>

  <form action="customer_detail.php" method="POST">
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-5">
          <h3 class="text-center">Welcome to Farm-Visit</h3>
          <label for="exampleInputEmail1" class="form-label">Enter number</label>
          <input type="text" class="form-control" id="phoneNo" name="mobileno" onkeypress="return isNumberKey(event)" maxlength="10">
          <span id="result"></span>
          <div id="emailHelp" class="form-text">We'll never share your number with anyone else.
          </div><br>
          <button type="submit" class="btn btn-primary" name="submit">Send OTP</button>
        </div>
      </div>
    </div>
  </form>

</body>

</html>
<script>
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      return false;
    }
    return true;
  }
</script>