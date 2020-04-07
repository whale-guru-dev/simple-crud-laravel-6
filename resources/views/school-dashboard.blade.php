@extends('layouts.main')

@section('css')
    <!-- Libs -->
    <link rel="stylesheet" href="assets/libs/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/libs/fullcalendar/fullcalendar.css">
@endsection

@section('content')
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x" id="layout-navbar">

            <!-- Brand demo (see assets/css/demo/demo.css) -->
            <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="assets/img/logo-dark.png" alt="Brand Logo" class="img-fluid">
                        </span>
                <span class="app-brand-text demo font-weight-normal ml-2">Empire</span>
            </a>

            <!-- Sidenav toggle (see assets/css/demo/demo.css) -->
            <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                    <i class="ion ion-md-menu text-large align-middle"></i>
                </a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                <!-- Divider -->
                <hr class="d-lg-none w-100 my-2">

                <div class="navbar-nav align-items-lg-center">
                    <!-- Search -->
                    <label class="nav-item navbar-text navbar-search-box p-0 active">
                        <i class="feather icon-search navbar-icon align-middle"></i>
                        <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                    </label>
                </div>

                <div class="navbar-nav align-items-lg-center ml-auto">
                    <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="feather icon-bell navbar-icon align-middle"></i>
                            <span class="badge badge-danger badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Notifications
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">Login from 192.168.1.1</div>
                                        <div class="text-light small mt-1">
                                            Aliquam ex eros, imperdiet vulputate hendrerit et.
                                        </div>
                                        <div class="text-light small mt-1">12h ago</div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-user-plus bg-primary border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">You have
                                            <strong>4</strong> new followers</div>
                                        <div class="text-light small mt-1">
                                            Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">Server restarted</div>
                                        <div class="text-light small mt-1">
                                            19h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                    <div class="media-body line-height-condenced ml-3">
                                        <div class="text-dark">99% server load</div>
                                        <div class="text-light small mt-1">
                                            Etiam nec fringilla magna. Donec mi metus.
                                        </div>
                                        <div class="text-light small mt-1">
                                            20h ago
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                        </div>
                    </div>

                    <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                        <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                            <i class="feather icon-mail navbar-icon align-middle"></i>
                            <span class="badge badge-success badge-dot indicator"></span>
                            <span class="d-lg-none align-middle">&nbsp; Messages</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="bg-primary text-center text-white font-weight-bold p-3">
                                4 New Messages
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="assets/img/avatars/6-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                        <div class="text-light small mt-1">
                                            Josephin Doe &nbsp;·&nbsp; 58m ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="assets/img/avatars/4-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                        <div class="text-light small mt-1">
                                            Lary Doe &nbsp;·&nbsp; 1h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="assets/img/avatars/5-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                        <div class="text-light small mt-1">
                                            Alice &nbsp;·&nbsp; 2h ago
                                        </div>
                                    </div>
                                </a>

                                <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                    <img src="assets/img/avatars/11-small.png" class="d-block ui-w-40 rounded-circle" alt>
                                    <div class="media-body ml-3">
                                        <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                        <div class="text-light small mt-1">
                                            Suzen &nbsp;·&nbsp; 5h ago
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                        </div>
                    </div>

                    <!-- Divider -->
                    <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                    <div class="demo-navbar-user nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">
                                        <img src="assets/img/avatars/1.png" alt class="d-block ui-w-30 rounded-circle">
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">Cindy Deitch</span>
                                    </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-user text-muted"></i> &nbsp; My profile</a>
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-mail text-muted"></i> &nbsp; Messages</a>
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-settings text-muted"></i> &nbsp; Account settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="javascript:" class="dropdown-item">
                                <i class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- [ Layout navbar ( Header ) ] End -->
        <!-- [ Layout content ] Start -->
        <div class="layout-content">
            <!-- [ content ] Start -->
            <div class="container-fluid flex-grow-1 container-p-y">
                <h4 class="font-weight-bold py-3 mb-0">School Dashboard</h4>
                <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#!">School</a></li>
                        <li class="breadcrumb-item active"><a href="#!">Dashboard</a></li>
                    </ol>
                </div>
                <div class="row">
                    <!-- customar project  start -->
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center m-l-0">
                                    <div class="col-auto">
                                        <i class="fas fa-user-graduate f-36 text-primary"></i>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Student</h6>
                                        <h2 class="m-b-0">45</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center m-l-0">
                                    <div class="col-auto">
                                        <i class="fas fa-users f-36 text-danger"></i>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Parents</h6>
                                        <h2 class="m-b-0">9</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center m-l-0">
                                    <div class="col-auto">
                                        <i class="fas fa-user-tie f-36 text-success"></i>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Teacher</h6>
                                        <h2 class="m-b-0">5</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center m-l-0">
                                    <div class="col-auto">
                                        <i class="fas fa-book-open f-36 text-warning"></i>
                                    </div>
                                    <div class="col-auto">
                                        <h6 class="text-muted m-b-10">Subject</h6>
                                        <h2 class="m-b-0">25</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- customar project  end -->
                    <!-- subscribe start -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Account summary</h5>
                            </div>
                            <div class="card-body">
                                <div id="summary-chart"></div>
                            </div>
                        </div>
                    </div>
                    <!-- subscribe end -->
                    <!-- Tasks start -->
                    <div class="col-xl-5 col-md-12">
                        <div class="card ui-task mb-4">
                            <h5 class="card-header">Notice</h5>
                            <div class="card-body">
                                <ul class="list-unstyled task-list">
                                    <li>
                                        <i class="feather icon-check f-w-600 task-icon bg-success"></i>
                                        <p class="m-b-5">8:50</p>
                                        <h6 class="text-muted">Your first semester Exam will held on <span class="text-c-blue">19-04-2018</span>.</h6>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-primary"></i>
                                        <p class="m-b-5">Sat, 5 Mar</p>
                                        <h6 class="text-muted">In your school campus on <span class="text-c-blue">1-03-2018</span> will held a program of <span class="text-c-blue">annual sports day</span>.You are all invited.</h6>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-danger"></i>
                                        <p class="m-b-5">Sun, 17 Feb</p>
                                        <h6 class="text-muted">Your second semester exam will held on 30-08-2018.Please be prepare for your exam</h6>
                                    </li>
                                    <li>
                                        <i class="task-icon bg-warning"></i>
                                        <p class="m-b-5">Sat, 18 Mar</p>
                                        <h6 class="text-muted">On <span class="text-c-blue">20-11-2018</span> will held a programming contest in school campus.Registration start from today. </h6>
                                    </li>
                                    <li class="pb-2 mb-0">
                                        <i class="task-icon bg-success"></i>
                                        <p class="m-b-5">Sat, 22 Mar</p>
                                        <h6 class="text-muted">Prize giving ceremony will held on <span class="text-c-blue">03-01-2019</span>.Best Student List published In your Website.</h6>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="card-body bg-primary">
                                <div id="absent-chart"></div>
                            </div>
                            <div class="card-footer">
                                <h6 class="text-muted m-b-30 m-t-15">Students Today's Attendance</h6>
                                <div class="row text-center">
                                    <div class="col-6 border-right">
                                        <h6 class="text-muted m-b-10">Total present student</h6>
                                        <h3 class="">175</h3>
                                    </div>
                                    <div class="col-6">
                                        <h6 class="text-muted m-b-10">Total absent student</h6>
                                        <h3 class="">76</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tasks end -->
                    <!-- subscribe start -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>Event List </h5>
                            </div>
                            <div class="card-body">
                                <div id='Eventcalendar' class='calendar'></div>
                            </div>
                        </div>
                    </div>
                    <!-- subscribe end -->
                </div>
            </div>
            <!-- [ content ] End -->
            <!-- [ Layout footer ] Start -->
            <nav class="layout-footer footer footer-light">
                <div class="container-fluid d-flex flex-wrap justify-content-between text-center container-p-x pb-3">
                    <div class="pt-3">
                        <span class="float-md-right d-none d-lg-block">&copy; Exclusive on Themeforest | Hand-crafted &amp; Made with <i class="fas fa-heart text-danger mr-2"></i></span>
                    </div>
                    <div>
                        <a href="javascript:" class="footer-link pt-3">About Us</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Help</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Contact</a>
                        <a href="javascript:" class="footer-link pt-3 ml-4">Terms &amp; Conditions</a>
                    </div>
                </div>
            </nav>
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection

@section('js')
    <!-- Libs -->
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="assets/libs/moment/moment.js"></script>
    <script src="assets/libs/fullcalendar/fullcalendar.js"></script>
    <!-- Demo -->
    <script src="assets/js/demo.js"></script>
    <script>
        // [ operation-processed ] start
        $(function() {
            var options = {
                chart: {
                    height: 250,
                    type: 'area',
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: 2,
                    curve: 'smooth'
                },
                colors: ["#FF4961", "#ff4a00"],
                fill: {
                    type: 'solid',
                    opacity: 0.2,
                },
                markers: {
                    size: 3,
                    opacity: 0.9,
                    colors: "#fff",
                    strokeColor: ["#FF4961", "#ff4a00"],
                    strokeWidth: 2,
                    hover: {
                        size: 7,
                    }
                },
                series: [{
                    name: 'Expense',
                    data: [40, 75, 20, 45, 30, 50, 30]
                }, {
                    name: 'Income',
                    data: [90, 40, 60, 20, 10, 0, 0]
                }],

                xaxis: {
                    type: 'datetime',
                    categories: ["2019\-01-19", "2019\-02-19", "2019\-03-19", "2019\-04-19", "2019\-05-19", "2019\-06-19", "2019\-07-19"],
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                }
            }
            var chart = new ApexCharts(
                document.querySelector("#summary-chart"),
                options
            );
            chart.render();
        });
        // [ operation-processed ] end
        // [ proj-earning ] start
        $(function() {
            var options = {
                chart: {
                    type: 'bar',
                    height: 310,
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false,
                    },
                },
                dataLabels: {
                    enabled: false,
                },
                colors: ["#fff"],
                plotOptions: {
                    bar: {
                        color: '#fff',
                        columnWidth: '60%',
                    }
                },
                fill: {
                    type: 'solid',
                    opacity: 1,
                },
                series: [{
                    data: [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54, 25, 66, 41, 89, 63, 54, 25, 66, 41, 89, 63, 25, 44, 12, 36]
                }],
                xaxis: {
                    crosshairs: {
                        width: 1
                    },
                    labels: {
                        show: false,
                    },
                },
                yaxis: {
                    labels: {
                        style: {
                            color: '#fff',
                        }
                    },
                },
                grid: {
                    borderColor: '#ffffff85',
                    padding: {
                        bottom: 0,
                        left: 10,
                    }
                },
                tooltip: {
                    fixed: {
                        enabled: false
                    },
                    x: {
                        show: false
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return 'Total absent'
                            }
                        }
                    },
                    marker: {
                        show: false
                    }
                }
            };
            var chart = new ApexCharts(document.querySelector("#absent-chart"), options);
            chart.render();
        });
        // [ proj-earning ] end
        // Full calendar
        $(function() {
            $(function() {
                var today = new Date();
                var y = today.getFullYear();
                var m = today.getMonth();
                var d = today.getDate();

                var eventList = [{
                    title: 'All Day Event',
                    start: new Date(y, m, d - 12)
                },
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d - 8),
                        end: new Date(y, m, d - 5),
                        className: 'fc-event-warning'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d - 6, 16, 0)
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: new Date(y, m, d + 1, 16, 0),
                        className: 'fc-event-success',
                    },
                    {
                        title: 'Conference',
                        start: new Date(y, m, d - 4),
                        end: new Date(y, m, d - 2),
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d - 3, 10, 30),
                        end: new Date(y, m, d - 3, 12, 30),
                        className: 'fc-event-danger'
                    },
                    {
                        title: 'Lunch',
                        start: new Date(y, m, d - 3, 12, 0),
                        className: 'fc-event-info'
                    },
                    {
                        title: 'Meeting',
                        start: new Date(y, m, d - 3, 14, 30),
                        className: 'fc-event-dark'
                    },
                    {
                        title: 'Happy Hour',
                        start: new Date(y, m, d - 3, 17, 30)
                    },
                    {
                        title: 'Dinner',
                        start: new Date(y, m, d - 3, 20, 0)
                    },
                    {
                        title: 'Birthday Party',
                        start: new Date(y, m, d - 2, 7, 0)
                    },
                    {
                        title: 'Background event',
                        start: new Date(y, m, d + 5),
                        end: new Date(y, m, d + 7),
                        rendering: 'background'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: new Date(y, m, d + 13)
                    }
                ];

                // Default view
                // color classes: [ fc-event-success | fc-event-info | fc-event-warning | fc-event-danger | fc-event-dark ]
                $('#Eventcalendar').fullCalendar({
                    // Bootstrap styling
                    themeSystem: 'bootstrap4',
                    bootstrapFontAwesome: {
                        close: ' ion ion-md-close',
                        prev: ' ion ion-ios-arrow-back scaleX--1-rtl',
                        next: ' ion ion-ios-arrow-forward scaleX--1-rtl',
                        prevYear: ' ion ion-ios-arrow-dropleft-circle scaleX--1-rtl',
                        nextYear: ' ion ion-ios-arrow-dropright-circle scaleX--1-rtl'
                    },

                    header: {
                        left: 'title',
                        center: 'month,agendaWeek,agendaDay',
                        right: 'prev,next today'
                    },

                    defaultDate: today,
                    navLinks: true, // can click day/week names to navigate views
                    selectable: true,
                    selectHelper: true,
                    weekNumbers: true, // Show week numbers
                    nowIndicator: true, // Show "now" indicator
                    firstDay: 1, // Set "Monday" as start of a week
                    businessHours: {
                        dow: [1, 2, 3, 4, 5], // Monday - Friday
                        start: '9:00',
                        end: '18:00',
                    },
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: eventList,
                    select: function(start, end) {
                        $('#fullcalendar-default-view-modal')
                            .on('shown.bs.modal', function() {
                                $(this).find('input[type="text"]').trigger('focus');
                            })
                            .on('hidden.bs.modal', function() {
                                $(this)
                                    .off('shown.bs.modal hidden.bs.modal submit')
                                    .find('input[type="text"], select').val('');
                                $('#fullcalendar-default-view').fullCalendar('unselect');
                            })
                            .on('submit', function(e) {
                                e.preventDefault();
                                var title = $(this).find('input[type="text"]').val();
                                var className = $(this).find('select').val() || null;

                                if (title) {
                                    var eventData = {
                                        title: title,
                                        start: start,
                                        end: end,
                                        className: className
                                    }
                                    $('#fullcalendar-default-view').fullCalendar('renderEvent', eventData, true);
                                }

                                $(this).modal('hide');
                            })
                            .modal('show');
                    },
                    eventClick: function(calEvent, jsEvent, view) {
                        alert('Event: ' + calEvent.title);
                    }
                });

                // List view
                // color classes: [ fc-event-success | fc-event-info | fc-event-warning | fc-event-danger | fc-event-dark ]
                $('#fullcalendar-list-view').fullCalendar({
                    // Bootstrap styling
                    themeSystem: 'bootstrap4',
                    bootstrapFontAwesome: {
                        close: ' ion ion-md-close',
                        prev: ' ion ion-ios-arrow-back scaleX--1-rtl',
                        next: ' ion ion-ios-arrow-forward scaleX--1-rtl',
                        prevYear: ' ion ion-ios-arrow-dropleft-circle scaleX--1-rtl',
                        nextYear: ' ion ion-ios-arrow-dropright-circle scaleX--1-rtl'
                    },

                    header: {
                        left: 'title',
                        center: 'listDay,listWeek,month',
                        right: 'prev,next today'
                    },

                    // customize the button names,
                    views: {
                        listDay: {
                            buttonText: 'list day'
                        },
                        listWeek: {
                            buttonText: 'list week'
                        }
                    },

                    defaultView: 'listWeek',
                    defaultDate: today,
                    navLinks: true, // can click day/week names to navigate views
                    editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    events: eventList
                });
            });
        });
    </script>
@endsection