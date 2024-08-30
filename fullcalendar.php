<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Full Calendar in Forms</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script> 
</head>
<body>
    <h2><center>Occupied Dates</center></h2>
    <div class="container">
        <div id="calendar"></div>
    </div>
    <br>

    <!-- Your jQuery, Moment.js, FullCalendar script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

    <script>
        $(document).ready(function () {
            // Function to parse dates from the JSON response
            function parseDates(response) {
                var dates = [];
                if (response && response.dates) {
                    dates = response.dates;
                }
                return dates;
            }

            // Fetch reserved dates from the server
            $.ajax({
                url: 'forms/dates.php',
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    var dates = parseDates(response);

                    console.log('Fetched Dates:', dates);

                    // Initialize FullCalendar with dynamic events and dayRender callback
                    $('#calendar').fullCalendar({
                        header: {
                            left: 'month, agendaWeek, agendaDay, list',
                            center: 'title',
                            right: 'prev, today, next'
                        },
                        buttonText: {
                            today: 'Today',
                            month: 'Month',
                            week: 'Week',
                            day: 'Day',
                            list: 'List',
                        },
                        events: function (start, end, timezone, callback) {
                            // You can customize the date range as needed
                            var start_date = moment(start).format('YYYY-MM-DD');
                            var end_date = moment(end).format('YYYY-MM-DD');

                            // Filter events based on fetched dates
                            var filtered_dates = dates.filter(function (date) {
                                return date >= start_date && date <= end_date;
                            });

                            // Create events array
                            var events = filtered_dates.map(function (date) {
                                return {
                                    title: 'Occupied',
                                    start: date,
                                    color: 'red',
                                    textColor: 'white'
                                };
                            });

                            // Callback with the events array
                            callback(events);
                        },
                        dayRender: function (date, cell) {
                            var formattedDate = moment(date).format('YYYY-MM-DD');

                            console.log('Checking Date:', formattedDate);

                            if (dates.includes(formattedDate)) {
                                console.log("Date Found. Highlighting cell.");
                                cell.css('background-color', 'green');
                                cell.css('color', 'white');
                            } else {
                                console.log("Date not found.");
                            }
                        }
                    });
                },
                error: function () {
                    console.error('Error fetching reserved dates from the server.');
                }
            });
        });
    </script>

</body>
</html>
