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


    @media screen and (min-width: 768px) {
        .login-page{
            margin-top: 30vh;
        }
    }

    @media screen and (max-width: 768px) {
        .login-page{
            margin-top: 20px;
        }
    }
  </style>
</head>

<body style="background: #e8f0f9;">
  <div class="container login-page">

    <form class="signup-form col-sm-5" action="/auth/login" method="post" accept-charset="UTF-8">
        <h2 class="text-center">Signin Now</h2>
        <hr>
      {!! csrf_field() !!}
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Email" name="email" id="email" required="required">
      </div>
      <div class="form-group">
        <input type="password" id="password" name="password" class="form-control" placeholder="Password" required="required">
      </div>
      <div class="form-group text-center">
        <button type="submit" class="btn btn-custom btn-sm btn-block">Login</button>
      </div>
      <span class="help-block m-b-0 m-t-20 text-muted">
                            <a href="#">Forgot your password</a>
      </span>
    </form>

    <div class="text-center col-sm-2">
      <h3>Or</h3></div>
    <form class="signup-form col-sm-5">
      <h2 class="text-center">Signup Now</h2>
      <hr>
      {!! csrf_field() !!}
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
</body>
<script type="text/javascript">
  
  @if(isset($error))
    alert("{{$error}}");
  @endif

  @if(Session::has('error'))
    alert("{{Session::get('error')}}");
  @endif

  @if(Session::has('message'))
    alert("{{Session::get('message')}}");
  @endif

  </script>
