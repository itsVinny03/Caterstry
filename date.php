<?php
// Assuming you have a MySQL database with a table named 'reservations'
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_admin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch reserved dates from the database
$sql = "SELECT date FROM tb_pending";
$result = $conn->query($sql);

$reservedDates = [];
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $reservedDates[] = $row['date']; // Change 'reserved_date' to 'date'
}

}

// Encode reserved dates as JSON and echo it
echo '<script>';
echo 'const reservedDates = ' . json_encode($reservedDates) . ';';
echo '</script>';

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <link rel="stylesheet" href="nav.css">
  <style>
    * {
      font-family: "Poppins", sans-serif;
    }

    body {
      width: 100%;
      height: 100vh;
      background-color: skyblue;
      display: grid;
      place-items: center;
    }

    .container {
      width: 770px;
      background-color: #fff;
    }

    .header {
      padding: 10px;
      display: flex;
      justify-content: space-between;
    }

    .header #month {
      color: #ff5252;
      font-size: 30px;
      font-weight: 600;
    }

    button {
      width: 75px;
      cursor: pointer;
      border: none;
      outline: none;
      padding: 5px;
      border-radius: 3px;
      color: white;
    }

    .header button {
      background-color: skyblue;
    }

    .weekdays {
      width: 100%;
      display: flex;
      background-color: #2f3640;
      font-size: 17px;
      color: #fff;
      font-weight: 500;
    }

    .weekdays div {
      width: 100px;
      padding: 10px;
      text-align: center;
      text-transform: uppercase;
    }

    #calendar {
      width: 100%;
      margin: auto;
      display: flex;
      flex-wrap: wrap;
    }

    .day {
      width: 100px;
      height: 100px;
      padding: 10px;
      cursor: pointer;
      margin: 5px;
      box-sizing: border-box;
      box-shadow: 0px 0px 3px #cbd4c2;
      color: #7f8fa6;
      font-weight: 500;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .day:hover {
      background-color: rgba(112, 111, 211, 0.1);
      color: #706fd3;
    }

    #currentDay {
      background-color: #706fd3;
      color: #fff;
    }

    .event {
      font-size: 10px;
      padding: 3px;
      background-color: #3d3d3d;
      color: #fff;
      border-radius: 5px;
      max-height: 55px;
      overflow: hidden;
    }

    .event.holiday {
      background-color: palegreen;
      color: #3d3d3d;
    }

    .plain {
      cursor: default;
      box-shadow: none;
    }

    #modal {
      display: none;
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100vw;
      height: 100vh;
      z-index: 10;
      background-color: rgba(0, 0, 0, 0.8);
    }

    #addEvent,
    #viewEvent {
      display: none;
      width: 350px;
      background-color: #fff;
      padding: 25px;
      position: absolute;
      z-index: 20;
    }

    #addEvent h2,
    #viewEvent h2 {
      font-weight: 500;
      margin-bottom: 10px;
    }

    #txtTitle {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      margin-bottom: 25px;
      border-radius: 3px;
      outline: none;
      border: 1px solid #cbd4c2;
      font-size: 16px;
    }

    #btnSave {
      background-color: #2ed573;
    }

    .btnClose {
      background-color: #2f3542;
    }

    #viewEvent p {
      margin-bottom: 20px;
    }

    #btnDelete {
      background-color: #ea2027;
    }

    .error {
      border-color: #ea2027 !important;
    }

    .reserved-date {
      background-color: #ff0000; /* Set your desired background color for reserved dates */
      color: #ffffff; /* Set your desired text color for reserved dates */
      font-weight: bold; /* Set any additional styles for reserved dates */
    }
  </style>
</head>

<body>
 
  <div class="container">
    <div class="header">
      <div id="month"></div>
      <div>
        <button id="btnBack" onclick="navigateCalendar(-1)"><i class="fa fa-angle-left"></i></button>
        <button id="btnNext" onclick="navigateCalendar(1)"><i class="fa fa-angle-right"></i></button>
      </div>
    </div>
    <div class="weekdays">
      <div>Sun</div>
      <div>Mon</div>
      <div>Tue</div>
      <div>Wed</div>
      <div>Thu</div>
      <div>Fri</div>
      <div>Sat</div>
    </div>
    <div id="calendar"></div>
  </div>
  <div id="modal"></div>
  <div id="addEvent">
    <!-- No Add Event Form -->
  </div>

  <div id="viewEvent">
    <!-- No View Event Form -->
  </div>

  <script>

  document.addEventListener("DOMContentLoaded", function () {
  // ... Your existing JavaScript code ...

  for (let i = 1; i <= dayInMonth + emptyDays; i++) {
    const dayBox = document.createElement("div");
    dayBox.classList.add("day");
  
    // ... Your existing JavaScript code ...

    if (i > emptyDays) {
      dayBox.innerText = i - emptyDays;

      const dateText = `${dateVal}-${monthVal}-${year}`;

      // Highlight the selected date
      if (dateText === selectedDate) {
        dayBox.classList.add("selected-date"); // You can define a CSS class for styling the selected date
      }

      // Check if the date is reserved and highlight it
      if (reservedDates.includes(dateText)) {
        dayBox.classList.add("reserved-date"); // You can define a CSS class for styling the reserved date
      }
    }
  }
})
    const holidays = [
      {
        hdate: "01-01-2023",
        holiday: "New Year Day",
      },
      {
            hdate: "15-01-2023",
            holiday: "Pongal",
          },
          {
            hdate: "16-01-2023",
            holiday: "Thiruvalluvar Day",
          },
          {
            hdate: "17-01-2023",
            holiday: "Uzhavar Thirunal",
          },
          {
            hdate: "26-01-2023",
            holiday: "Republic Day",
          },
          {
            hdate: "05-02-2023",
            holiday: "Thai Poosam",
          },
          {
            hdate: "22-03-2023",
            holiday: "Telugu New Year Day",
          },
          {
            hdate: "01-04-2023",
            holiday: "Annual closing of Accounts for Commercial Banks and Co-operative Banks",
          },
          {
            hdate: "04-04-2023",
            holiday: "Mahaveer Jayanthi",
          },
          {
            hdate: "07-04-2023",
            holiday: "Good Friday",
          },
          {
            hdate: "14-04-2023",
            holiday: "Tamil New Years Day and Dr.B.R.Ambedkars Birthday",
          },
          {
            hdate: "22-04-2023",
            holiday: "Ramzan (Idul Fitr)",
          },
          {
            hdate: "01-05-2023",
            holiday: "May Day",
          },
          {
            hdate: "29-06-2023",
            holiday: "Bakrid(Idul Azha)",
          },
          {
            hdate: "29-07-2023",
            holiday: "Muharram",
          },
          {
            hdate: "15-08-2023",
            holiday: "Independence Day",
          },
          {
            hdate: "06-09-2023",
            holiday: "Krishna Jayanthi",
          },
          {
            hdate: "17-09-2023",
            holiday: "Vinayakar Chathurthi",
          },
          {
            hdate: "28-09-2023",
            holiday: "Milad-un-Nabi",
          },
          {
            hdate: "02-10-2023",
            holiday: "Gandhi Jayanthi",
          },
          {
            hdate: "23-10-2023",
            holiday: "Ayutha Pooja",
          },
          {
            hdate: "24-10-2023",
            holiday: "Vijaya Dasami",
          },
          {
            hdate: "12-11-2023",
            holiday: "Deepavali",
          },
          {
            hdate: "25-12-2023",
            holiday: "Christmas",
          },
    ];

    const calendar = document.querySelector("#calendar");
    const monthBanner = document.querySelector("#month");
    let navigation = 0;
    const weekdays = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    let events = localStorage.getItem("events") ? JSON.parse(localStorage.getItem("events")) : [];

    function loadCalendar() {
      const dt = new Date();

      if (navigation != 0) {
        dt.setMonth(dt.getMonth() + navigation);
      }

      const day = dt.getDate();
      const month = dt.getMonth();
      const year = dt.getFullYear();
      monthBanner.innerText = `${dt.toLocaleDateString("en-us", {
        month: "long",
      })} ${year}`;
      calendar.innerHTML = "";
      const dayInMonth = new Date(year, month + 1, 0).getDate();
      const firstDayofMonth = new Date(year, month, 1);
      const dateText = firstDayofMonth.toLocaleDateString("en-us", {
        weekday: "long",
        year: "numeric",
        month: "numeric",
        day: "numeric",
      });

      const dayString = dateText.split(", ")[0];
      const emptyDays = weekdays.indexOf(dayString);

      for (let i = 1; i <= dayInMonth + emptyDays; i++) {
        const dayBox = document.createElement("div");
        dayBox.classList.add("day");
        const monthVal = month + 1 < 10 ? "0" + (month + 1) : month + 1;
        const dateVal = i - emptyDays < 10 ? "0" + (i - emptyDays) : i - emptyDays;
        const dateText = '${dateVal}-${monthVal}-${year}';

        if (i > emptyDays) {
          dayBox.innerText = i - emptyDays;

          const eventOfTheDay = events.find((e) => e.date == dateText);
          const holidayOfTheDay = holidays.find((e) => e.hdate == dateText);

          if (i - emptyDays === day && navigation == 0) {
            dayBox.id = "currentDay";
          }

          if (eventOfTheDay) {
            const eventDiv = document.createElement("div");
            eventDiv.classList.add("event");
            eventDiv.innerText = eventOfTheDay.title;
            dayBox.appendChild(eventDiv);
          }

          if (holidayOfTheDay) {
            const eventDiv = document.createElement("div");
            eventDiv.classList.add("event");
            eventDiv.classList.add("holiday");
            eventDiv.innerText = holidayOfTheDay.holiday;
            dayBox.appendChild(eventDiv);
          }

          dayBox.addEventListener("click", () => {
            showModal(dateText);
          });
        } else {
          dayBox.classList.add("plain");
        }

        calendar.append(dayBox);
      }
    }

    function navigateCalendar(direction) {
      navigation += direction;
      loadCalendar();
    }

    function showModal(dateText) {
      // No modal for viewing or adding events
    }
  
    loadCalendar();
  </script>
</body>

</html>