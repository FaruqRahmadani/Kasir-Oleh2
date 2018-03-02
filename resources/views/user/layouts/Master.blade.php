<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Paper Dashboard by Creative Tim</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" />
</head>
<body>

  <div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="success"><div class="sidebar-wrapper">
      <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text">
          Creative Tim
        </a>
      </div>

      <ul class="nav">
        <li class="{{ RouteHelper::ActiveRoute('Home') }}">
          <a href="{{ route('Home') }}">
            <i class="ti-home"></i>
            <p>Home</p>
          </a>
        </li>
        <li>
          <a href="user.html">
            <i class="ti-user"></i>
            <p>User Profile</p>
          </a>
        </li>
        <li>
          <a href="table.html">
            <i class="ti-view-list-alt"></i>
            <p>Table List</p>
          </a>
        </li>
        <li>
          <a href="typography.html">
            <i class="ti-text"></i>
            <p>Typography</p>
          </a>
        </li>
        <li>
          <a href="icons.html">
            <i class="ti-pencil-alt2"></i>
            <p>Icons</p>
          </a>
        </li>
        <li>
          <a href="maps.html">
            <i class="ti-map"></i>
            <p>Maps</p>
          </a>
        </li>
        <li>
          <a href="notifications.html">
            <i class="ti-bell"></i>
            <p>Notifications</p>
          </a>
        </li>
        <li class="active-pro">
          <a href="upgrade.html">
            <i class="ti-export"></i>
            <p>Upgrade to PRO</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar bar1"></span>
            <span class="icon-bar bar2"></span>
            <span class="icon-bar bar3"></span>
          </button>
          <p class="navbar-brand">{{ RouteHelper::JudulRoute(Request::route()->getName()) }}</p>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href=" {{ route('Logout') }} ">
                <i class="ti-close"></i>
                <p>Logout</p>
              </a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
    @yield('content')
    <footer class="footer">
      <div class="container-fluid">
        <nav class="pull-left">
          <ul>

            <li>
              <a href="http://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
            <li>
              <a href="http://www.creative-tim.com/license">
                Licenses
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright pull-right">
          &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
        </div>
      </div>
    </footer>

  </div>
</div>


</body>
<script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
</html>
