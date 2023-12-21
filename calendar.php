<html>
<head>
    <title>Barber Shop Website Design - Easy Tutorials</title>
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha256-H2WlGQkSoP4A18b3ZFIX2RIm53z/5GqMW+Z3LwvRitY=" crossorigin="anonymous" />
    <script src="../https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI/t1iPiV6sc8ekoU5fZWfZ0MjkF+r6Zl+E/3HE4=" crossorigin="anonymous"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha256-rfP5FL5P6hME2eVpPBO3j1mAj7jJ4ca4DgS2+t7fjTM=" crossorigin="anonymous"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha256-KJ3o98hA46wLVhnLZM3eT9z6/z5fDp+T0a6Zcf7xkCI=" crossorigin="anonymous"></script>


    <!-- Include AdminLTE CSS -->
    <link rel="stylesheet" href="../AdminLTE-3.2.0/dist/css/adminlte.min.css">

    <!-- Include FullCalendar CSS -->
    <link rel="stylesheet" href="../AdminLTE-3.2.0/plugins/fullcalendar/main.css">

    <!-- Include dependencies (jQuery, Moment.js, FullCalendar) -->
    <script src="../AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
    <script src="../AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
    <script src="../AdminLTE-3.2.0/plugins/fullcalendar/main.min.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../Downloads/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="../../Downloads/AdminLTE-3.2.0/plugins/fullcalendar/main.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../Downloads/AdminLTE-3.2.0/dist/css/adminlte.min.css">
    <!-- Include jQuery -->
    <script src="../https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- Include jQuery UI for draggable functionality -->
    <script src="../https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

    <!-- Include FullCalendar -->
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name ="viewport" content="width = device-width, initial-scale = 1">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel = "stylesheet">
    <script src="../https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>
<body>
<div id="sideNav">
    <nav>
        <ul>
            <li><a href ="#banner">Home</a></li>
            <li><a href ="#feature">Features</a></li>
            <li><a href ="#service">Services</a></li>
            <li><a href ="#testimonial">Testimonials</a></li>
            <li><a href ="#calendar1">Calendar</a></li>
            <li><a href ="#footer">Meet Us</a></li>
        </ul>

    </nav>
</div>

<div id ="menuBtn">
    <img src = "Barber_Shop_img/menu.png" id ="menu">
</div>
<section id="calendar1">
    <div class="title-text">
        <p>Calendar</p>
        <h1>Events</h1>
    </div>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Calendar</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Calendar</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="sticky-top mb-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Draggable Events</h4>
                                </div>
                                <div class="card-body">
                                    <!-- the events -->
                                    <div id="external-events">
                                        <div class="external-event bg-success">Lunch</div>
                                        <div class="external-event bg-warning">Go home</div>
                                        <div class="external-event bg-info">Do homework</div>
                                        <div class="external-event bg-primary">Work on UI design</div>
                                        <div class="external-event bg-danger">Sleep tight</div>
                                        <div class="checkbox">
                                            <label for="drop-remove">
                                                <input type="checkbox" id="drop-remove">
                                                remove after drop
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Create Event</h3>
                                </div>
                                <div class="card-body">
                                    <div class="btn-group" style="width: 100%; margin-bottom: 10px;">
                                        <ul class="fc-color-picker" id="color-chooser">
                                            <li><a class="text-primary" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-warning" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-success" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-danger" href="#"><i class="fas fa-square"></i></a></li>
                                            <li><a class="text-muted" href="#"><i class="fas fa-square"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- /btn-group -->
                                    <div class="input-group">
                                        <input id="new-event" type="text" class="form-control" placeholder="Event Title">

                                        <div class="input-group-append">
                                            <button id="add-new-event" type="button" class="btn btn-primary">Add</button>
                                        </div>
                                        <!-- /btn-group -->
                                    </div>
                                    <!-- /input-group -->
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-body p-0">
                                <!-- THE CALENDAR -->
                                <div id="calendar"></div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
</section>

<!-- Include AdminLTE JS -->
<script src="../AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>

<!-- Initialize FullCalendar -->
<script>
    $(document).ready(function () {
        var Calendar = FullCalendar.Calendar;
        var calendarEl = document.getElementById('calendar');
        var calendar = new Calendar(calendarEl, {
            // Your FullCalendar options go here
            // For example:
            initialView: 'dayGridMonth',
            events: [
                // Your events go here
                // Example event:
                {
                    title: 'Event 1',
                    start: '2023-12-12'
                }
            ]
        });
        calendar.render();
    });
</script>
<!-- jQuery -->
<script src="../../Downloads/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../Downloads/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jQuery UI -->
<script src="../../Downloads/AdminLTE-3.2.0/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- AdminLTE App -->
<script src="../../Downloads/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="../../Downloads/AdminLTE-3.2.0/plugins/moment/moment.min.js"></script>
<script src="../../Downloads/AdminLTE-3.2.0/plugins/fullcalendar/main.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../Downloads/AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Page specific script -->
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/main.min.js"></script>
<script>
    $(function () {

        /* initialize the external events
         -----------------------------------------------------------------*/
        function ini_events(ele) {
            ele.each(function () {

                // create an Event Object (https://fullcalendar.io/docs/event-object)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                }

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject)

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0  //  original position after the drag
                })

            })
        }

        ini_events($('#external-events div.external-event'))

        /* initialize the calendar
         -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()

        var Calendar = FullCalendar.Calendar;
        var Draggable = FullCalendar.Draggable;

        var containerEl = document.getElementById('external-events');
        var checkbox = document.getElementById('drop-remove');
        var calendarEl = document.getElementById('calendar');

        // initialize the external events
        // -----------------------------------------------------------------

        new Draggable(containerEl, {
            itemSelector: '.external-event',
            eventData: function (eventEl) {
                return {
                    title: eventEl.innerText,
                    backgroundColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    borderColor: window.getComputedStyle(eventEl, null).getPropertyValue('background-color'),
                    textColor: window.getComputedStyle(eventEl, null).getPropertyValue('color'),
                };
            }
        });

        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            //Random default events
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: '#f56954', //red
                    borderColor: '#f56954', //red
                    allDay: true
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: '#f39c12', //yellow
                    borderColor: '#f39c12' //yellow
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: '#0073b7', //Blue
                    borderColor: '#0073b7' //Blue
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    backgroundColor: '#00c0ef', //Info (aqua)
                    borderColor: '#00c0ef' //Info (aqua)
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: '#00a65a', //Success (green)
                    borderColor: '#00a65a' //Success (green)
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'https://www.google.com/',
                    backgroundColor: '#3c8dbc', //Primary (light-blue)
                    borderColor: '#3c8dbc' //Primary (light-blue)
                }
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function (info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
        // $('#calendar').fullCalendar()

        /* ADDING EVENTS */
        var currColor = '#3c8dbc' //Red by default
        // Color chooser button
        $('#color-chooser > li > a').click(function (e) {
            e.preventDefault()
            // Save color
            currColor = $(this).css('color')
            // Add color effect to button
            $('#add-new-event').css({
                'background-color': currColor,
                'border-color': currColor
            })
        })
        $('#add-new-event').click(function (e) {
            e.preventDefault()
            // Get value and make sure it is not null
            var val = $('#new-event').val()
            if (val.length == 0) {
                return
            }

            // Create events
            function createEvent(title, color) {
                var event = $('<div />')
                event.css({
                    'background-color': currColor,
                    'border-color': currColor,
                    'color': '#fff'
                }).addClass('external-event')
                // Edit button
                var editButton = $('<button class="btn btn-sm btn-info edit-event">Edit</button>');
                editButton.on('click', function () {
                    // Add logic for editing the event (e.g., open a modal)
                    alert('Edit event: ' + title);
                });

                // Delete button
                var deleteButton = $('<button class="btn btn-sm btn-danger delete-event">Delete</button>');
                deleteButton.on('click', function () {
                    // Add logic for deleting the event
                    event.remove();
                });

                // Append title and buttons to the event
                event.append('<span class="event-title">' + title + '</span>');
                event.append(editButton);
                event.append(deleteButton);
                event.text(val);
                $('#external-events').prepend(event)

                // Add draggable funtionality
                ini_events(event)

                // Remove event from text input
                $('#new-event').val('')
            }

            // Initialize events when the DOM is ready
            $(document).ready(function () {
                // Add new event
                $('#add-new-event').on('click', function () {
                    var title = $('#new-event').val();
                    var color = $('#color-chooser li a.active').attr('class').replace('text-', '');

                    // Use AJAX to send data to the PHP script
                    $.ajax({
                        type: 'POST',
                        url: 'create_event.php', // Path to your PHP script
                        data: {
                            title: title,
                            color: color
                        },
                        success: function (response) {
                            // Handle the response from the server
                            var data = JSON.parse(response);
                            if (data.status === 'success') {
                                // Event created successfully
                                // You can update the calendar or show a success message
                                alert(data.message);
                            } else {
                                // Error in creating the event
                                alert(data.message);
                            }
                        },
                        error: function () {
                            // Handle AJAX errors
                            alert('Error connecting to the server');
                        }
                    });

                    // Reset input field
                    $('#new-event').val('');
                });
            });

        });
    });

</script>
<script src="../https://code.jquery.com/jquery-3.6.4.min.js"></script>
