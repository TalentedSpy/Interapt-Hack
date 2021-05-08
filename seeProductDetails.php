<!DOCTYPE html>
<!-- saved from url=(0055)https://pipeline.mediumra.re/nav-side-kanban-board.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script type="text/javascript" async="" src="./kanban/analytics.js.download"></script><script async="" src="./kanban/js"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'UA-52115242-14');
    </script>
    
    <title>Interapt Hackathon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A project management Bootstrap theme by Medium Rare">
    <link href="./kanban/logo.png" rel="icon" type="image/x-icon">
    <link href="./kanban/icon" rel="stylesheet">
    <link href="./kanban/css" rel="stylesheet">
    <link href="./kanban/theme.css" rel="stylesheet" type="text/css" media="all">
  </head>

  <body>

    <div class="layout layout-nav-side">
      <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">

        <a class="navbar-brand" href="./kanban.php">
          <img alt="Pipeline" src="./kanban/logo.png">
        </a>
        <div class="d-flex align-items-center">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            
          </button>
        </div>
        <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
          <ul class="navbar-nav d-lg-block">

            <li class="nav-item">

              <a class="nav-link" href="./kanban.php">Kanban Board</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="./addpro.php">Add Project</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="./updatepro.php">Update Project Details</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="./viewpro.php">View Project Details</a>

            </li>

            <li class="nav-item">

              <a class="nav-link" href="./login.php">Logout</a>

            </li>

          </ul>
          <hr>
        </div>

      </div>
      <div class="main-container">
        <div class="bg-white p-2 text-center">
          <h1>See Project Details</h1>
        </div>
        <hr>
        <div class="container">
          <div class="mt-1">
            <form >
              <div class="col-6">
                <label>Project Name</label>
                <div class="dropdown">
                  <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Project Name</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>  
              </div>
              <center><button type="submit" class="btn btn-primary" name="projNameSubmit">Submit</button></center>
              <hr>
              <div class="col-12">
                <label>Project Name: </label> 
                <input disabled type="text" class="form-control" aria-label="First name" >
              </div>
              <div class="col-12">
                <label>Project Start Date: </label> 
                <input disabled class="form-control" type="text" data-flatpickr data-alt-input="true" >
              </div>
              <div class="col-12">
                <label>Project End Date: </label> 
                <input disabled class="form-control" type="text" data-flatpickr data-alt-input="true">
              </div>
              <br>
              <div class="col-6">
                <label>Customer Name</label>
                <div class="dropdown">
                  <button disabled class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Customer Name</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>  
              </div>
              <br>
              <div class="col-6">
                <label>Project Manager</label>
                <div class="dropdown">
                  <button disabled class="btn  dropdown-toggle" type="button" data-toggle="dropdown">Project Manager</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </div>  
              </div>
              <br>
              <div class="col-12">
                <label>State Code: </label> 
                <input disabled type="text" class="form-control" aria-label="First name" required="">
              </div>

              <div class="col-12">
                <label>Project Description</label>
                <textarea disabled required="" class="form-control"> </textarea> 
              </div>
              <br>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="./kanban/jquery.min.js.download"></script>
    <script type="text/javascript" src="./kanban/popper.min.js.download"></script>
    <script type="text/javascript" src="./kanban/bootstrap.js.download"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- Autosize - resizes textarea inputs as user types -->
    <script type="text/javascript" src="./kanban/autosize.min.js.download"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="./kanban/flatpickr.min.js.download"></script>
    <!-- Prism - displays formatted code boxes -->
    <script type="text/javascript" src="./kanban/prism.js.download"></script>
    <!-- Shopify Draggable - drag, drop and sort items on page -->
    <script type="text/javascript" src="./kanban/draggable.bundle.legacy.js.download"></script>
    <script type="text/javascript" src="./kanban/swap-animation.js.download"></script>
    <!-- Dropzone - drag and drop files onto the page for uploading -->
    <script type="text/javascript" src="./kanban/dropzone.min.js.download"></script>
    <!-- List.js - filter list elements -->
    <script type="text/javascript" src="./kanban/list.min.js.download"></script>

    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="./kanban/theme.js.download"></script>

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

  

<div id="draggable-live-region" aria-relevant="additions" aria-atomic="true" aria-live="assertive" role="log" style="position: fixed; width: 1px; height: 1px; top: -1px; overflow: hidden;"></div><div id="__autosizeInputGhost" style="display: inline-block; height: 0px; overflow: hidden; position: absolute; top: 0px; visibility: hidden; white-space: nowrap; box-sizing: border-box; border-left: 0px solid red; border-right: 0px solid red; font-family: -apple-system, BlinkMacSystemFont, &quot;Inter UI&quot;, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-feature-settings: normal; font-kerning: auto; font-size: 16px; font-stretch: 100%; font-style: normal; font-variant: normal; font-weight: 400; letter-spacing: normal; margin-left: 0px; margin-right: 0px; padding-left: 0px; padding-right: 0px; text-indent: 0px; text-transform: none;">Invite&nbsp;clients&nbsp;to&nbsp;board&nbsp;before&nbsp;next&nbsp;concept&nbsp;meeting</div><input type="file" multiple="multiple" class="dz-hidden-input" style="visibility: hidden; position: absolute; top: 0px; left: 0px; height: 0px; width: 0px;"><div class="flatpickr-calendar animate showTimeInput" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">September </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="August 29, 2021" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="August 30, 2021" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="August 31, 2021" tabindex="-1">31</span><span class="flatpickr-day " aria-label="September 1, 2021" tabindex="-1">1</span><span class="flatpickr-day " aria-label="September 2, 2021" tabindex="-1">2</span><span class="flatpickr-day " aria-label="September 3, 2021" tabindex="-1">3</span><span class="flatpickr-day " aria-label="September 4, 2021" tabindex="-1">4</span><span class="flatpickr-day " aria-label="September 5, 2021" tabindex="-1">5</span><span class="flatpickr-day " aria-label="September 6, 2021" tabindex="-1">6</span><span class="flatpickr-day " aria-label="September 7, 2021" tabindex="-1">7</span><span class="flatpickr-day " aria-label="September 8, 2021" tabindex="-1">8</span><span class="flatpickr-day " aria-label="September 9, 2021" tabindex="-1">9</span><span class="flatpickr-day " aria-label="September 10, 2021" tabindex="-1">10</span><span class="flatpickr-day " aria-label="September 11, 2021" tabindex="-1">11</span><span class="flatpickr-day " aria-label="September 12, 2021" tabindex="-1">12</span><span class="flatpickr-day " aria-label="September 13, 2021" tabindex="-1">13</span><span class="flatpickr-day " aria-label="September 14, 2021" tabindex="-1">14</span><span class="flatpickr-day selected" aria-label="September 15, 2021" tabindex="-1">15</span><span class="flatpickr-day " aria-label="September 16, 2021" tabindex="-1">16</span><span class="flatpickr-day " aria-label="September 17, 2021" tabindex="-1">17</span><span class="flatpickr-day " aria-label="September 18, 2021" tabindex="-1">18</span><span class="flatpickr-day " aria-label="September 19, 2021" tabindex="-1">19</span><span class="flatpickr-day " aria-label="September 20, 2021" tabindex="-1">20</span><span class="flatpickr-day " aria-label="September 21, 2021" tabindex="-1">21</span><span class="flatpickr-day " aria-label="September 22, 2021" tabindex="-1">22</span><span class="flatpickr-day " aria-label="September 23, 2021" tabindex="-1">23</span><span class="flatpickr-day " aria-label="September 24, 2021" tabindex="-1">24</span><span class="flatpickr-day " aria-label="September 25, 2021" tabindex="-1">25</span><span class="flatpickr-day " aria-label="September 26, 2021" tabindex="-1">26</span><span class="flatpickr-day " aria-label="September 27, 2021" tabindex="-1">27</span><span class="flatpickr-day " aria-label="September 28, 2021" tabindex="-1">28</span><span class="flatpickr-day " aria-label="September 29, 2021" tabindex="-1">29</span><span class="flatpickr-day " aria-label="September 30, 2021" tabindex="-1">30</span><span class="flatpickr-day nextMonthDay" aria-label="October 1, 2021" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="October 2, 2021" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="October 3, 2021" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="October 4, 2021" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="October 5, 2021" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="October 6, 2021" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="October 7, 2021" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay" aria-label="October 8, 2021" tabindex="-1">8</span><span class="flatpickr-day nextMonthDay" aria-label="October 9, 2021" tabindex="-1">9</span></div></div></div></div></div><div class="flatpickr-calendar animate showTimeInput" tabindex="-1"><div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z"></path></svg></span><div class="flatpickr-month"><div class="flatpickr-current-month"><span class="cur-month">April </span><div class="numInputWrapper"><input class="numInput cur-year" type="number" tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span class="arrowDown"></span></div></div></div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17"><g></g><path d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z"></path></svg></span></div><div class="flatpickr-innerContainer"><div class="flatpickr-rContainer"><div class="flatpickr-weekdays"><div class="flatpickr-weekdaycontainer">
      <span class="flatpickr-weekday">
        Sun</span><span class="flatpickr-weekday">Mon</span><span class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span class="flatpickr-weekday">Sat
      </span>
      </div></div><div class="flatpickr-days" tabindex="-1"><div class="dayContainer"><span class="flatpickr-day prevMonthDay" aria-label="March 28, 2021" tabindex="-1">28</span><span class="flatpickr-day prevMonthDay" aria-label="March 29, 2021" tabindex="-1">29</span><span class="flatpickr-day prevMonthDay" aria-label="March 30, 2021" tabindex="-1">30</span><span class="flatpickr-day prevMonthDay" aria-label="March 31, 2021" tabindex="-1">31</span><span class="flatpickr-day " aria-label="April 1, 2021" tabindex="-1">1</span><span class="flatpickr-day " aria-label="April 2, 2021" tabindex="-1">2</span><span class="flatpickr-day " aria-label="April 3, 2021" tabindex="-1">3</span><span class="flatpickr-day " aria-label="April 4, 2021" tabindex="-1">4</span><span class="flatpickr-day " aria-label="April 5, 2021" tabindex="-1">5</span><span class="flatpickr-day " aria-label="April 6, 2021" tabindex="-1">6</span><span class="flatpickr-day " aria-label="April 7, 2021" tabindex="-1">7</span><span class="flatpickr-day " aria-label="April 8, 2021" tabindex="-1">8</span><span class="flatpickr-day " aria-label="April 9, 2021" tabindex="-1">9</span><span class="flatpickr-day " aria-label="April 10, 2021" tabindex="-1">10</span><span class="flatpickr-day " aria-label="April 11, 2021" tabindex="-1">11</span><span class="flatpickr-day " aria-label="April 12, 2021" tabindex="-1">12</span><span class="flatpickr-day " aria-label="April 13, 2021" tabindex="-1">13</span><span class="flatpickr-day " aria-label="April 14, 2021" tabindex="-1">14</span><span class="flatpickr-day " aria-label="April 15, 2021" tabindex="-1">15</span><span class="flatpickr-day " aria-label="April 16, 2021" tabindex="-1">16</span><span class="flatpickr-day " aria-label="April 17, 2021" tabindex="-1">17</span><span class="flatpickr-day " aria-label="April 18, 2021" tabindex="-1">18</span><span class="flatpickr-day " aria-label="April 19, 2021" tabindex="-1">19</span><span class="flatpickr-day " aria-label="April 20, 2021" tabindex="-1">20</span><span class="flatpickr-day selected" aria-label="April 21, 2021" tabindex="-1">21</span><span class="flatpickr-day " aria-label="April 22, 2021" tabindex="-1">22</span><span class="flatpickr-day " aria-label="April 23, 2021" tabindex="-1">23</span><span class="flatpickr-day " aria-label="April 24, 2021" tabindex="-1">24</span><span class="flatpickr-day " aria-label="April 25, 2021" tabindex="-1">25</span><span class="flatpickr-day " aria-label="April 26, 2021" tabindex="-1">26</span><span class="flatpickr-day " aria-label="April 27, 2021" tabindex="-1">27</span><span class="flatpickr-day " aria-label="April 28, 2021" tabindex="-1">28</span><span class="flatpickr-day " aria-label="April 29, 2021" tabindex="-1">29</span><span class="flatpickr-day " aria-label="April 30, 2021" tabindex="-1">30</span><span class="flatpickr-day nextMonthDay" aria-label="May 1, 2021" tabindex="-1">1</span><span class="flatpickr-day nextMonthDay" aria-label="May 2, 2021" tabindex="-1">2</span><span class="flatpickr-day nextMonthDay" aria-label="May 3, 2021" tabindex="-1">3</span><span class="flatpickr-day nextMonthDay" aria-label="May 4, 2021" tabindex="-1">4</span><span class="flatpickr-day nextMonthDay" aria-label="May 5, 2021" tabindex="-1">5</span><span class="flatpickr-day nextMonthDay" aria-label="May 6, 2021" tabindex="-1">6</span><span class="flatpickr-day nextMonthDay" aria-label="May 7, 2021" tabindex="-1">7</span><span class="flatpickr-day nextMonthDay today" aria-label="May 8, 2021" aria-current="date" tabindex="-1">8</span></div></div></div></div></div></body></html>