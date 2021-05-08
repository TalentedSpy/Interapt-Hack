<!DOCTYPE html>
<!-- saved from url=(0047)https://pipeline.mediumra.re/utility-login.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="./login/analytics.js.download"></script><script async="" src="./login/js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-52115242-14');
    </script>

    <?php 
      require 'connection.php';
      
      if(isset($_POST['login']))
      {
        $uname = $_POST['eid'];
        $pass =$_POST['epass'];
        $result1 = mysqli_query($con, "select * from egendata");
        $cred = mysqli_fetch_assoc($result1);
        if($uname == $cred['eid'] && $pass == $cred['password'])
        {
            header("Location: ./demo.php");
        }
      }
    ?>
    
    <title>Interapt Hackathon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="./login/logo.png" rel="icon" type="image/x-icon">
    <link href="./login/icon" rel="stylesheet">
    <link href="./login/css" rel="stylesheet">
    <link href="./login/theme.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>
    <div class="main-container fullscreen">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-5 col-lg-6 col-md-7">
            <div class="text-center">
              <h1 class="h2">Welcome Back! 👋</h1>
              <p class="lead">Log in to your account to continue</p>
              <form method="POST" action="login.php">
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Employee ID" name="eid">
                </div>
                <div class="form-group">
                  <input class="form-control" type="password" placeholder="Password" name="epass">
                </div>
                <button class="btn btn-lg btn-block btn-primary" role="button" type="submit" name="login">
                  Log in
                </button>
                </small>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="./login/jquery.min.js.download"></script>
    <script type="text/javascript" src="./login/popper.min.js.download"></script>
    <script type="text/javascript" src="./login/bootstrap.js.download"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="./login/autosize.min.js.download"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="./login/flatpickr.min.js.download"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="./login/prism.js.download"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="./login/draggable.bundle.legacy.js.download"></script>
    <script type="text/javascript" src="./login/swap-animation.js.download"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="./login/dropzone.min.js.download"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="./login/list.min.js.download"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="./login/theme.js.download"></script>

    <!-- This appears in the demo only - demonstrates different layouts -->
    <style type="text/css">
      .layout-switcher{ position: fixed; bottom: 0; left: 50%; transform: translateX(-50%) translateY(73px); color: #fff; transition: all .35s ease; background: #343a40; border-radius: .25rem .25rem 0 0; padding: .75rem; z-index: 999; }
            .layout-switcher:not(:hover){ opacity: .95; }
            .layout-switcher:not(:focus){ cursor: pointer; }
            .layout-switcher-head{ font-size: .75rem; font-weight: 600; text-transform: uppercase; }
            .layout-switcher-head i{ font-size: 1.25rem; transition: all .35s ease; }
            .layout-switcher-body{ transition: all .55s ease; opacity: 0; padding-top: .75rem; transform: translateY(24px); text-align: center; }
            .layout-switcher:focus{ opacity: 1; outline: none; transform: translateX(-50%) translateY(0); }
            .layout-switcher:focus .layout-switcher-head i{ transform: rotateZ(180deg); opacity: 0; }
            .layout-switcher:focus .layout-switcher-body{ opacity: 1; transform: translateY(0); }
            .layout-switcher-option{ width: 72px; padding: .25rem; border: 2px solid rgba(255,255,255,0); display: inline-block; border-radius: 4px; transition: all .35s ease; }
            .layout-switcher-option.active{ border-color: #007bff; }
            .layout-switcher-icon{ width: 100%; border-radius: 4px; }
            .layout-switcher-body:hover .layout-switcher-option:not(:hover){ opacity: .5; transform: scale(0.9); }
            @media all and (max-width: 990px){ .layout-switcher{ min-width: 250px; } }
            @media all and (max-width: 767px){ .layout-switcher{ display: none; } }
    </style>

  

<div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive" role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"></div></body></html>