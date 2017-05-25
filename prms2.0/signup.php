<?php
?>
<!DOCTYPE html>
<html lang="en" class=" ">
<head>
    <meta charset="utf-8"/>
    <title>PRSS</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="css/app.v1.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script> <![endif]--></head>
<body class="">
<section id="content" class="m-t-lg wrapper-md animated fadeInDown">
    <div class="container aside-xl"><a class="navbar-brand block" href="Homepage.php">PRSS</a>
        <section class="m-b-lg">
            <header class="wrapper text-center"><strong>Sign up to view Patients Records</strong></header>
            <form action="Homepage.php">
                <div class="list-group">
                    <div class="list-group-item"><input placeholder="Name" class="form-control no-border"></div>
                    <div class="list-group-item"><input type="number" placeholder="Medical ID" class="form-control no-border">
                    </div>
                    <div class="list-group-item"><input type="password" placeholder="Password"
                                                        class="form-control no-border"></div>
                </div>
                <div class="checkbox m-b"><label> <input type="checkbox"> Agree the <a href="signup.php#">terms and
                    policy</a> </label></div>
                <button type="submit" class="btn btn-lg btn-primary btn-block">Sign up</button>
                <div class="line line-dashed"></div>
                <p class="text-muted text-center">
                    <small>Already have an account?</small>
                </p>
                <a href="login.php" class="btn btn-lg btn-default btn-block">Sign in</a></form>
        </section>
    </div>
</section> <!-- footer -->
<footer id="footer">
    <div class="text-center padder clearfix">
        <p>
            <small>A Patients Data sharing platform<br>&copy; 2017</small>
        </p>
    </div>
</footer> <!-- / footer --> <!-- Bootstrap --> <!-- App -->
<script src="js/app.v1.js"></script>
<script src="js/app.plugin.js"></script>
</body>
</html>