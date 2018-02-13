<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' />
    <meta name="author" content="BigHero">
    <title>HIC</title>
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700' rel='stylesheet' type='text/css'>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Icons CSS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Magnific-popup -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- Animate -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style.1.css">
    <!-- Color style -->
    <!-- <link href="css/colors/orange.css" rel="stylesheet" id="color-opt"> -->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
          <script src="js/html5shiv.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
    <!-- Favicon  -->
    <link rel="icon" href="img/favicon.ico">
    <!-- Skin switcher -->
    <!-- Manually link your desire skin -->
    <style type="text/css">
        .skins {
            position: fixed;
            top: 190px;
            left: -222px;
            transition: .3s ease-in-out;
            z-index: 1000;
        }

        .skins:hover {
            left: 0;
        }

        .skin-colors {
            list-style: none;
            padding: 20px;
            margin: 0;
            background-color: #fff;
            width: 222px;
            border: 1px solid #e7e7e7;
        }

        .skin-colors li {
            position: relative;
            display: inline-block;
            width: 34px;
            height: 34px;
            cursor: pointer;
            margin: 4px;
            transition: .3s ease-in-out;
        }

        .skin-colors li:hover {
            opacity: .7;
        }

        .skin-colors li.active::before {
            content: "\f00c";
            font-family: FontAwesome;
            font-size: 20px;
            width: 34px;
            line-height: 34px;
            text-align: center;
            position: absolute;
            color: #fff;
        }

        .skin-toggler {
            position: absolute;
            display: inline-block;
            width: 50px;
            height: 50px;
            right: -49px;
            top: 0;
            background-color: #fff;
            font-size: 30px;
            text-align: center;
            line-height: 50px;
            color: #888;
            border: 1px solid #e7e7e7;
            border-left: 0;
        }
    </style>
</head>

<body data-target="#navbar-menu" id="hic">
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- Navbar -->
    <div class="navbar navbar-custom sticky" role="navigation" id="sticky-nav">
        <div class="container">
            <!-- Navbar-header -->
            <div class="navbar-header">
                <!-- Responsive menu button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- LOGO -->
                <a class="logo" href="index.html">
                    <img src="img/logo.png" alt="logo" class="navbar-brand img-responsive">
                </a>
            </div>
            <!-- end navbar-header -->
            <!-- menu -->
            <div class="navbar-collapse collapse" id="navbar-menu">
                <!-- Navbar left -->
                <ul class="nav navbar-nav nav-custom-left">
                    <li class="active">
                        <a href="#home" class="nav-link">@lang('hic.header.home')</a>
                    </li>
                    <li>
                        <a href="#about" class="nav-link">@lang('hic.header.about')</a>
                    </li>
                    <li>
                        <a href="#wp" class="nav-link">@lang('hic.header.wp')</a>
                    </li>
                    <li>
                        <a href="#roadmap" class="nav-link">@lang('hic.header.rm')</a>
                    </li>
                    <li>
                        <a href="#team" class="nav-link">@lang('hic.header.team')</a>
                    </li>
                    <li>
                        <a href="#clients" class="nav-link">@lang('hic.header.partner')</a>
                    </li>
                    <li>
                        <a href="#token" class="nav-link">@lang('hic.header.token')</a>
                    </li>
                </ul>
                <!-- Navbar right -->

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <select class="form-control" id="sel1" onChange="window.location.href='/?la='+ this.value">
                            <option value="en" selected>English</option>
                            <option value="zh">Chinese</option>
                        </select>
                    </li>
                    <li  style="display:none;">
                        <button type="button"  class="btn btn-signup btn-white-bordered" data-toggle="modal" data-target="#signin"> Sign in </button>
                    </li>
                </ul>
                <ul class="nav navbar-nav social navbar-right">
                    <li>
                        <a href="#facebook">
                            <i class="fa fa-facebook"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#twitter">
                            <i class="fa fa-twitter"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#instagram">
                            <i class="fa fa-instagram"> </i>
                        </a>
                    </li>
                    <li>
                        <a href="#linkedin">
                            <i class="fa fa-linkedin"> </i>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/Menu -->
        </div>
        <!-- end container -->
    </div>
    <!-- End navbar-custom -->
    <!-- Home -->
    <section class="bg-custom home-fullscreen home" id="home">
        <div class="home-sm">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 wow slideInLeft text-center">
                        <div class="home-wrapper home-wrapper-alt p-0">
                            <h1 class="h1 font-light text-white w-full">@lang('hic.header.header')</h1>
                            <p class="up-type-title">
                            @lang('hic.header.introduction0')
                            </p>
                            <br>
                            <div class="header-info">
                                <p>
                                @lang('hic.header.introduction1')
                                </p>
                                <a href="https://www.youtube.com/watch?v=6NC_ODHu5jg" class="video-btn btn popup-video">
                                    <i class="fa fa-play"></i>Watch Video</a>
                                <a href="#" class="btn btn-white-bordered">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                    <!-- <div class="col-md-5 col-md-offset-1 wow slideInRight">
                        <form class="signup-form">
                            <h2 class="text-center">Signup Now</h2>
                            <hr>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="User Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-custom btn-sm btn-block">Start Now</button>
                            </div>
                            <span class="help-block m-b-0 m-t-20 text-muted">
                                <small>By registering you agree to the HIC
                                    <a href="#">Terms of Use</a>
                                </small>
                            </span>
                        </form>
                    </div> -->
                </div>
            </div>
            <!-- Particle Effect -->
            <div id="particles-js"></div>
        </div>
    </section>
    <!-- End Home -->
    <!-- About -->
    <section id="about" class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center wow fadeInUp">
                        <div class="title-box-icon">
                            <h3 class="title">@lang('hic.about.header')</h3>
                            <p class="text-muted sub-title">@lang('hic.about.introduction')</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="col-md-6  wow slideInLeft">
                    <div class="contdainer">
                        <div class="about-story-content">
                            <h1>@lang('hic.about.1title')</h1>
                            <hr>
                            <p class="story-text">
                            @lang('hic.about.1body')
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow slideInRight">
                    <img src="img/office-space.jpg" alt="img" class="img-responsive">
                </div>
            </div>
        </div>
        <div class="row about-story bg-light" style="padding-top:20px;padding-bottom: 20px;">
            <div class="container">
                <div class="col-md-6 wow slideInLeft">
                    <img src="img/office-space.jpg" alt="img" class="img-responsive">
                </div>
                <div class="col-md-6  wow slideInRight">
                    <div class="contdainer">
                        <div class="about-story-content">
                            <h1>@lang('hic.about.2title')</h1>
                            <hr>
                            <p class="story-text">
                            @lang('hic.about.2body')
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End About -->
    <!-- features -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6 wow slideInLeft">
                    <div class="feat-description">
                        <h3 class="title">@lang('hic.feature.header')</h3>
                        <p class="text-muted">
                        </p>
                        <hr>
                        @for ($j = 0; $j <= 5; $j++)
                        <div class="feat-media col-sm-6">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="service-heading">@lang('hic.feature.'.$j)</h5>
                                </div>
                            </div>
                        </div>
                        @endfor
                        <div class="feat-media col-sm-12">
                            <div class="media">
                                <div class="media-body">
                                    <h5 class="service-heading">@lang('hic.feature.6')</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-md-push-1 wow slideInRight">
                    <img src="img/dashboard.png" alt="img" class="img-responsive service-img">
                </div>
            </div>
        </div>
    </section>
    <!-- End features -->
    <!-- Services -->
    <section id="wp" class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center wow fadeInUp">
                        <div class="title-box-icon">
                            <h3 class="title">@lang('hic.wp.header')</h3>
                            <p class="text-muted sub-title">@lang('hic.wp.introduction')</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
                <div class="col-md-12 text-center wow flipInY">
                    <div class="icon-box">
                        <a class="btn btn-custom" href="@lang('hic.wp.path')" download>@lang('hic.wp.btn')</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End services -->

    <!-- pricing -->
    <section class="timeline" id="roadmap">
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInUp">
                <h3 class="title">@lang('hic.roadmap.header')</h3>
                <p class="text-muted sub-title">@lang('hic.roadmap.introduction')</p>
            </div>
        </div>
        <div class="container">
            @for ($i = 0; $i <= 7; $i++)
                <div class="timeline-item">
                    <div class="timeline-img"></div>

                    <div class="timeline-content js--fadeInLeft">
                        <h3>@lang('hic.roadmap.content.'.$i)</h3>
                        <div class="date">@lang('hic.roadmap.date.'.$i)</div>
                    </div>
                </div>
            @endfor




        </div>
    </section>
    <!-- End Pricing -->
    <!-- TEAM -->
    <section id="team" class="section bg-light">
        <!-- TEAM HEADING -->
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInUp">
                <h3 class="title">@lang('hic.team.header')</h3>
                <p class="text-muted sub-title">@lang('hic.team.introduction')</p>
            </div>
        </div>
        <!-- end row -->
        <!-- END TEAM HEADING -->
        <div class="container">
            <div class="row">
                 @foreach($members as $key=>$member)
                    <div class="col-md-6 col-lg-3 wow flipInY">
                        <div class="team-member text-center">
                            <figure>
                                <img src="storage/{{$member->image}}" class="img-responsive img-circle" alt="team image">
                                <h3 class="team-name">{{$member->name}} </h3>
                            </figure>
                            <span>@lang('hic.team.title.'.$key)</span>
                            <p>@lang('hic.team.intro.'.$key)
                            </p>
                            <hr>
                            <!-- <div class="team-social">
                                <ul>
                                    <li>
                                        <a href="#facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#linkedin">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#instagram">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END TEAM -->
    <!-- clients -->
    <section id="clients" class="section">
        <!-- CLIENTS HEADING -->
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInUp">
                <h3 class="title">@lang('hic.partner.header')</h3>
                <p class="text-muted sub-title">@lang('hic.partner.introduction')</p>
            </div>
        </div>
        <!-- end row -->
        <!-- END CLIENTS HEADING -->
        <div class="container">
            <div class="slider wow zoomIn">
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/1.png" alt="">
                    </a>
                </div>
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/2.png" alt="">
                    </a>
                </div>
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/3.png" alt="">
                    </a>
                </div>
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/4.png" alt="">
                    </a>
                </div>
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/5.png" alt="">
                    </a>
                </div>
                <div class="clients-content">
                    <a href="#">
                        <img src="img/partners/6.png" alt="">
                    </a>
                </div>

            </div>
        </div>
    </section>
    <!-- end clients -->
    <!-- subscribe -->
    <section id="token" class="subscribe custom-bg  bg-light">
        <div class="row">
            <div class="col-sm-12 text-center wow fadeInUp">
                <h3 class="title">@lang('hic.token.header')</h3>
                <p class="text-muted sub-title">@lang('hic.token.introduction')</p>
            </div>
        </div>
        <div class="container">
                <img style="width:100%" src="/img/piechart.png">
        </div>
    </section>
    <!-- end subscribe -->
    <!-- / Contact section -->

    <!-- End contact -->
    <!-- FOOTER -->
    <footer class="section footer wow fadeInUp">
        <div class="container">
            <!-- Navbar -->
            <div class="navbar navbar-custom" role="navigation">
                <div class="navbar-header">
                    <a class="logo" href="index.html">
                        <img src="img/logo.png" alt="logo" class="navbar-brand img-responsive">
                    </a>
                </div>
                <div class="navbar" id="footer-menu">
                </div>
            </div>
            <div class="lower-footer">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="footer-alt text-left">
                            <p class="text-muted m-b-0">HIC, All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </footer>
    <!-- END FOOTER -->
    <!-- Back to top -->
    <div class="scroll-indicator go-top" id="back-to-top">
        <a href="#hic">
            <i class="fa fa-angle-double-up"></i>
        </a>
    </div>
    <!-- Signup Modal -->
    <div class="modal fade" id="signin" tabindex="-1" role="dialog" aria-labelledby="loginModalLable">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="modal-title text-center" id="loginModalLable">Sign in now</h2>
                </div>
                <div class="modal-body">
                    <form class="signin-form"  action="/auth/login" method="post" accept-charset="UTF-8">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-custom btn-sm btn-block">Login</button>
                        </div>
                        <span class="help-block m-b-0 m-t-20 text-muted">
                            <a href="#">Forgot your password</a>
                        </span>
                    </form>
                        <div class="text-center"><h3>Or</h3></div>
                    <form class="signup-form">
                        <h2 class="text-center">Signup Now</h2>
                        <hr>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Full Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Email Address" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="User Name" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Password" required="required">
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-custom btn-sm btn-block">Start Now</button>
                        </div>
                        <span class="help-block m-b-0 m-t-20 text-muted">
                            <small>By registering you agree to the HIC
                                <a href="#">Terms of Use</a>
                            </small>
                        </span>
                    </form>






                </div>
            </div>
        </div>
    </div>
    <!-- end signup modal -->
    <!-- Javascript files -->
    <!-- Jquery -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Jquery easing -->
    <script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
    <!--sticky header-->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>
    <!-- OWL Carousel -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!--Magnific popup-->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <!-- contact form -->
    <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
    <!-- Text typing -->
    <script type="text/javascript" src="js/typed.min.js"></script>
    <!-- Partilce js -->
    <script type="text/javascript" src="js/particles.js"></script>
    <!-- wowjs -->
    <script src="js/wow.min.js"></script>
    <!--common script for all pages-->
    <script src="js/custom.js"></script>
    <script src='js/scrollreveal.min.js'></script>

    <script src="js/index.js"></script>
    
</body>
<script>
$(document).ready(function(){
    if(location.search.indexOf('la')>-1){
    	var lang = location.search.replace('?la=','');
    	console.log(lang);
    	$('#sel1').val(lang);
    }

})

</script>

</html>
