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
    <header class="bg-black header header-md navbar navbar-fixed-top-xs box-shadow">
        <div class="navbar-header aside"><a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open"
                                            data-target="#nav,html"> <i class="fa fa-bars"></i> </a> <a
                href="index.php" class="navbar-brand"> <img src="images/logo.png" class="m-r-sm" alt="scale"> <span
                    class="hidden-nav-xs">PRSS</span> </a> <a class="btn btn-link visible-xs" data-toggle="dropdown"
                                                               data-target=".user"> <i class="fa fa-cog"></i> </a></div>
        <!--<ul class="nav navbar-nav hidden-xs">
            <li class="dropdown"><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="i i-grid"></i> </a>
                <section class="dropdown-menu aside-lg bg-white on animated fadeInLeft">
                    <div class="row m-l-none m-r-none m-t m-b text-center">
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-mail i-2x text-primary-lt"></i> </span>
                                    <small class="text-muted">Mailbox</small>
                                </a></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-calendar i-2x text-danger-lt"></i> </span>
                                    <small class="text-muted">Calendar</small>
                                </a></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-map i-2x text-success-lt"></i> </span>
                                    <small class="text-muted">Map</small>
                                </a></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-paperplane i-2x text-info-lt"></i> </span>
                                    <small class="text-muted">Trainning</small>
                                </a></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-images i-2x text-muted"></i> </span>
                                    <small class="text-muted">Photos</small>
                                </a></div>
                        </div>
                        <div class="col-xs-4">
                            <div class="padder-v"><a href="mail.html#"> <span class="m-b-xs block"> <i
                                            class="i i-clock i-2x text-warning-lter"></i> </span>
                                    <small class="text-muted">Timeline</small>
                                </a></div>
                        </div>
                    </div>
                </section>-->
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
        <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user user">
            <li class="hidden-xs"><a href="mail.html#" class="dropdown-toggle" data-toggle="dropdown"> <i
                        class="i i-chat3"></i> <span class="badge badge-sm up bg-danger count">2</span> </a>
                <section class="dropdown-menu aside-xl animated flipInY">
                    <section class="panel bg-white">
                        <div class="panel-heading b-light bg-light"><strong>You have <span class="count">2</span>
                                notifications</strong></div>
                        <div class="list-group list-group-alt"><a href="mail.html#" class="media list-group-item"> <span
                                    class="pull-left thumb-sm"> <img src="images/faces6.jpeg" alt="..."
                                                                     class="img-circle"> </span> <span
                                    class="media-body block m-b-none"><br> <small
                                        class="text-muted">10 minutes ago</small> </span> </a> <a href="mail.html#"
                                                                                                  class="media list-group-item">
                                <span class="media-body block m-b-none"> 1.0 initial released<br> <small class="text-muted">1 hour ago</small> </span>
                            </a></div>
                        <div class="panel-footer text-sm"><a href="mail.html#" class="pull-right"><i
                                    class="fa fa-cog"></i></a> <a href="mail.html#notes"
                                                                  data-toggle="class:show animated fadeInRight">See all the
                                notifications</a></div>
                    </section>
                </section>
            </li>
            <li class="dropdown"><a href="mail.html#" class="dropdown-toggle" data-toggle="dropdown"> <span
                        class="thumb-sm avatar pull-left"> <img src="images/faces6.jpeg" alt="..."> </span>Constantine Kirwanda <b
                        class="caret"></b> </a>
                <ul class="dropdown-menu animated fadeInRight">
                    <li><span class="arrow top"></span> <a href="mail.html#">Settings</a></li>
                    <li><a href="profile.html">Profile</a></li>
                    <li><a href="mail.html#"> <span class="badge bg-danger pull-right">3</span> Notifications </a></li>
                    <li><a href="docs.html">Help</a></li>
                    <li class="divider"></li>
                    <li><a href="modal.lockme.html" data-toggle="ajaxModal">Logout</a></li>
                </ul>
            </li>
        </ul>
    </header>
    <section>
        <section class="hbox stretch"> <!-- .aside -->
            <aside class="aside bg-primary hidden-xs" id="nav">
                <section class="vbox">
                    <header class="header dker"><p class="h4 text-white">Mailbox</p></header>
                    <section class="w-f scrollable">
                        <div>
                            <div class="wrapper">
                                <button class="btn btn-sm btn-success btn-s-md m-t font-bold">Compose</button>
                            </div>
                            <div class="wrapper">
                                <ul class="nav nav-pills nav-stacked">
                                    <li class="active"><a href="mail.html#"> <span
                                                class="badge bg-info pull-right">5</span> <i class="fa fa-fw fa-inbox"></i>
                                            Inbox </a></li>
                                    <li><a href="mail.html#"> <i class="fa fa-fw fa-envelope-o"></i> Sent mail </a></li>
                                    <li><a href="mail.html#"> <span class="badge badge-empty pull-right">4</span> <i
                                                class="fa fa-fw fa-bookmark-o"></i> Important </a></li>
                                    <li><a href="mail.html#"> <i class="fa fa-fw fa-pencil"></i> Draft </a></li>
                                    <li><a href="mail.html#"> <span class="badge badge-empty pull-right">3</span> <i
                                                class="fa fa-fw fa-star-o"></i> Spam </a></li>
                                </ul>
                            </div>
                            <div class="line dk"></div>
                            <!--<div class="padder m-t">Labels</div>-->
                            <!--<ul class="nav nav-pills nav-stacked no-radius m-t-sm">
                                <li><a href="mail.html#"> <i
                                            class="fa fa-circle-o text-warning pull-right m-t-xs m-r-xs"></i> Work </a></li>
                                <li><a href="mail.html#"> <i class="fa fa-circle-o pull-right m-t-xs m-r-xs"></i>
                                        Private </a></li>
                                <li><a href="mail.html#"> <i
                                            class="fa fa-circle-o text-success pull-right m-t-xs m-r-xs"></i> Clients </a>
                                </li>
                            </ul>-->
                        </div>
                    </section>
                    <footer class="footer dker hidden-xs text-center"><a href="mail.html#chat"
                                                                         class="inline wrapper animated "
                                                                         data-toggle="class:hide"><i
                                class="i i-chat3"></i></a></footer>
                </section>
            </aside> <!-- /.aside -->
            <section>
                <section class="hbox stretch"> <!-- .aside -->
                    <aside class="aside-lg" id="email-list">
                        <section class="vbox">
                            <header class="dker header clearfix">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-sm btn-bg btn-default"><i
                                            class="fa fa-chevron-left"></i></button>
                                    <button type="button" class="btn btn-sm btn-bg btn-default"><i
                                            class="fa fa-chevron-right"></i></button>
                                </div>
                                <div class="btn-toolbar">
                                    <div class="btn-group select">
                                        <button class="btn btn-default btn-sm btn-bg dropdown-toggle"
                                                data-toggle="dropdown"><span class="dropdown-label"
                                                                             style="width: 65px;">Filter</span> <span
                                                class="caret"></span></button>
                                        <ul class="dropdown-menu text-left text-sm">
                                            <li><a href="mail.html#">Read</a></li>
                                            <li><a href="mail.html#">Unread</a></li>
                                            <li><a href="mail.html#">Starred</a></li>
                                            <li><a href="mail.html#">Unstarred</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-bg btn-default" data-toggle="tooltip"
                                                data-placement="bottom" data-title="Refresh"><i
                                                class="fa fa-refresh"></i></button>
                                    </div>
                                </div>
                            </header>
                            <section class="scrollable hover w-f">
                                <ul class="list-group auto no-radius m-b-none m-t-n-xxs list-group-lg">
                                    <li class="list-group-item"><a href="mail.html#" class="thumb-sm pull-left m-r-sm">
                                            <img src="images/faces6.jpeg" class="img-circle"> </a> <a href="index.php"
                                                                                                 class="clear text-ellipsis">
                                            <small class="pull-right">3 minuts ago</small>
                                            <strong class="block">Eliah Mbwilo</strong>
                                            <small>About the cancer patient</small>
                                        </a></li>
                                    <li class="list-group-item"><a href="mail.html#" class="thumb-sm pull-left m-r-sm">
                                            <img src="images/faces6.jpeg" class="img-circle"> </a> <a href="index.php"
                                                                                                 class="clear text-ellipsis">
                                            <small class="pull-right">2 hours ago</small>
                                            <strong class="block">Trevor Noah</strong>
                                            <small>This is a prss presentation</small>
                                        </a></li>
                                    <li class="list-group-item"><a href="mail.html#" class="thumb-sm pull-left m-r-sm">
                                            <img src="images/faces6.jpeg" class="img-circle"> </a> <a href="index.php"
                                                                                                      class="clear text-ellipsis">
                                            <small class="pull-right">2 hours ago</small>
                                            <strong class="block">Kelvin Mbwilo</strong>
                                            <small>About UXD treatment</small>
                                        </a></li>
                                </ul>
                            </section>
                            <footer class="footer dk clearfix">
                                <form class="m-t-sm">
                                    <div class="input-group"><input type="text" class="input-sm form-control input-s-sm"
                                                                    placeholder="Search">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </footer>
                        </section>
                    </aside> <!-- /.aside --> <!-- .aside -->
                    <aside id="email-content" class="bg-light lter">
                        <section class="vbox">
                            <section class="scrollable">
                                <div class="wrapper dk clearfix"><a href="mail.html#" data-toggle="class"
                                                                    class="pull-left m-r-sm"><i
                                            class="fa fa-star-o fa-lg text"></i><i
                                            class="fa fa-star text-warning fa-lg text-active"></i></a> <h4 class="m-n">
                                        My messages</h4></div>
                                <div>
                                    <div class="block clearfix wrapper b-b"><a href="mail.html#"
                                                                               class="thumb-xs inline"><img
                                                src="images/faces6.jpeg" class="img-circle"></a> <span class="inline">Eliah Mbwilo &lt;eliahmbwilo7@gmail.com&gt; to me</span>
                                        <div class="pull-right inline">May 12 (<em>4 days ago</em>)
                                            <div class="btn-group">
                                                <button class="btn btn-default btn-xs" data-toggle="tooltip"
                                                        data-title="Reply"><i class="fa fa-reply"></i></button>
                                                <button class="btn btn-default btn-xs dropdown-toggle"
                                                        data-toggle="dropdown"><span class="caret"></span></button>
                                                <ul class="dropdown-menu pull-right">
                                                    <li><a href="mail.html#"><i class="fa fa-reply"></i> Reply</a></li>
                                                    <li><a href="mail.html#"><i class="fa fa-signout"></i> Forward</a>
                                                    </li>
                                                    <li><a href="mail.html#">Add Mika Sokeil to contact list</a></li>
                                                    <li><a href="mail.html#">Mark as unread</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="mail.html#">Delete this message</a></li>
                                                    <li><a href="mail.html#">Report spam</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wrapper"><p>Mr. Kirwanda</p>
                                        <p class="text-lt">This is about the cancer patient you sent to me last september.</p>
                                       <!-- <blockquote><em>Morbi nec nunc condimentum, egestas dui nec, fermentum diam.
                                                Vivamus vel tincidunt libero, vitae elementum ligula. Nunc placerat purus
                                                quam, ac adipiscing arcu rutrum eu. Vestibulum adipiscing ut augue ut
                                                auctor. Vestibulum nec lorem imperdiet nibh mollis gravida ut a
                                                justo.<br><br>Vestibulum ullamcorper sodales nisi nec condimentum. Mauris
                                                convallis mauris at pellentesque volutpat. Phasellus at ultricies neque,
                                                quis malesuada augue. Donec eleifend condimentum nisl eu consectetur.
                                                Integer eleifend, nisl venenatis consequat iaculis</em></blockquote>
                                        <div><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum
                                                ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at
                                                pellentesque volutpat. Phasellus at ultricies neque, quis malesuada augue.
                                                Donec eleifend condimentum nisl eu consectetur. Integer eleifend, nisl
                                                venenatis consequat iaculis, lectus arcu malesuada sem, dapibus porta quam
                                                lacus eu neque.</p>
                                            <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi
                                                tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum
                                                ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at
                                                pellentesque volutpat. Phasellus at ultricies neque, quis malesuada
                                                augue. Donec eleifend condimentum nisl eu consectetur. Integer eleifend,
                                                nisl venenatis consequat iaculis, lectus arcu malesuada sem, dapibus
                                                porta quam lacus eu neque.</p>
                                            <p>Duis non malesuada est, quis congue nibh. Pellentesque habitant morbi
                                                tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque
                                                quam. Aliquam sollicitudin venenatis ipsum ac feugiat. Vestibulum
                                                ullamcorper sodales nisi nec condimentum. Mauris convallis mauris at
                                                pellentesque volutpat. Phasellus at ultricies neque, quis malesuada
                                                augue. Donec eleifend</p></div>-->
                                        <p>Best Regards<br>Mical</p></div>
                                </div>
                                <div class="wrapper"> Click here to <a href="mail.html#">Reply</a> or <a
                                        href="mail.html#">Forward</a></div>
                            </section>
                        </section>
                    </aside> <!-- /.aside -->
                    <!--<aside class="aside bg-primary lt " id="chat">
                        <section class="vbox animated fadeInRight">
                            <header class="dk header"><p>Contacts (25)</p></header>
                            <section class="scrollable">
                                <div class="list-group auto list-group-alt no-radius no-borders"><a
                                        class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-success text-xs"></i> <span>Cris Labiso</span>
                                    </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-muted text-xs"></i> <span>Daniel Sandvid</span>
                                    </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-warning text-xs"></i>
                                        <span>Helder Oliveira</span> </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-muted text-xs"></i> <span>Jeff Broderik</span>
                                    </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-muted text-xs"></i>
                                        <span>Jonathan Morina</span> </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-success text-xs"></i>
                                        <span>Mason Yarnell</span> </a> <a class="list-group-item" href="mail.html#"> <i
                                            class="fa fa-fw fa-circle-o text-warning text-xs"></i>
                                        <span>Mike Mcalidek</span> </a></div>
                            </section>
                            <footer class="footer bg text-center">
                                <button class="btn btn-primary bg-empty btn-sm"><i class="fa fa-plus"></i> New contact
                                </button>
                            </footer>
                        </section>
                    </aside>-->
                </section>
            </section>
        </section>
    </section>
</section> <!-- Bootstrap --> <!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>

</body>
</html>
