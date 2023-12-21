<?php require_once("common/menu.php"); ?>
<html>

<head>
    <!-- Include only one instance of jQuery -->
    <script src="../https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../backEnd/controls.js"></script>

    <!-- Include necessary CSS files -->
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha256-H2WlGQkSoP4A18b3ZFIX2RIm53z/5GqMW+Z3LwvRitY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adminlte.min.css">
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha256-rfP5FL5P6hME2eVpPBO3j1mAj7jJ4ca4DgS2+t7fjTM=" crossorigin="anonymous"></script>
    <script src="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js" integrity="sha256-KJ3o98hA46wLVhnLZM3eT9z6/z5fDp+T0a6Zcf7xkCI=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/main.css">
    <link href="../https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins&display=swap" rel="stylesheet">
    <script src="../https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="../backEnd/jquery.min.js"></script>
    <script src="../backEnd/bootstrap.bundle.min.js"></script>
    <script src="../backEnd/jquery-ui.min.js"></script>
    <script src="../backEnd/moment.min.js"></script>
    <script src="../backEnd/main.min.js"></script>
    <script src="../backEnd/main.js"></script>
    <script src="../BE/calenderControl.js"></script>

</head>

<body>
    <div class="wrapper">

        <section id="feature">
            <div class="title-text">
                <p>Calender</p>
                <h1>Book Online</h1>
            </div>
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
                                            <div class="external-event bg-success">Hair Styling</div>
                                            <div class="external-event bg-warning">Hair Cut</div>
                                            <div class="external-event bg-info">Beard Trimming</div>
                                            <div class="external-event bg-danger">Dry Shampoo</div>
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
                                    <div id="calendar" class="fc fc-media-screen fc-direction-ltr fc-theme-bootstrap">
                                        <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                            <div class="fc-toolbar-chunk">
                                                <div class="btn-group"><button type="button" title="Previous week" aria-pressed="false" class="fc-prev-button btn btn-primary"><span class="fab fa-chevron-left"></span></button><button type="button" title="Next week" aria-pressed="false" class="fc-next-button btn btn-primary"><span class="fa fa-chevron-right"></span></button></div><button type="button" title="This week" aria-pressed="false" class="fc-today-button btn btn-primary" disabled="">today</button>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <h2 class="fc-toolbar-title" id="fc-dom-1">Dec 17 – 23, 2023</h2>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <div class="btn-group"><button type="button" title="month view" aria-pressed="false" class="fc-dayGridMonth-button btn btn-primary">month</button><button type="button" title="week view" aria-pressed="true" class="fc-timeGridWeek-button btn btn-primary active">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button btn btn-primary">day</button></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
    </div>

    <script src="../backEnd/jquery.min.js"></script>
    <script src="../backEnd/bootstrap.bundle.min.js"></script>
    <script src="../backEnd/adminlte.min.js"></script>
    <script src="../backEnd/jquery-ui.min.js"></script>


</body>

</html>