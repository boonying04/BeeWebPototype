<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Beeconnex Admin Dashboard">
  <meta name="author" content="">

  <title>Dashboard | BeeConnex </title>

  <link rel="apple-touch-icon" href="./assets/images/apple-touch-icon.png">
  <link rel="shortcut icon" href="./assets/images/favicon.ico">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="./global/css/bootstrap.min.css">
  <link rel="stylesheet" href="./global/css/bootstrap-extend.css">
  <link rel="stylesheet" href="./assets/css/site.css">

  <!-- Plugins -->
  <link rel="stylesheet" href="./global/vendor/animsition/animsition.css">
  <link rel="stylesheet" href="./global/vendor/asscrollable/asScrollable.css">
  <link rel="stylesheet" href="./global/vendor/switchery/switchery.css">
  <link rel="stylesheet" href="./global/vendor/intro-js/introjs.css">
  <link rel="stylesheet" href="./global/vendor/slidepanel/slidePanel.css">
  <link rel="stylesheet" href="./global/vendor/flag-icon-css/flag-icon.css">
  <link rel="stylesheet" href="./global/vendor/chartist/chartist.css">
  <link rel="stylesheet" href="./global/vendor/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="./global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.css">

  <link type="text/css" rel="stylesheet" href="./assets/skins/orange.css" id="skinStyle">
  <link rel="stylesheet" href="./global/vendor/asscrollable/asScrollable.css">

  <link rel="stylesheet" href="./global/vendor/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-fixedheader-bs4/dataTables.fixedheader.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-fixedcolumns-bs4/dataTables.fixedcolumns.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-rowgroup-bs4/dataTables.rowgroup.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-scroller-bs4/dataTables.scroller.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-select-bs4/dataTables.select.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-responsive-bs4/dataTables.responsive.bootstrap4.css">
  <link rel="stylesheet" href="./global/vendor/datatables.net-buttons-bs4/dataTables.buttons.bootstrap4.css">

  <link rel="stylesheet" href="./global/vendor/c3/c3.css">


  <!-- Fonts -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
  <link rel="stylesheet" href="./global/fonts/weather-icons/weather-icons.css">
  <link rel="stylesheet" href="./global/fonts/web-icons/web-icons.min.css">
  <link rel="stylesheet" href="./global/fonts/brand-icons/brand-icons.min.css">
  <link rel="stylesheet" href="./global/fonts/themify/themify.css">
  <link rel="stylesheet" href="./global/fonts/font-awesome/font-awesome.css">
  <link rel="stylesheet" href="./global/vendor/slick-carousel/slick.css">
  <!--[if lt IE 9]>
    <script src="./global/vendor/html5shiv/html5shiv.min.js"></script>
    <![endif]-->

  <!--[if lt IE 10]>
    <script src="./global/vendor/media-match/media.match.min.js"></script>
    <script src="./global/vendor/respond/respond.min.js"></script>
    <![endif]-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js" type="text/javascript"></script>

  <!-- Scripts -->
  <script src="./global/vendor/breakpoints/breakpoints.js"></script>
  <script>
    Breakpoints();
  </script>
</head>

<body class="animsition dashboard">
  <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Navigation -->
  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega navbar-inverse bg-orange-600" role="navigation" style="background-color: #ffba00 !important;">
    <!-- LOGO - ASIDE TOGGLE -->
    <div class="navbar-header">
      <div class="navbar-brand navbar-brand-center">
        <img class="navbar-brand-logo" src="./assets/images/logo-colored@2x.png" title="BeeConnex">
        <span class="navbar-brand-text hidden-xs-down"><font color="#00000">Bee</font><font color="#fffff">Connex</font></span>
      </div>

      <!-- Navbar Toolbar - Right -->
      <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right hidden-md-up">
          <!-- Notification -->
          <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up"
              role="button">
              <i class="icon wb-bell" aria-hidden="true"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
              <div class="dropdown-menu-header">
                <h5>NOTIFICATIONS</h5>
              </div>

              <div class="list-group">
                <div data-role="container">
                  <div data-role="content">
                    
                  </div>
                </div>
              </div>
              <div class="dropdown-menu-footer">
                <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                  <i class="icon wb-settings" aria-hidden="true"></i>
                </a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  All notifications
                </a>
              </div>
            </div>
          </li>
          <!-- Profile -->
          <li class="nav-item dropdown mr-10">
            <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
              <span class="avatar avatar-online">
                <img src="./assets/images/Profile_farm1.jpg" alt="User Profile">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu" role="menu">
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <i class="icon wb-user" aria-hidden="true"></i> Farm 1</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <i class="icon fa-address-book" aria-hidden="true"></i> Farm 2</a>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <i class="icon fa-address-book-o" aria-hidden="true"></i> Farm 3</a>
              <div class="dropdown-divider" role="presentation"></div>
              <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                <i class="icon wb-power" aria-hidden="true"></i> Logout</a>
            </div>
          </li>
      </ul>
      <!-- / Navbar Toolbar Right -->

    </div>
    <!-- Navbar Collapse -->
    <div class="navbar-container container-fluid">
      <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
        <!-- Navbar Toolbar - Left -->
        <ul class="nav navbar-toolbar">

          <li class="nav-item hidden-sm-down" id="toggleFullscreen">
            <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
              <span class="sr-only">Toggle Fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- / Navbar Toolbar -->

        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right hidden-xs-down">
            <!-- Notification -->
            <li class="nav-item dropdown">
              <a class="nav-link" data-toggle="dropdown" href="javascript:void(0)" title="Notifications" aria-expanded="false" data-animation="scale-up"
                role="button">
                <i class="icon wb-bell" aria-hidden="true"></i>
                <!-- <span class="badge badge-pill badge-danger up">5</span> -->
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-media" role="menu">
                <div class="dropdown-menu-header">
                  <h5>NOTIFICATIONS</h5>
                </div>
  
                <div class="list-group">
                  <div data-role="container">
                    <div data-role="content">
                      <!-- <a class="list-group-item dropdown-item" href="javascript:void(0)" role="menuitem">
                        <div class="media">
                          <div class="pr-10">
                            <i class="icon fa-warning bg-red-600 white icon-circle" aria-hidden="true"></i>
                          </div>
                          <div class="media-body">
                            <h6 class="media-heading">A new order has been placed</h6>
                            <time class="media-meta" datetime="2018-06-12T20:50:48+08:00">5 hours ago</time>
                          </div>
                        </div>
                      </a> -->
                    </div>
                  </div>
                </div>
                <div class="dropdown-menu-footer">
                  <!-- <a class="dropdown-menu-footer-btn" href="javascript:void(0)" role="button">
                    <i class="icon wb-settings" aria-hidden="true"></i>
                  </a> -->
                  <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                    All notifications
                  </a>
                </div>
              </div>
            </li>
            <!-- Profile -->
            <li class="nav-item dropdown mr-10">
              <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                <span class="avatar avatar-online">
                  <img src="./assets/images/Profile_farm1.jpg" alt="User Profile">
                  <i></i>
                </span>
              </a>
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <i class="icon wb-user" aria-hidden="true"></i> Farm 1</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <i class="icon fa-address-book" aria-hidden="true"></i> Farm 2</a>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <i class="icon fa-address-book-o" aria-hidden="true"></i> Farm 3</a>
                <div class="dropdown-divider" role="presentation"></div>
                <a class="dropdown-item" href="javascript:void(0)" role="menuitem">
                  <i class="icon wb-power" aria-hidden="true"></i> Logout</a>
              </div>
            </li>
        </ul>
        
      </div>
      <!-- / Navbar Collapse -->
    </div>
    <!-- / Navigation Collapse -->
  </nav>
  <!-- / Navigation -->

  <!-- Page -->
  <div class="page" style="margin: 0px">
    <div class="page-content container-fluid">
      <div class="row">
        <!-- <div class="page-header w-p100 pt-0">
          <h1 class="page-title">Farm 1 Dashboard</h1>
          <div class="page-header-actions">
            <form>
              <div class="input-search input-search-dark">
                <i class="input-search-icon wb-search" aria-hidden="true"></i>
                <input type="text" class="form-control" name="" placeholder="Search...">
              </div>
            </form>
          </div>
        </div> -->
      </div>

      <div class="row" data-plugin="matchHeight" data-by-row="true">
        
        <!-- BoxList -->
        <div class="col-xxl-6 col-lg-4">
              <!-- Panel Boxlist -->
              <div class="card card-shadow" id="widgetTable">
                <div class="card-block pt-20 pb-20 pl-10 pr-5">
                  <h3 class="card-title">
                    <span class="text-truncate">Farm 1</span>
                  </h3>
                  <!-- Filter Button -->
                  <div>
                    <small>Filter : </small>
                    <button type="button" onclick="filterStatus('*')" class="btn btn-sm btn-animate btn-animate-vertical btn-default mx-1 mx-sm-3" style="display:inline;">
                        <span>
                          <i class="icon fa-asterisk" aria-hidden="true"></i>
                          ALL</span>
                      </button>
                    <button type="button" onclick="filterStatus('HEALTHTY')" class="btn btn-sm btn-animate btn-animate-vertical btn-success mx-1 mx-sm-3" style="display:inline;">
                      <span>
                        <i class="icon ti-face-smile" aria-hidden="true"></i>
                        3 HEALTHY</span>
                    </button>
                    <button type="button" onclick="filterStatus('ABNORMAL')" class="btn btn-sm btn-animate btn-animate-vertical btn-danger mx-1 mx-sm-3" style="display:inline;">
                      <span>
                        <i class="icon ti-face-sad" aria-hidden="true"></i>
                        0 ABNORMAL</span>
                    </button>
                  </div>
                  <!-- / Filter Button-->
                  <!-- Search box -->
                  <form class="mt-25" action="#" role="search">
                    <div class="input-search input-search-dark">
                      <i class="input-search-icon wb-search" aria-hidden="true"></i>
                      <input type="text" id="searchInput" onkeyup="filterFunction()" class="form-control" placeholder="Search.." />
                    </div>
                  </form>
                  <!-- / Search box -->
                </div>
                <div class="mt-0 pt-0" style="height:650px" data-plugin="scrollable">
                  <div data-role="container">
                    <div data-role="content">
                      <!-- List -->
                      <div class="container">
                        <h4>Box No.</h4>
                        <div class="row m-0 text-center">
                          <div class="col-3 px-1">Status</div>
                          <div class="col-3 px-1">Temp.</div>
                          <div class="col-3 px-1">Humidity</div>
                          <div class="col-3 px-1">Weight</div>
                        </div>

                        
                        <div class="list-group panel-group" id="boxlist">

                          <!-- BOX 01 -->
                          <a class="list-group-item flex-column align-items-start accordion-toggle" id="listbox1" href="#box1" data-toggle="collapse"  data-parent="#accordion" onclick="moveScoll('listbox1','box1')">
                            <h4 class="list-group-item-heading mt-0 mb-5">
                              BOX1
                            </h4>
                            <div class="row mb-0 text-center">
                              <div class="col-3 px-3">
                                <span class="badge badge-success" id="boxstatus">HEALTHTY</span>
                              </div>
                              <div class="col-3 px-3">35°C
                                <span class="font-size-12">C</span>
                              </div>
                              <div class="col-3 px-3">70%</div>
                              <div class="col-3 px-3">14.5 kg</div>
                            </div>
                          </a>
                          <div class="col-lg-3 hidden-md-up collapse"  id="box1">
                              <div class="card card-shadow">
                                  <div class="col-xl-12">
                                      <!-- Tabs Line Top -->
                                      <div class="mb-10">
                                      <div class="nav-tabs-horizontal" data-plugin="tabs">
                                          <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link active" data-toggle="tab" href="#tab1box1" aria-controls="tab1" role="tab">Overall</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab2box1" aria-controls="tab2" role="tab">Graph</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab3box1" aria-controls="tab3" role="tab">Picture</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab4box1" aria-controls="tab4" role="tab">Sound</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab5box1" aria-controls="tab5" role="tab" onclick="drawMap1()">Map</a>
                                          </li>
                                          </ul>
                                          <div class="tab-content pt-20">
                              
                                          <!-- Tab 1 - Overall -->
                                          <div class="tab-pane active" id="tab1box1" role="tabpanel">
                                              <div class="container-fluid">
                                                  <!-- Updated Photo -->
                                                  <div class="row ">
                                                      <div class="col-md-9 offset-md-3">
                                                        <div class="card">
                                                          <img class="card-img-top w-full" src="../global/photos/placeholder.png" alt="...">
                                                          <div class="card-block text-center mx-auto">
                                                            <h4 class="card-title">
                                                              Photo :
                                                              <span id="updatedPhoto">Tueday 26 June, 2018</span>
                                                            </h4>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                          </div>
                                          
                                          <!-- Tab 2 - Graph -->
                                          <!-- MORE INFORMATION : https://c3js.org/ -->
                                          <!-- MORE INFORMATION - JSON : https://c3js.org/samples/data_json.html -->
                                          <div class="tab-pane" id="tab2box1" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-20">
                                                  <div class="row row-lg">
                              
                                                  <div class="col-lg-6">
                                                    <canvas id="Chart1" width="600" height="200"></canvas>
                                                  </div>
                                                  <div class="col-lg-6">
                                                    <canvas id="Chart2" width="600" height="200"></canvas>
                                                  </div>

                                                  </div>
                                              </div>
                                              </div>
                                          </div>
                              
                                          <!-- Tab 3 - Picture -->
                                          <div class="tab-pane" id="tab3box1" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-0">
                                                  <div class="row">
                                                  <h4 class="card-title">Photo :
                                                      <span id="updatedPhoto'.$box.'">Tueday 26 June, 2018</span>
                                                  </h4>
                                                  <div class="tab-pane" id="tab3'.$box.'" role="tabpanel">
                                                      <div class="row">
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">02:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">12:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">08:00:59 pm</span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-12 d-block mx-auto">
                                                      <button type="button" class="btn btn-animate btn-animate-vertical btn-warning ">
                                                        <span>
                                                          <i class="icon wb-download" aria-hidden="true"></i>Download High Resolution Photo
                                                        </span>
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                              
                                          <!-- Tab 4 - Download -->
                                          <div class="tab-pane" id="tab4box1" role="tabpanel">
                                            <!-- Panel Table Tools -->
                                            <div class="panel">
                                              <div class="panel-body pt-0">
                                                <table class="table table-hover dataTable table-striped w-full" id="TableToolsbox1">
                                                  <thead>
                                                    <tr class="text-center">
                                                      <th>Box No.</th>
                                                      <th>Status</th>
                                                      <th>Temp.</th>
                                                      <th>Hum.</th>
                                                      <th>Weight</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <tr>
                                                      <td>Box 1</td>
                                                      <td class="green-600">Healthy</td>
                                                      <td>32°
                                                        <span class="font-size-12">C</span>
                                                      </td>
                                                      <td>72%</td>
                                                      <td>12.4 kg</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Box 2</td>
                                                      <td class="red-600">Collaping</td>
                                                      <td>40°
                                                        <span class="font-size-12">C</span>
                                                      </td>
                                                      <td>50%</td>
                                                      <td>1.45 kg</td>
                                                    </tr>
                                                    <tr>
                                                      <td>Box 3</td>
                                                      <td class="green-600">Healthy</td>
                                                      <td>35°
                                                        <span class="font-size-12">C</span>
                                                      </td>
                                                      <td>70%</td>
                                                      <td>14.5 kg</td>
                                                    </tr>
                                                  </tbody>
                                                </table>
                                              </div>
                                            </div>
                                            <!-- / Panel Table Tools -->
                                          </div>
                                        
                                          <!-- Tab 5 - Map -->
                                          <div class="tab-pane" id="tab5box1" role="tabpanel">
                                              <div class="container-fluid">
                                              <!-- Google Map -->
                                              <div class="row ">
                                                  <div class="col-md-12 offset-md-3" style="margin:0px">
                                                      <div id="boxMap1" style="width:100%;padding-top: 70%;"></div>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>

                                          </div>
                                        </div>
                                      </div>
                                      <!-- / Tabs Line Top -->
                                    </div>
                              </div>
                          </div>
                          
                          <!-- BOX 02 -->
                          <a class="list-group-item flex-column align-items-start accordion-toggle" id="listbox2" href="#box2" data-toggle="collapse" data-parent="#accordion" onclick="moveScoll('listbox2','box2')">
                            <h4 class="list-group-item-heading mt-0 mb-5">
                              BOX2
                            </h4>
                            <div class="row mb-0 text-center">
                              <div class="col-3 px-3">
                                <span class="badge badge-success" id="boxstatus">HEALTHTY</span>
                              </div>
                              <div class="col-3 px-3">32°
                                <span class="font-size-12">C</span>
                              </div>
                              <div class="col-3 px-3">72%</div>
                              <div class="col-3 px-3">12.4 kg</div>
                            </div>
                          </a>
                          <div class="col-lg-3 hidden-md-up collapse"  id="box2">
                              <div class="card card-shadow">
                                  <div class="col-xl-12">
                                      <!-- Tabs Line Top -->
                                      <div class="mb-10">
                                      <div class="nav-tabs-horizontal" data-plugin="tabs">
                                          <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link active" data-toggle="tab" href="#tab1box2" aria-controls="tab1" role="tab">Overall</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab2box2" aria-controls="tab2" role="tab">Graph</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab3box2" aria-controls="tab3" role="tab">Picture</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab4box2" aria-controls="tab4" role="tab">Sound</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab5box2" aria-controls="tab5" role="tab"  onclick="drawMap2()">Map</a>
                                          </li>
                                          </ul>
                                          <div class="tab-content pt-20">
                              
                                          <!-- Tab 1 - Overall -->
                                          <div class="tab-pane active" id="tab1box2" role="tabpanel">
                                            <!-- Updated Photo -->
                                            <div class="row ">
                                                <div class="col-md-9 offset-md-3">
                                                  <div class="card">
                                                    <img class="card-img-top w-full" src="./global/photos/placeholder.png" alt="...">
                                                    <div class="card-block text-center mx-auto">
                                                      <h4 class="card-title">
                                                        Photo :
                                                        <span id="updatedPhoto">Tueday 26 June, 2018</span>
                                                      </h4>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                          </div>
                                          
                                          <!-- Tab 2 - Graph -->
                                          <!-- MORE INFORMATION : https://c3js.org/ -->
                                          <!-- MORE INFORMATION - JSON : https://c3js.org/samples/data_json.html -->
                                          <div class="tab-pane" id="tab2box2" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-20">
                                                  <div class="row row-lg">
                              
                                                  <div class="col-lg-6">
                                                      <!-- C3 Bar Chart -->
                                                      <div data-role="w-lg-300">
                                                      <h4 class="title">Bar</h4>
                                                      <p>Display as Bar Chart. </p>
                                                      <div id="c3Bar"></div>
                                                      </div>
                                                      <!-- / C3 Bar Chart -->
                                                  </div>
                              
                                                  <div class="col-lg-6">
                                                      <!-- C3 Spline -->
                                                      <div class="w-lg-300">
                                                      <h4 class="title">Spline</h4>
                                                      <p>Display as Spline Chart. </p>
                                                      <div id="c3Spline"></div>
                                                      </div>
                                                      <!-- / C3 Spline Chart -->
                                                  </div>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>
                              
                                          <!-- Tab 3 - Picture -->
                                          <div class="tab-pane" id="tab3box2" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-0">
                                                  <div class="row">
                                                  <h4 class="card-title">Photo :
                                                      <span id="updatedPhoto">Tueday 26 June, 2018</span>
                                                  </h4>
                                                  <div class="tab-pane" id="tab3box2" role="tabpanel">
                                                      <div class="row">
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">02:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">12:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">08:00:59 pm</span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-12 d-block mx-auto">
                                                      <button type="button" class="btn btn-animate btn-animate-vertical btn-warning ">
                                                        <span>
                                                          <i class="icon wb-download" aria-hidden="true"></i>Download High Resolution Photo
                                                        </span>
                                                      </button>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>

                                            <!-- Tab 4 - Sound -->
                                            <div class="tab-pane" id="tab4box2" role="tabpanel">
                                              <!-- Panel Table Tools -->
                                              <div class="panel">
                                                <div class="panel-body pt-0">
                                                  <table class="table table-hover dataTable table-striped w-full" id="TableToolsbox1">
                                                    <thead>
                                                      <tr class="text-center">
                                                        <th>Box No.</th>
                                                        <th>Status</th>
                                                        <th>Temp.</th>
                                                        <th>Hum.</th>
                                                        <th>Weight</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>Box 1</td>
                                                        <td class="green-600">Healthy</td>
                                                        <td>32°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>12.4 kg</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Box 2</td>
                                                        <td class="red-600">Collaping</td>
                                                        <td>40°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>50%</td>
                                                        <td>1.45 kg</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Box 3</td>
                                                        <td class="green-600">Healthy</td>
                                                        <td>35°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>70%</td>
                                                        <td>14.5 kg</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                              <!-- / Panel Table Tools -->
                                            </div>

                                            <!-- Tab 5 - Map -->
                                            <div class="tab-pane" id="tab5box2" role="tabpanel">
                                                <div class="container-fluid">
                                                <!-- Google Map -->
                                                <div class="row ">
                                                    <div class="col-md-12 offset-md-3" style="margin:0px">
                                                        <div id="boxMap2" style="width:100%;padding-top: 70%;"></div>
                                                      </div>
                                                </div>
                                
                                                </div>
                                            </div>

                                          </div>
                                        </div>
                                      </div>
                                      <!-- / Tabs Line Top -->
                                    </div>
                                  </div>
                          </div>
                          

                          <!-- BOX 03 -->
                          <a class="list-group-item flex-column align-items-start accordion-toggle" id="listbox3" href="#box3"  data-toggle="collapse" data-parent="#accordion" onclick="moveScoll('listbox3','box3')">
                            <h4 class="list-group-item-heading mt-0 mb-5">
                              BOX3
                            </h4>
                            <div class="row mb-0 text-center">
                              <div class="col-3 px-3">
                                <span class="badge badge-danger" id="boxstatus">ABNORMAL</span>
                              </div>
                              <div class="col-3 px-3">40°
                                <span class="font-size-12">C</span>
                              </div>
                              <div class="col-3 px-3">50%</div>
                              <div class="col-3 px-3">1.45 kg</div>
                            </div>
                          </a>
                          <div class="col-lg-3 hidden-md-up collapse"  id="box3">
                              <div class="card card-shadow">
                                  <div class="col-xl-12">
                                      <!-- Tabs Line Top -->
                                      <div class="mb-10">
                                      <div class="nav-tabs-horizontal" data-plugin="tabs">
                                          <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link active" data-toggle="tab" href="#tab1box3" aria-controls="tab1" role="tab">Overall</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab2box3" aria-controls="tab2" role="tab">Graph</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab3box3" aria-controls="tab3" role="tab">Picture</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab4box3" aria-controls="tab4" role="tab">Sound</a>
                                          </li>
                                          <li class="nav-item" role="presentation">
                                              <a class="nav-link" data-toggle="tab" href="#tab5box3" aria-controls="tab5" role="tab" onclick="drawMap3()">Map</a>
                                          </li>
                                          </ul>
                                          <div class="tab-content pt-20">
                              
                                          <!-- Tab 1 - Overall -->
                                          <div class="tab-pane active" id="tab1box3" role="tabpanel">
                                              <div class="container-fluid">
                                                <!-- Updated Photo -->
                                                <div class="row ">
                                                    <div class="col-md-9 offset-md-3">
                                                      <div class="card">
                                                        <img class="card-img-top w-full" src="../global/photos/placeholder.png" alt="...">
                                                        <div class="card-block text-center mx-auto">
                                                          <h4 class="card-title">
                                                            Photo :
                                                            <span id="updatedPhoto">Tueday 26 June, 2018</span>
                                                          </h4>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </div>
                                              </div>
                                          </div>
                                          
                                          <!-- Tab 2 - Graph -->
                                          <!-- MORE INFORMATION : https://c3js.org/ -->
                                          <!-- MORE INFORMATION - JSON : https://c3js.org/samples/data_json.html -->
                                          <div class="tab-pane" id="tab2box3" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-20">
                                                  <div class="row row-lg">
                              
                                                  <div class="col-lg-6">
                                                      <!-- C3 Bar Chart -->
                                                      <div data-role="w-lg-300">
                                                      <h4 class="title">Bar</h4>
                                                      <p>Display as Bar Chart. </p>
                                                      <div id="c3Bar"></div>
                                                      </div>
                                                      <!-- / C3 Bar Chart -->
                                                  </div>
                              
                                                  <div class="col-lg-6">
                                                      <!-- C3 Spline -->
                                                      <div class="w-lg-300">
                                                      <h4 class="title">Spline</h4>
                                                      <p>Display as Spline Chart. </p>
                                                      <div id="c3Spline"></div>
                                                      </div>
                                                      <!-- / C3 Spline Chart -->
                                                  </div>
                                                  </div>
                                              </div>
                                              </div>
                                          </div>
                              
                                          <!-- Tab 3 - Picture -->
                                          <div class="tab-pane" id="tab3box3" role="tabpanel">
                                              <div class="panel">
                                              <div class="panel-body pt-0">
                                                  <div class="row">
                                                  <h4 class="card-title">Photo :
                                                      <span id="updatedPhoto">Tueday 26 June, 2018</span>
                                                  </h4>
                                                  <div class="tab-pane" id="tab3box3" role="tabpanel">
                                                      <div class="row">
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">02:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">12:00:59 am</span>
                                                          </div>
                                                        </div>
                                                        <div class="col-6 col-md-4">
                                                          <div class="card text-left">
                                                            <img class="img-fluid w-full" src="./global/photos/placeholder.png" alt="...">
                                                            <span id="">08:00:59 pm</span>
                                                          </div>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="row">
                                                    <div class="col-12 d-block mx-auto">
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                              
                                            <!-- Tab 4 - Sound -->
                                            <div class="tab-pane" id="tab4box3" role="tabpanel">
                                              <!-- Panel Table Tools -->
                                              <div class="panel">
                                                <div class="panel-body pt-0">
                                                  <table class="table table-hover dataTable table-striped w-full" id="TableToolsbox1">
                                                    <thead>
                                                      <tr class="text-center">
                                                        <th>Box No.</th>
                                                        <th>Status</th>
                                                        <th>Temp.</th>
                                                        <th>Hum.</th>
                                                        <th>Weight</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                      <tr>
                                                        <td>Box 1</td>
                                                        <td class="green-600">Healthy</td>
                                                        <td>32°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>72%</td>
                                                        <td>12.4 kg</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Box 2</td>
                                                        <td class="red-600">Collaping</td>
                                                        <td>40°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>50%</td>
                                                        <td>1.45 kg</td>
                                                      </tr>
                                                      <tr>
                                                        <td>Box 3</td>
                                                        <td class="green-600">Healthy</td>
                                                        <td>35°
                                                          <span class="font-size-12">C</span>
                                                        </td>
                                                        <td>70%</td>
                                                        <td>14.5 kg</td>
                                                      </tr>
                                                    </tbody>
                                                  </table>
                                                </div>
                                              </div>
                                              <!-- / Panel Table Tools -->
                                            </div>
                                            
                                            <!-- Tab 5 - Map -->
                                            <div class="tab-pane" id="tab5box3" role="tabpanel">
                                                <div class="container-fluid">
                                                <!-- Google Map -->
                                                <div class="row ">
                                                    <div class="col-md-12 offset-md-3" style="margin:0px">
                                                        <div id="boxMap3" style="width:100%;padding-top: 70%;"></div>
                                                      </div>
                                                </div>
                                
                                                </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <!-- / Tabs Line Top -->
                                    </div>
                                  </div>
                          </div>

                          <div id="itembox4"></div>

                          <div id="itembox5"></div>
                          
                        </div>
                      </div>
                      <!-- / List -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- / Panel Boxlist -->
        </div>

        <!-- BoxInfo -->
        <div class="col-xxl-6 col-lg-8 hidden-xs-down" id="mainInfo"></div>

        </div>
      </div>
    </div>
  </div>
  <!-- End Page -->


  <!-- Footer -->
  <footer class="site-footer">
    <div class="site-footer-legal">© 2018
      <a href="">BeeConnex</a>
    </div>
    <div class="site-footer-right">
      Crafted with
      <i class="red-600 wb wb-heart"></i> by
      <a href="">Meta.wish</a>
    </div>
  </footer>

  <!-- Core  -->
  <script src="./global/vendor/babel-external-helpers/babel-external-helpers.js"></script>
  <script src="./global/vendor/jquery/jquery.js"></script>
  <script src="./global/vendor/popper-js/umd/popper.min.js"></script>
  <script src="./global/vendor/bootstrap/bootstrap.js"></script>
  <script src="./global/vendor/animsition/animsition.js"></script>
  <script src="./global/vendor/mousewheel/jquery.mousewheel.js"></script>
  <script src="./global/vendor/asscrollbar/jquery-asScrollbar.js"></script>
  <script src="./global/vendor/asscrollable/jquery-asScrollable.js"></script>
  <script src="./global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>

  <!-- Plugins -->
  <script src="./global/vendor/switchery/switchery.js"></script>
  <script src="./global/vendor/intro-js/intro.js"></script>
  <script src="./global/vendor/screenfull/screenfull.js"></script>
  <script src="./global/vendor/slidepanel/jquery-slidePanel.js"></script>
  <script src="./global/vendor/skycons/skycons.js"></script>
  <!--<script src="././global/vendor/chartist/chartist.min.js"></script>
  <script src="././global/vendor/chartist-plugin-tooltip/chartist-plugin-tooltip.js"></script>-->
  <script src="./global/vendor/aspieprogress/jquery-asPieProgress.min.js"></script>
  <script src="./global/vendor/jvectormap/jquery-jvectormap.min.js"></script>
  <script src="./global/vendor/jvectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
  <script src="./global/vendor/matchheight/jquery.matchHeight-min.js"></script>
  <script src="./global/vendor/datatables.net/jquery.dataTables.js"></script>
  <script src="./global/vendor/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="./global/vendor/datatables.net-fixedheader/dataTables.fixedHeader.js"></script>
  <script src="./global/vendor/datatables.net-fixedcolumns/dataTables.fixedColumns.js"></script>
  <script src="./global/vendor/datatables.net-rowgroup/dataTables.rowGroup.js"></script>
  <script src="./global/vendor/datatables.net-scroller/dataTables.scroller.js"></script>
  <script src="./global/vendor/datatables.net-responsive/dataTables.responsive.js"></script>
  <script src="./global/vendor/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
  <script src="./global/vendor/datatables.net-buttons/dataTables.buttons.js"></script>
  <script src="./global/vendor/datatables.net-buttons/buttons.html5.js"></script>
  <script src="./global/vendor/datatables.net-buttons/buttons.flash.js"></script>
  <script src="./global/vendor/datatables.net-buttons/buttons.print.js"></script>
  <script src="./global/vendor/datatables.net-buttons/buttons.colVis.js"></script>
  <script src="./global/vendor/datatables.net-buttons-bs4/buttons.bootstrap4.js"></script>
  <script src="./global/vendor/asrange/jquery-asRange.min.js"></script>
  <script src="./global/vendor/bootbox/bootbox.js"></script>

  <script src="./global/vendor/d3/d3.min.js"></script>
  <script src="./global/vendor/c3/c3.min.js"></script>

  <!-- Scripts -->
  <script src="./global/js/Component.js"></script>
  <script src="./global/js/Plugin.js"></script>
  <script src="./global/js/Base.js"></script>
  <script src="./global/js/Config.js"></script>

  <script src="./assets/js/Section/Menubar.js"></script>
  <script src="./assets/js/Section/Sidebar.js"></script>
  <script src="./assets/js/Section/PageAside.js"></script>
  <script src="./assets/js/Plugin/menu.js"></script>

  <!-- Config -->
  <script src="./global/js/config/colors.js"></script>
  <script src="./assets/js/config/tour.js"></script>
  <script>Config.set('assets', './assets');</script>

  <!-- Page -->
  <script src="./assets/js/Site.js"></script>
  <script src="./global/js/Plugin/asscrollable.js"></script>
  <script src="./global/js/Plugin/slidepanel.js"></script>
  <script src="./global/js/Plugin/switchery.js"></script>
  <script src="./global/js/Plugin/matchheight.js"></script>
  <script src="./global/js/Plugin/jvectormap.js"></script>
  <script src="./global/js/Plugin/responsive-tabs.js"></script>
  <script src="./global/js/Plugin/closeable-tabs.js"></script>
  <script src="./global/js/Plugin/tabs.js"></script>
  <script src="./global/js/Plugin/datatables.js"></script>

  <script src="./assets/js/chartC3.js"></script>

  <script>
    (function (global, factory) {
      if (typeof define === "function" && define.amd) {
        define('/dashboard/v1', ['jquery', 'Site'], factory);
      } else if (typeof exports !== "undefined") {
        factory(require('jquery'), require('Site'));
      } else {
        var mod = {
          exports: {}
        };
        factory(global.jQuery, global.Site);
        global.dashboardV1 = mod.exports;
      }
    })(this, function (_jquery, _Site) {
      'use strict';

      var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

      (0, _jquery2.default)(document).ready(function ($$$1) {
        (0, _Site.run)();

      });

      // Table Tools
      // -----------
      (function () {

        (0, _jquery2.default)(document).ready(function () {
          var defaults = Plugin.getDefaults("dataTable");

          var options = _jquery2.default.extend(true, {}, defaults, {
            "aoColumnDefs": [{
              'bSortable': false,
              'aTargets': [-1]
            }],
            "iDisplayLength": 5,
            "aLengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
            "sDom": '<"dt-panelmenu clearfix"Bfr>t<"dt-panelfooter clearfix"ip>',
            "buttons": ['copy', 'excel', 'csv', 'pdf', 'print']
          });

          (0, _jquery2.default)('#TableTools').dataTable(options);
        });
      })();
    });
  </script>

  <script>
    function drawMap1() {
      // phone check
      if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)
      ){      

      var map = new google.maps.Map(document.getElementById('boxMap1'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
      });
  
      // Try HTML5 geolocation.
      if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude};
              var beepos = {
                lat: 13.650801,
                lng: 100.492399};
    
              var bounds  = new google.maps.LatLngBounds();
    
              var me = new google.maps.Marker({position:pos, icon:'manmap24.png'});
              me.setMap(map);
              var loc = new google.maps.LatLng(me.position.lat(), me.position.lng());
              bounds.extend(loc);
    
              var bee = new google.maps.Marker({position:beepos, icon:'beemap32.png'});
              bee.setMap(map);
              var loc2 = new google.maps.LatLng(bee.position.lat(), bee.position.lng());
              bounds.extend(loc2);
    
              map.fitBounds(bounds);      //auto zoom
              map.panToBounds(bounds);    //auto center
            });
          }
      }
    }
  </script>
  <script>
    function drawMap2() {
  
      if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)
      ){
        var map = new google.maps.Map(document.getElementById('boxMap2'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 6
        });
    
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude};
                var beepos = {
                  lat: 13.650801,
                  lng: 104.492399};
      
                var bounds  = new google.maps.LatLngBounds();
      
                var me = new google.maps.Marker({position:pos, icon:'manmap24.png'});
                me.setMap(map);
                var loc = new google.maps.LatLng(me.position.lat(), me.position.lng());
                bounds.extend(loc);
      
                var bee = new google.maps.Marker({position:beepos, icon:'beemap32.png'});
                bee.setMap(map);
                var loc2 = new google.maps.LatLng(bee.position.lat(), bee.position.lng());
                bounds.extend(loc2);
      
                map.fitBounds(bounds);      //auto zoom
                map.panToBounds(bounds);    //auto center
              });
            }
      }
    }
  </script>
  <script>
    function drawMap3() {
  
      if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)
      ){

        var map = new google.maps.Map(document.getElementById('boxMap3'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 6
        });
    
        // Try HTML5 geolocation.
        if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(function(position) {
                var pos = {
                  lat: position.coords.latitude,
                  lng: position.coords.longitude};
                var beepos = {
                  lat: 13.650801,
                  lng: 104.492399};
      
                var bounds  = new google.maps.LatLngBounds();
      
                var me = new google.maps.Marker({position:pos, icon:'manmap24.png'});
                me.setMap(map);
                var loc = new google.maps.LatLng(me.position.lat(), me.position.lng());
                bounds.extend(loc);
      
                var bee = new google.maps.Marker({position:beepos, icon:'beemap32.png'});
                bee.setMap(map);
                var loc2 = new google.maps.LatLng(bee.position.lat(), bee.position.lng());
                bounds.extend(loc2);
      
                map.fitBounds(bounds);      //auto zoom
                map.panToBounds(bounds);    //auto center
              });
            }
      }
    }
  </script>
  <script>
    function moveScoll(id, box){
      if( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i)
      ){
        var elmnt = document.getElementById(id);
              elmnt.scrollIntoView();
      }else{
        getMainInfo(box);
      }
    }
  </script>

  <script>
    function boxItem(boxid){
      $.get( "php/boxItem.php",{box:boxid},function(result) {
            $("#"+"item"+boxid).html(result);
        } )
    }

    boxItem('box4');
    boxItem('box5');
  </script>

  <script>
    function getMainInfo(boxid) {
      $.get( "php/boxInfo.php" , {box:boxid},function(result) {
          $("#"+"mainInfo").html( result);
      } )                    
    }  
    
    if(!( navigator.userAgent.match(/Android/i)
      || navigator.userAgent.match(/webOS/i)
      || navigator.userAgent.match(/iPhone/i)
      || navigator.userAgent.match(/iPad/i)
      || navigator.userAgent.match(/iPod/i)
      || navigator.userAgent.match(/BlackBerry/i)
      || navigator.userAgent.match(/Windows Phone/i))
    ){
        getMainInfo('box1');
      }
  </script>

  <script>
    function filterFunction() {
        var input, filter, ul, li, a, i;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("boxlist");
        li = ul.getElementsByTagName("a");
        for (i = 0; i < li.length; i++) {
            a = li[i];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
    function filterStatus(input) {
        var  filter, ul, li, a, i;
        filter = input.toUpperCase();
        ul = document.getElementById("boxlist");
        li = ul.getElementsByTagName("a");
        for (i = 0; i < li.length; i++) {
            a = li[i];
            if (a.innerHTML.toUpperCase().indexOf(filter) > -1 || input=='*') {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
  </script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCekjXwUzMXbmDOqzsdwo68dgBWPb4TTWI&"></script>

</body>

</html>