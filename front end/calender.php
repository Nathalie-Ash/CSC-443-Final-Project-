<?php require_once("common/menu.php"); ?>
<html>

<head>
    <!-- Include only one instance of jQuery -->
    <script src="../https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script type="text/javascript" src="../backEnd/controls.js"></script>
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" integrity="sha256-H2WlGQkSoP4A18b3ZFIX2RIm53z/5GqMW+Z3LwvRitY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="../https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
                                                <div class="btn-group"><button type="button" title="Previous week" aria-pressed="false" class="fc-prev-button btn btn-primary"><span class="fa fa-chevron-left"></span></button><button type="button" title="Next week" aria-pressed="false" class="fc-next-button btn btn-primary"><span class="fa fa-chevron-right"></span></button></div><button type="button" title="This week" aria-pressed="false" class="fc-today-button btn btn-primary" disabled="">today</button>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <h2 class="fc-toolbar-title" id="fc-dom-1">Dec 17 – 23, 2023</h2>
                                            </div>
                                            <div class="fc-toolbar-chunk">
                                                <div class="btn-group"><button type="button" title="month view" aria-pressed="false" class="fc-dayGridMonth-button btn btn-primary">month</button><button type="button" title="week view" aria-pressed="true" class="fc-timeGridWeek-button btn btn-primary active">week</button><button type="button" title="day view" aria-pressed="false" class="fc-timeGridDay-button btn btn-primary">day</button></div>
                                            </div>
                                        </div>
                                        <div aria-labelledby="fc-dom-1" class="fc-view-harness fc-view-harness-active" style="height: 583.704px;">
                                            <div class="fc-timegrid fc-timeGridWeek-view fc-view">
                                                <table role="grid" class="fc-scrollgrid table-bordered fc-scrollgrid-liquid">
                                                    <thead role="rowgroup">
                                                        <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                            <th role="presentation">
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: hidden scroll;">
                                                                        <table role="presentation" class="fc-col-header " style="width: 769px;">
                                                                            <colgroup>
                                                                                <col style="width: 56px;">
                                                                            </colgroup>
                                                                            <thead role="presentation">
                                                                                <tr role="row">
                                                                                    <th aria-hidden="true" class="fc-timegrid-axis">
                                                                                        <div class="fc-timegrid-axis-frame"></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sun fc-day-past" data-date="2023-12-17">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 17, 2023">Sun 12/17</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-mon fc-day-past" data-date="2023-12-18">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 18, 2023">Mon 12/18</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-tue fc-day-past" data-date="2023-12-19">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 19, 2023">Tue 12/19</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-wed fc-day-past" data-date="2023-12-20">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 20, 2023">Wed 12/20</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-thu fc-day-today " data-date="2023-12-21">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 21, 2023">Thu 12/21</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-fri fc-day-future" data-date="2023-12-22">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 22, 2023">Fri 12/22</a></div>
                                                                                    </th>
                                                                                    <th role="columnheader" class="fc-col-header-cell fc-day fc-day-sat fc-day-future" data-date="2023-12-23">
                                                                                        <div class="fc-scrollgrid-sync-inner"><a class="fc-col-header-cell-cushion " aria-label="December 23, 2023">Sat 12/23</a></div>
                                                                                    </th>
                                                                                </tr>
                                                                            </thead>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody role="rowgroup">
                                                        <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body ">
                                                            <td role="presentation">
                                                                <div class="fc-scroller-harness">
                                                                    <div class="fc-scroller" style="overflow: hidden scroll;">
                                                                        <div class="fc-daygrid-body fc-daygrid-body-unbalanced fc-daygrid-body-natural" style="width: 769px;">
                                                                            <table role="presentation" class="fc-scrollgrid-sync-table" style="width: 769px;">
                                                                                <colgroup>
                                                                                    <col style="width: 56px;">
                                                                                </colgroup>
                                                                                <tbody role="presentation">
                                                                                    <tr role="row">
                                                                                        <td aria-hidden="true" class="fc-timegrid-axis fc-scrollgrid-shrink">
                                                                                            <div class="fc-timegrid-axis-frame fc-scrollgrid-shrink-frame fc-timegrid-axis-frame-liquid"><span class="fc-timegrid-axis-cushion fc-scrollgrid-shrink-cushion fc-scrollgrid-sync-inner">all-day</span></div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sun fc-day-past" data-date="2023-12-17">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-mon fc-day-past" data-date="2023-12-18">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-tue fc-day-past" data-date="2023-12-19">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-wed fc-day-past" data-date="2023-12-20">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-thu fc-day-today " data-date="2023-12-21">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-fri fc-day-future" data-date="2023-12-22">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                        <td role="gridcell" class="fc-daygrid-day fc-day fc-day-sat fc-day-future" data-date="2023-12-23">
                                                                                            <div class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                <div class="fc-daygrid-day-events">
                                                                                                    <div class="fc-daygrid-day-bottom" style="margin-top: 0px;"></div>
                                                                                                </div>
                                                                                                <div class="fc-daygrid-day-bg"></div>
                                                                                            </div>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr role="presentation" class="fc-scrollgrid-section">
                                                            <td class="fc-timegrid-divider table-active"></td>
                                                        </tr>
                                                        <tr role="presentation" class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                            <td role="presentation">
                                                                <div class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                    <div class="fc-scroller fc-scroller-liquid-absolute" style="overflow: hidden scroll;">
                                                                        <div class="fc-timegrid-body" style="width: 769px;">
                                                                            <div class="fc-timegrid-slots">
                                                                                <table aria-hidden="true" class="table-bordered" style="width: 769px;">
                                                                                    <colgroup>
                                                                                        <col style="width: 56px;">
                                                                                    </colgroup>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="00:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="00:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="00:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="00:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="01:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="01:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="01:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="01:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="02:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="02:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="02:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="02:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="03:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="03:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="03:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="03:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="04:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="04:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="04:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="04:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="05:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="05:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="05:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="05:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="06:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="06:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="06:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="06:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="07:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="07:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="07:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="07:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="08:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="08:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="08:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="08:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="09:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="09:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="09:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="09:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="10:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="10:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="10:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="10:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="11:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11am</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="11:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="11:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="11:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="12:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">12pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="12:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="12:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="12:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="13:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">1pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="13:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="13:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="13:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="14:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">2pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="14:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="14:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="14:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="15:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">3pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="15:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="15:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="15:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="16:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">4pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="16:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="16:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="16:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="17:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">5pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="17:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="17:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="17:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="18:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">6pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="18:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="18:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="18:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="19:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">7pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="19:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="19:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="19:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="20:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">8pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="20:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="20:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="20:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="21:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">9pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="21:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="21:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="21:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="22:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">10pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="22:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="22:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="22:30:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-scrollgrid-shrink" data-time="23:00:00">
                                                                                                <div class="fc-timegrid-slot-label-frame fc-scrollgrid-shrink-frame">
                                                                                                    <div class="fc-timegrid-slot-label-cushion fc-scrollgrid-shrink-cushion">11pm</div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane " data-time="23:00:00"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-label fc-timegrid-slot-minor" data-time="23:30:00"></td>
                                                                                            <td class="fc-timegrid-slot fc-timegrid-slot-lane fc-timegrid-slot-minor" data-time="23:30:00"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-timegrid-cols">
                                                                                <table role="presentation" style="width: 769px;">
                                                                                    <colgroup>
                                                                                        <col style="width: 56px;">
                                                                                    </colgroup>
                                                                                    <tbody role="presentation">
                                                                                        <tr role="row">
                                                                                            <td aria-hidden="true" class="fc-timegrid-col fc-timegrid-axis">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-sun fc-day-past" data-date="2023-12-17">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events">
                                                                                                        <div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 0px 0% -1152px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-draggable fc-event-past" style="border-color: rgb(243, 156, 18); background-color: rgb(243, 156, 18);">
                                                                                                                <div class="fc-event-main">
                                                                                                                    <div class="fc-event-main-frame">
                                                                                                                        <div class="fc-event-title-container">
                                                                                                                            
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-mon fc-day-past" data-date="2023-12-18">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events">
                                                                                                        <div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 0px 0% -1152px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-draggable fc-event-resizable fc-event-end fc-event-past" style="border-color: rgb(243, 156, 18); background-color: rgb(243, 156, 18);">
                                                                                                                <div class="fc-event-main">
                                                                                                                    <div class="fc-event-main-frame">
                                                                                                                        <div class="fc-event-time">12:00</div>
                                                                                                                        <div class="fc-event-title-container">
                                                                                                                            <div class="fc-event-title fc-sticky">Long Event</div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-tue fc-day-past" data-date="2023-12-19">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-wed fc-day-past" data-date="2023-12-20">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-thu fc-day-today " data-date="2023-12-21">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events">
                                                                                                        <div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 504px 0% -552px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-future" style="border-color: rgb(0, 115, 183); background-color: rgb(0, 115, 183);">
                                                                                                                <div class="fc-event-main">
                                                                                                                    <div class="fc-event-main-frame">
                                                                                                                        <div class="fc-event-time">10:30</div>
                                                                                                                        <div class="fc-event-title-container">
                                                                                                                            <div class="fc-event-title fc-sticky">Meeting</div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                                            </a></div>
                                                                                                        <div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 576px 0% -672px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-future" style="border-color: rgb(0, 192, 239); background-color: rgb(0, 192, 239);">
                                                                                                                <div class="fc-event-main">
                                                                                                                    <div class="fc-event-main-frame">
                                                                                                                        <div class="fc-event-time">12:00 - 2:00</div>
                                                                                                                        <div class="fc-event-title-container">
                                                                                                                            <div class="fc-event-title fc-sticky">Lunch</div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-fri fc-day-future" data-date="2023-12-22">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events">
                                                                                                        <div class="fc-timegrid-event-harness fc-timegrid-event-harness-inset" style="inset: 912px 0% -1080px; z-index: 1;"><a class="fc-timegrid-event fc-v-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future" style="border-color: rgb(0, 166, 90); background-color: rgb(0, 166, 90);">
                                                                                                                <div class="fc-event-main">
                                                                                                                    <div class="fc-event-main-frame">
                                                                                                                        <div class="fc-event-time">7:00 - 10:30</div>
                                                                                                                        <div class="fc-event-title-container">
                                                                                                                            <div class="fc-event-title fc-sticky">Birthday Party</div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </div>
                                                                                                                <div class="fc-event-resizer fc-event-resizer-end"></div>
                                                                                                            </a></div>
                                                                                                    </div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                            <td role="gridcell" class="fc-timegrid-col fc-day fc-day-sat fc-day-future" data-date="2023-12-23">
                                                                                                <div class="fc-timegrid-col-frame">
                                                                                                    <div class="fc-timegrid-col-bg"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-col-events"></div>
                                                                                                    <div class="fc-timegrid-now-indicator-container"></div>
                                                                                                </div>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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



    <!-- jQuery -->
    <script src="../backEnd/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../backEnd/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../backEnd/adminlte.min.js"></script>
    <script src="../backEnd/jquery-ui.min.js"></script>


</body>

</html>