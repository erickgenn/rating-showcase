<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>Select Your Major</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="/index/assets/images/favicon.png" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="/index/assets/css/bootstrap.min.css">

    <!--====== Line Icons css ======-->
    <link rel="stylesheet" href="/index/assets/css/LineIcons.css">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="/index/assets/css/magnific-popup.css">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="/index/assets/css/default.css">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="/index/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

</head>

<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php if (session()->getFlashdata('login_successful')) : ?>
        <script>
            swal({
                position: 'top-end',
                icon: 'success',
                title: 'Login Successful!',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>

    <?php if (session()->getFlashdata('major_notset')) : ?>
        <script>
            swal({
                position: 'top-end',
                icon: 'error',
                title: 'Major Is Not Selected!',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    <?php endif; ?>
    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="navgition navgition-transparent">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#">
                                <img src="/index/assets/images/favicon.png" style="max-width: 90px;" alt="Logo">
                            </a>
                        </nav> <!-- navbar -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- navgition -->
        <form id="major_form" action="<?php echo base_url("/select/major") ?>" method="POST">
            <div id="home" class="header-hero bg_cover" style="background-image: url(/index/assets/images/UPH.jpg); max-height: 47rem;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="header-content text-center">
                                <h4 class="header-title">Please Select Your Major</h4>
                                <br>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select class="form-control" id="major_id" name="major_id" style="width:70%;">
                                                <option value="" disabled selected>Select a Major</option>
                                                <?php for ($i = 0; $i < count($major); $i++) : ?>
                                                    <option value="<?php echo $major[$i]['id']; ?>"><?php echo $major[$i]['name']; ?></option>
                                                <?php endfor; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <ul class="header-btn">
                                    <li><a href="javascript:$('#major_form').submit();" class="main-btn btn-one">Continue</a></li>
                                </ul>
                                <ul class="header-btn">
                                    <li><a class="main-btn btn-two">Download Report</a></li>
                                </ul>
                                <ul class="header-btn">
                                    <li><a href="<?php echo base_url("/logout") ?>" style="background-color: #9b1c31; color:white;" class="main-btn btn-three">Log Out</a></li>
                                </ul>
                            </div> <!-- header content -->
                        </div>
                    </div> <!-- row -->
                </div> <!-- container -->
                <div class="header-shape">
                    <img src="/index/assets/images/header-shape.svg" alt="shape">
                </div>
            </div> <!-- header content -->
        </form>
    </header>
    <!--====== HEADER PART ENDS ======-->

    <!--====== jquery js ======-->
    <script src="/index/assets/js/vendor/modernizr-3.6.0.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="/index/assets/js/bootstrap.min.js"></script>
    <script src="/index/assets/js/popper.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="/index/assets/js/jquery.easing.min.js"></script>
    <script src="/index/assets/js/scrolling-nav.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="/index/assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Main js ======-->
    <script src="/index/assets/js/main.js"></script>

</body>

</html>