<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Now UI Kit by Creative Tim
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../vendor/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../vendor/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../vendor/assets/demo/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Rubik&display=swap');
    </style>
</head>

<body class="landing-page sidebar-collapse">
    <?= $this->include('layout/navbar') ?>
    <?= $this->renderSection('content') ?>
    <?= $this->include('layout/footer') ?>
    <!--   Core JS Files   -->
    <script src="../vendor/assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="../vendor/assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="../vendor/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="../vendor/assets/js/plugins/bootstrap-switch.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="../vendor/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="../vendor/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="../vendor/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
</body>

</html>