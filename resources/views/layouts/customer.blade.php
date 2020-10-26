
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../asset/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../asset/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset ('demo/demo.css')}}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="orange">
          <!--
            Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
        -->
          <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text logo-mini">
              Jane
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
              Doe
            </a>
          </div>
          <div class="sidebar-wrapper" id="sidebar-wrapper">
            <ul class="nav">
              <li class="{{ 'home'  == request()->path() ? 'active' : ''}}">
                <a href="{{ route('home') }}">
                  <i class="now-ui-icons shopping_shop"></i>
                  <p>HOME</p>
                </a>
              </li>
              <li class="{{ 'shipment'  == request()->path() ? 'active' : ''}}">
                <a href="{{ route('shipment') }}">
                  <i class="now-ui-icons shopping_box"></i>
                  <p>SHIPMENTS</p>
                </a>
              </li>
              <li class="{{ 'messages'  == request()->path() ? 'active' : ''}}">
                <a href="messages">
                  <i class="now-ui-icons ui-1_email-85"></i>
                  <p>MESSAGES</p>
                </a>
              </li>
              <li class="{{ 'addressbook'  == request()->path() ? 'active' : ''}}">
                <a href="addressbook">
                  <i class="now-ui-icons education_agenda-bookmark"></i>
                  <p>Address Book</p>
                </a>
              </li>
              <li class="{{ 'profile'  == request()->path() ? 'active' : ''}}">
                <a href="profile">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="{{ 'faq'  == request()->path() ? 'active' : ''}}">
                <a href="faq">
                  <i class="now-ui-icons ui-2_chat-round"></i>
                  <p>Faqs</p>
                </a>
              </li>
              <li class="{{ 'logout'  == request()->path() ? 'active' : ''}}">
                <a  href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                  <i class="now-ui-icons arrows-1_cloud-download-93"></i>

                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="main-panel" id="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
              <div class="navbar-wrapper">
                <div class="navbar-toggle">
                  <button type="button" class="navbar-toggler">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                  </button>
                </div>
                <a class="navbar-brand" href="{{ route('home') }}">Dashboard</a>
              </div>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navigation">
                <form>
                  <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                      <div class="input-group-text">
                        <i class="now-ui-icons ui-1_zoom-bold"></i>
                      </div>
                    </div>
                  </div>
                </form>
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="">
                      <i class="now-ui-icons media-2_sound-wave"></i>
                      <p>
                        <span class="d-lg-none d-md-block">Stats</span>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                            @can('manage-users')
                        <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                USER MANAGEMENT
                        </a>
                            @endcan
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
             </ul>
              </div>
            </div>
          </nav>
        </div>
             @yield('content')


             @yield('scripts')
</body>

</html>
