<?php
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>PRSS</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="css/app.v1.css" type="text/css"/>
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script> <![endif]--></head>
<body class="">
<section class="vbox">
    <header class="bg-white header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside-md dk"><a class="btn btn-link visible-xs"
                                                  data-toggle="class:nav-off-screen,open" data-target="#nav,html"> <i
                class="fa fa-bars"></i> </a> <a href="Homepage.php" class="navbar-brand"> <img src="images/logo.png"
                                                                                               class="m-r-sm" alt="scale">
            <span class="hidden-nav-xs">PRSS</span> </a> <a class="btn btn-link visible-xs" data-toggle="dropdown"
                                                             data-target=".user"> <i class="fa fa-cog"></i> </a></div>
        <ul class="nav navbar-nav hidden-xs">
            <li class="dropdown"><a href="Homepage.php" class="dropdown-toggle" data-toggle="dropdown"> <i
                    class="i i-grid"></i> </a>

            </li>
        </ul>
        <form class="navbar-form navbar-left input-s-lg m-t m-l-n-xs hidden-xs" role="search">
            <div class="form-group">
                <div class="input-group"><span class="input-group-btn"> <button type="submit"
                                                                                class="btn btn-sm bg-white b-white btn-icon"><i
                        class="fa fa-search"></i></button> </span> <input type="text"
                                                                          class="form-control input-sm no-border"
                                                                          placeholder="Search apps, projects..."></div>
            </div>
        </form>

    </header>

    <section>
        <section class="hbox stretch"> <!-- .aside -->
            <aside class="bg-black aside-md hidden-print hidden-xs" id="nav">
                <section class="vbox">
                    <section class="w-f scrollable">
                        <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0"
                             data-size="10px" data-railOpacity="0.2">
                            <div class="clearfix wrapper dk nav-user hidden-xs">
                                <div class="dropdown"><a href="index.html#" class="dropdown-toggle"
                                                         data-toggle="dropdown"> <span
                                        class="thumb avatar pull-left m-r"> <img src="images/faces6.jpeg" class="dker"
                                                                                 alt="..."> <i
                                        class="on md b-black"></i> </span> <span class="hidden-nav-xs clear"> <span
                                        class="block m-t-xs"> <strong class="font-bold text-lt">Constantine Kirwanda MD</strong> <b
                                        class="caret"></b> </span> <span
                                        class="text-muted text-xs block">Surgeon</span> </span> </a>

                                </div>
                            </div> <!-- nav -->
                            <nav class="nav-primary hidden-xs">
                                <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Main Menu</div>
                                <ul class="nav nav-main" data-ride="collapse">
                                    <li class="active"><a href="mymessages.php" class="auto"> <i
                                            class="i i-statistics icon"> </i> <span class="font-bold">My Messages</span>
                                    </a></li>

                                    <li><a href="Addusers.php" class="auto"> <span class="pull-right text-muted"> <i
                                            class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span>
                                        <i class="i i-lab icon"> </i> <span class="font-bold">Users</span> </a>

                                    </li>

                                </ul>
                                <div class="line dk hidden-nav-xs"></div>

                            </nav> <!-- / nav --> </div>
                    </section>
                    <footer class="footer hidden-xs no-padder text-center-nav-xs"><a href="modal.lockme.html"
                                                                                     data-toggle="ajaxModal"
                                                                                     class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs">
                        <i class="i i-logout"></i> </a> <a href="index.html#nav" data-toggle="class:nav-xs"
                                                           class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs">
                        <i class="i i-circleleft text"></i> <i class="i i-circleright text-active"></i> </a></footer>
                </section>
            </aside> <!-- /.aside -->
            <section id="content">
                <section class="hbox stretch">
                    <section>
                        <section class="vbox">
                            <section class="scrollable padder">
                                <section class="row m-b-md">
                                    <div class="col-sm-6"><h3 class="m-b-xs text-black">Dashboard</h3>
                                        <small>Welcome back, Mr Constantine, <i
                                                class="fa fa-map-marker fa-lg text-primary"></i> Muhimbili,Dar es Salaam
                                        </small>
                                    </div>
                            </section>
                                                <!--<div class="m-b-md"><h3 class="m-b-none">Datatable</h3></div>-->
                            <section class="panel panel-default">
                                <header class="panel-heading"> DataTables <i class="fa fa-info-sign text-muted"
                                                                             data-toggle="tooltip" data-placement="bottom"
                                                                             data-title="ajax to load the data."></i>
                                </header>
                                <div class="table-responsive">
                                    <table class="table table-striped m-b-none" data-ride="datatables">
                                        <thead>
                                        <tr>
                                            <th width="20%">Patient Name</th>
                                            <th width="20%">Patient Number</th>
                                            <th width="15%">Age</th>
                                            <th width="15%">Hospital</th>
                                            <th width="15%">Blood Group</th>
                                            <th width="15">Allergies</th>
                                        </tr>
                                        <tr>
                                            <td>Sharon Frank</td>
                                            <td>
                                                023425
                                            </td>
                                            <td>18</td>
                                            <td>AAR</td>
                                            <td>B</td>
                                            <td>Sulphur,Manganese</td>
                                        </tr>
                                        <tr>
                                            <td>Lucas James</td>
                                            <td>342552
                                            </td>
                                            <td>34</td>
                                            <td>Muhimbili</td>
                                            <td>A</td>
                                            <td>Sulphur,iron</td>
                                        </tr>
                                        <tr>
                                            <td>Daniel Reily</td>
                                            <td>
3453453
                                            </td>
                                            <td>23</td>
                                            <td>Regency</td>
                                            <td>O</td>
                                            <td>None</td>
                                        </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </section>

                                </section>
                            </section>
                        </section>
                    </section>
                </section>
            </section>
        </section>
        </section>
    </section>
    </section>

<script src="js/app.v1.js"></script> <!-- datatables -->
<script src="js/datatables/jquery.dataTables.min.js"></script>
<script src="js/datatables/demo.js"></script>
<script src="js/app.plugin.js"></script>
</body>
</html>