<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>select your date</title>

  <link rel="stylesheet" href="css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <style>
    #date-picker {
      padding: 10px;
      font-size: 16px;
    }

    #available-seats {
      font-weight: bold;
      margin-top: 10px;
      color: green;
    }



    body {
      font-family: Arial, sans-serif;
    }

    .calendar-container {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .calendar {
      display: grid;
      grid-template-columns: repeat(7, 1fr);
      gap: 10px;
      margin-top: 20px;
      width: 100%;
      max-width: 600px;
    }

    .day {
      border: 1px solid #ccc;
      /* padding: 10px; */
      text-align: center;
      cursor: pointer;
      position: relative;
    }

    .day.disabled {
      background-color: #eee;
      color: #999;
      cursor: not-allowed;
    }

    .seats {
      font-size: 12px;
      color: #333;
      margin-top: 5px;
    }

    .navigation {
      display: flex;
      justify-content: space-between;
      width: 100%;
      max-width: 600px;
    }

    .nav-button {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px;
      cursor: pointer;
      border-radius: 5px;
    }

    .nav-button:disabled {
      background-color: #ddd;
      cursor: not-allowed;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row mt-5  ">
      <div class="col-md-3"></div>
      <div class="col-md-6 border border-rounded">
        <h4 class="text-center">Selected Visit Date</h4>
        <p class="text-center">Available Slot</p>
        <?php
        include 'connection.php';

        $sql = "SELECT order_id,city,adult,kids,infants,stays,tent FROM customer_order ORDER BY order_id  DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        if ($result) {
          while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['order_id'];
            echo '
             <span><center>city:' . $row['city'] . '</center></span>
                <span><center>adult:' . $row['adult'] . '</center></span>
                <span><center>kids:' . $row['kids'] . '</center></span>
                  <span><center>infants:' . $row['infants'] . '</center></span>
                   <span><center>stays:' . $row['stays'] . '</center></span>
                     <span><center>tent:' . $row['tent'] . '</center></span>
           
      ';
          }
        }
        if (isset($_POST['submit'])) {

          $otime = $_POST['selected-date'];

          $sql = "update customer_order set  order_date='$otime' where order_id=$id";
          $result = mysqli_query($conn, $sql);
          header("location:wallet.php");
        }


        ?>


        <div class="row justify-content-center">
          <!-- <div class="col-md-3"></div> -->

          <div class="col-md-8 mt-5 mb-5">


            <div class="container">
              <div class="row">
                <div class="calendar-container">
                  <div class="navigation">
                    <button id="prev-month" class="nav-button">&lt; Previous</button>
                    <span id="month-year"></span>
                    <button id="next-month" class="nav-button">Next &gt;</button>
                  </div>
                  <div id="calendar" class="calendar"></div>
                  <p id="available-seats">Available seats: </p>
                  <form method="post" action="">
                    <input type="hidden" id="selected-date" name="selected-date" placeholder="Selected Date">
                    <button class="btn btn-primary" name="submit">Payment Geyway</button>
                  </form>
                </div>
              </div>
            </div>



            <!-- <label for="date-picker">Select a Date:</label>
              <input type="date" id="date-picker" name="date-picker" min="">
              <p id="available-seats"></p>
              <form method="post" action="">
                    <input type="hidden" id="selected-date" name="selected-date" placeholder="Selected Date">
                    <button class="btn btn-primary" name="submit">Payment Geyway</button>
              </form> -->
              
            <!-- <form method="post" action="">
              <center>
                <input type="text" id="selected-date" name="selected-date"><br>
                <button class="btn btn-primary" name="submit">get payment</button>
              </center>
            </form> -->




          </div>

        </div>

      </div>
    </div>
  </div>

</body>

</html>

<!-- <script>
  // Get today's date
  var today = new Date();
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0'); // January is 0
  var year = today.getFullYear();

  // Format the date in YYYY-MM-DD format
  var currentDate = year + '-' + month + '-' + day;

  // Set the min attribute of the date picker to today's date
  document.getElementById('date-picker').setAttribute('min', currentDate);

  // Get the date picker element
  var datePicker = document.getElementById('date-picker');

  // Add an event listener to capture the selected date
  datePicker.addEventListener('change', function() {
    var selectedDate = datePicker.value;
    // Display the selected date in the text box
    document.getElementById('selected-date').value = selectedDate;
  });
</script> -->

<!-- <script>
  // Initialize today's date and the next five days for the date picker
  var today = new Date();
  var day = String(today.getDate()).padStart(2, '0');
  var month = String(today.getMonth() + 1).padStart(2, '0');
  var year = today.getFullYear();

  var minDate = year + '-' + month + '-' + day;
  document.getElementById('date-picker').setAttribute('min', minDate);

  //personal
  var datePicker = document.getElementById('date-picker');
  datePicker.addEventListener('change', function() {
    var selectedDate = datePicker.value;
    // Display the selected date in the text box
    document.getElementById('selected-date').value = selectedDate;
    updateAvailableSeats(selectedDate);
  });


  var maxDate = new Date();
  maxDate.setDate(today.getDate() + 30);
  var maxDay = String(maxDate.getDate()).padStart(2, '0');
  var maxMonth = String(maxDate.getMonth() + 1).padStart(2, '0');
  var maxYear = maxDate.getFullYear();
  var maxDateStr = maxYear + '-' + maxMonth + '-' + maxDay;

  document.getElementById('date-picker').setAttribute('max', maxDateStr);

  // Slots availability per date (100 seats for each date)
  var slotsPerDay = {};

  for (var d = new Date(today); d <= maxDate; d.setDate(d.getDate() + 1)) {
    var dateStr = d.getFullYear() + '-' + String(d.getMonth() + 1).padStart(2, '0') + '-' + String(d.getDate()).padStart(2, '0');
    slotsPerDay[dateStr] = 100; // Set 100 slots for each date
  }

  // Handle date selection
  document.getElementById('date-picker').addEventListener('change', function() {
    var selectedDate = this.value;
    if (slotsPerDay[selectedDate] > 0) {
      slotsPerDay[selectedDate]--;
      updateAvailableSeats(selectedDate);
    } else {
      alert('No seats available for this date.');
    }
  });

  function updateAvailableSeats(date) {
    //document.getElementById('available-seats').textContent = 'Available seats for ' + date + ': ' + slotsPerDay[date];
    if (slotsPerDay[date]) {
      document.getElementById('available-seats').textContent = 'Available seats for ' + date + ': ' + slotsPerDay[date];
    } else {
      document.getElementById('available-seats').textContent = 'no seats available  for this date.';
    }
  }

  // Automatically update available seats on page load
  document.getElementById('date-picker').addEventListener('input', function() {
    var selectedDate = this.value;
    updateAvailableSeats(selectedDate);
  });
</script> -->


<script>
  var today = new Date();
  today.setHours(0, 0, 0, 0);

  var slotsPerDay = {};
  var maxDate = new Date(today);
  maxDate.setDate(today.getDate() + 360);

  for (var d = new Date(today); d <= maxDate; d.setDate(d.getDate() + 1)) {
    var dateStr = d.getFullYear() + '-' + String(d.getMonth() + 1).padStart(2, '0') + '-' + String(d.getDate()).padStart(2, '0');
    slotsPerDay[dateStr] = 100;
  }

  var currentMonth = new Date(today.getFullYear(), today.getMonth(), 1);

  function generateCalendar() {
    var calendarContainer = document.getElementById('calendar');
    calendarContainer.innerHTML = '';

    var firstDay = new Date(currentMonth.getFullYear(), currentMonth.getMonth(), 1);
    var lastDay = new Date(currentMonth.getFullYear(), currentMonth.getMonth() + 1, 0);
    var startDate = new Date(firstDay);
    startDate.setDate(firstDay.getDate() - firstDay.getDay());

    for (var d = startDate; d <= lastDay; d.setDate(d.getDate() + 1)) {
      var dateStr = d.getFullYear() + '-' + String(d.getMonth() + 1).padStart(2, '0') + '-' + String(d.getDate()).padStart(2, '0');
      var dayElement = document.createElement('div');
      dayElement.classList.add('day');

      if (d < today || slotsPerDay[dateStr] === 0) {
        dayElement.classList.add('disabled');
      }

      dayElement.innerHTML = `<div>${d.getDate()}/${d.getMonth() + 1}</div><div class="seats">${slotsPerDay[dateStr] || 0} seats</div>`;
      dayElement.dataset.date = dateStr;

      if (!dayElement.classList.contains('disabled')) {
        dayElement.addEventListener('click', function() {
          selectDate(this.dataset.date);
        });
      }

      calendarContainer.appendChild(dayElement);
    }

    document.getElementById('month-year').textContent = `${currentMonth.toLocaleString('default', { month: 'long' })} ${currentMonth.getFullYear()}`;
  }

  function selectDate(selectedDate) {
    if (slotsPerDay[selectedDate] > 0) {
      slotsPerDay[selectedDate]--;
      updateAvailableSeats(selectedDate);
      document.getElementById('selected-date').value = selectedDate;
      generateCalendar();
    } else {
      alert('No seats available for this date.');
    }
  }

  function updateAvailableSeats(date) {
    document.getElementById('available-seats').textContent = 'Available seats for ' + date + ': ' + slotsPerDay[date];
  }

  document.getElementById('prev-month').addEventListener('click', function() {
    currentMonth.setMonth(currentMonth.getMonth() - 1);
    generateCalendar();
  });

  document.getElementById('next-month').addEventListener('click', function() {
    currentMonth.setMonth(currentMonth.getMonth() + 1);
    generateCalendar();
  });

  generateCalendar();
</script>