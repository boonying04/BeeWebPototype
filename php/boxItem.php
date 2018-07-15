<?php
    $box = $_GET["box"];
    $month = ['dummy','January','February','March','April','May','June','July','August','September','October','November','December'];
    $class = ['ABNORMAL','NORMAL'];

    $serverName = "beeconnexsql.database.windows.net";
    $connectionOptions = array(
        "Database" => "beeconnex_db",
        "Uid" => "oat",
        "PWD" => "#Orating0315"
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    if( $conn === false ) {
        echo("cannot connect" . PHP_EOL);
    }
    #---------------------- SELECT TOP 3-------------------------#
    
    $sql= "SELECT TOP 3 * FROM dbo.beeconnex_tbl WHERE BoxID = '".$box."' ORDER BY time_stamp DESC ";

    $stmp= sqlsrv_query($conn, $sql);
    $count = 0;
    while ($row = sqlsrv_fetch_array($stmp)){
        $temp[$count] = $row['temp'];
        $humi[$count] = $row['humi'];
        $weig[$count] = $row['weig'];
        $pic[$count] = $row['pic'];
        $status[$count] = $class[$row['status']];
        $count++;
    }
  #----------------------------Time update--------------------------------------#
    
    $stmp= sqlsrv_query($conn, $sql);
    $count = 0;
    while ($count < 3){
      sqlsrv_fetch($stmp);
      $timeupdate[$count] = sqlsrv_get_field($stmp,2, SQLSRV_PHPTYPE_STRING(SQLSRV_ENC_CHAR));
      $count++;
    }
  #----------------------------- DAY MONTH YEAR ----------------------------------------#
  $count = 0;
  while ($count < 3){
    $get_time = new Datetime($timeupdate[$count]);
    $result = $get_time->format('Y-m-d-H:i-s');
    $result = explode('-',$result);
    //$year[$count] = $result[0];
    $nummonth[$count] = (int)$result[1];
    $day[$count] = $result[2];
    $hour_min[$count] = $result[3];
    $count++;
    //echo $month[$nummonth];
  }
  //strtoupper($box)
  #---------------------------------------------------------------------#
    
    echo '<a class="list-group-item flex-column align-items-start accordion-toggle" id="list'.$box.'" href="#'.$box.'"  data-toggle="collapse" data-parent="#accordion" onclick="moveScoll'.$box.'()">
    <h4 class="list-group-item-heading mt-0 mb-5">
    '.strtoupper($box).'
    </h4>
    <div class="row mb-0 text-center">
      <div class="col-3 px-3">
        <span class="badge badge-danger" id="boxstatus">'.$status[0].'</span>
      </div>
      <div class="col-3 px-3">'.$temp[0].'°
        <span class="font-size-12">C</span>
      </div>
      <div class="col-3 px-3">'.$humi[0].'%</div>
      <div class="col-3 px-3">'.$weig[0].' kg</div>
    </div>
  </a>
  <div class="col-lg-3 hidden-md-up collapse"  id="'.$box.'">
      <div class="card card-shadow">
          <div class="col-xl-12">
              <!-- Tabs Line Top -->
              <div class="mb-10">
              <div class="nav-tabs-horizontal" data-plugin="tabs">
                  <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
                  <li class="nav-item" role="presentation">
                      <a class="nav-link active" data-toggle="tab" href="#tab1'.$box.'" aria-controls="tab1" role="tab">Overall</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="tab" href="#tab2'.$box.'" aria-controls="tab2" role="tab">Graph</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="tab" href="#tab3'.$box.'" aria-controls="tab3" role="tab">Picture</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="tab" href="#tab4'.$box.'" aria-controls="tab4" role="tab">Sound</a>
                  </li>
                  <li class="nav-item" role="presentation">
                      <a class="nav-link" data-toggle="tab" href="#tab5'.$box.'" aria-controls="tab5" role="tab" onclick="drawMap'.$box.'()">Map</a>
                  </li>
                  </ul>
                  <div class="tab-content pt-20">
      
                  <!-- Tab 1 - Overall -->
                  <div class="tab-pane active" id="tab1'.$box.'" role="tabpanel">
                      <div class="container-fluid">

                      <div class="row">
                        <div class="col-md-6 offset-md-4">
                        <audio controls>
                          <source src="http://translate.google.com/translate_tts?tl=en&q=Hello%2C+World" type="audio/mpeg">
                        </audio>
                        </div>
                      </div>
                        <!-- Updated Photo -->
                        <div class="row ">
                            <div class="col-md-9 offset-md-2">
                              <div class="card">
                                <img class="card-img-top w-full" src="'.$pic[0].'" alt="...">
                                <div class="card-block text-center mx-auto">
                                  <h4 class="card-title">
                                    Photo :
                                    <span id="updatedPhoto">'.$day[0].' '.$month[$nummonth[0]].' , '.$hour_min[0].'</span>
                                  </h4>
                                </div>
                              </div>
                            </div>
                        </div>
                      </div>
                  </div>
                  
                  <!-- Tab 2 - Graph -->
                  <<div class="tab-pane" id="tab2'.$box.'" role="tabpanel">
                  <div class="panel">
                    <div class="panel-body pt-20">
                      <div class="row row-lg">
                        <div class="col-lg-9 offset-md-2" style="padding:0px">
                          <!-- C3 Bar Chart -->
                            <h4 class="title">Temperature & Humidity</h4>
                            <canvas id="TempHumiChart'.$box.'" style="width:60%,padding-top: 70%;"></canvas>
                          <!-- / C3 Bar Chart -->
                        </div>
                      </div>
                      <div class="row row-lg">
                        <div class="col-lg-9 offset-md-2" style="padding:0px">
                          <!-- C3 Spline -->
                            <h4 class="title">Weight</h4>
                            <canvas id="WeightChart'.$box.'" style="width:60%;"></canvas>
                          <!-- / C3 Spline Chart -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
      
                  <!-- Tab 3 - Picture -->
                  <div class="tab-pane" id="tab3'.$box.'" role="tabpanel">
                      <div class="panel">
                      <div class="panel-body pt-0">
                          <div class="row">
                          <h4 class="card-title">Photo</h4>
                          <div class="tab-pane" id="tab3'.$box.'" role="tabpanel">
                              <div class="row">
                                <div class="col-6 col-md-4">
                                  <div class="card text-left">
                                    <img class="img-fluid w-full" src="'.$pic[0].'" alt="...">
                                    <span id="">'.$day[0].' '.$month[$nummonth[0]].' , '.$hour_min[0].'</span>
                                  </div>
                                </div>
                                <div class="col-6 col-md-4">
                                  <div class="card text-left">
                                    <img class="img-fluid w-full" src="'.$pic[1].'" alt="...">
                                    <span id="">'.$day[1].' '.$month[$nummonth[1]].' , '.$hour_min[1].'</span>
                                  </div>
                                </div>
                                <div class="col-6 col-md-4">
                                  <div class="card text-left">
                                    <img class="img-fluid w-full" src="'.$pic[2].'" alt="...">
                                    <span id="">'.$day[2].' '.$month[$nummonth[2]].' , '.$hour_min[2].'</span>
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
                    <div class="tab-pane" id="tab4'.$box.'" role="tabpanel">
                    <!-- Panel Table Tools -->
                    <div class="panel">
                      <div class="panel-body pt-0" style="padding:0px;">
                        <table class="table table-hover dataTable table-striped w-full" id="TableTools" style="width:100%">
                          <tbody>
    
                            <tr>
                              <td>
                                <audio controls align="left" style="width:100px;">
                                  <source src="http://translate.google.com/translate_tts?tl=en&q=Hello%2C+World" type="audio/mpeg">
                                </audio>
                              </td>
                              <td align="right" style="vertical-align:middle;">
                                <span>12:30</span>
                                <span>15JUL</span>
                                <span class="badge badge-success badge-round"> <font size="1">Healthy</font></span>
                              </td>
                            </tr>
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- / Panel Table Tools -->
                  </div>
                    
                    <!-- Tab 5 - Map -->
                    <div class="tab-pane" id="tab5'.$box.'" role="tabpanel">
                        <div class="container-fluid">
                        <!-- Google Map -->
                        <div class="row ">
                            <div class="col-md-12 offset-md-3" style="margin:0px">
                                <div id="'.$box.'Map" style="width:100%;padding-top: 70%;"></div>
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

<script>
    function moveScoll'.$box.'(){
        if( navigator.userAgent.match(/Android/i)
        || navigator.userAgent.match(/webOS/i)
        || navigator.userAgent.match(/iPhone/i)
        || navigator.userAgent.match(/iPad/i)
        || navigator.userAgent.match(/iPod/i)
        || navigator.userAgent.match(/BlackBerry/i)
        || navigator.userAgent.match(/Windows Phone/i)
        ){
            var elmnt = document.getElementById("list'.$box.'");
                elmnt.scrollIntoView();
        }
    }
</script>

<script>
    function drawMap'.$box.'() {
        var map = new google.maps.Map(document.getElementById("'.$box.'Map"), {
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
    
              var me = new google.maps.Marker({position:pos, icon:"manmap24.png"});
              me.setMap(map);
              var loc = new google.maps.LatLng(me.position.lat(), me.position.lng());
              bounds.extend(loc);
    
              var bee = new google.maps.Marker({position:beepos, icon:"beemap32.png"});
              bee.setMap(map);
              var loc2 = new google.maps.LatLng(bee.position.lat(), bee.position.lng());
              bounds.extend(loc2);
    
              map.fitBounds(bounds);      //auto zoom
              map.panToBounds(bounds);    //auto center
            });
          }
    }
</script>

<script>
    var ctx = document.getElementById("TempHumiChart'.$box.'").getContext("2d");
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: "line",
    
        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Temperature",
                backgroundColor: "rgb(205, 75, 5, .3)",
                borderColor: "rgb(205, 75, 5)",
                data: [0, 10, 5, 2, 20, 30, 45],
            },{
                label: "Humidity",
                backgroundColor: "rgb(120, 130, 255, .3)",
                borderColor: "rgb(120, 130, 255)",
                data: [45, 30, 20, 2, 5, 10, 0],
            }]
        },
    
        // Configuration options go here
        options:{
          legend: {
              labels: {
                  // fontColor: "#c4c4c4",
                  fontSize: 13
              }
          },
          scales: {
              yAxes : [{
                  ticks : {
                      // fontColor: "#b7b7b7",
                      fontSize: 11,
                      stepSize: 20,
                      max : 100,    
                      min : 0,
                  },
                  gridLines: {
                      display: true ,
                      // color: "#303030"
                      }
              }],
              xAxes: [{
                  ticks: {
                      // fontColor: "#b7b7b7",
                      fontSize: 12
                  },
                  gridLines: {
                      display: true ,
                      // color: "#303030"
                  }
              }]
          }
      }
    });
</script>

<script>
    var ctx2 = document.getElementById("WeightChart'.$box.'").getContext("2d");
    var chart2 = new Chart(ctx2, {
        // The type of chart we want to create
        type: "line",
    
        // The data for our dataset
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Weight",
                backgroundColor: "rgb(250, 180, 0, .3)",
                borderColor: "rgb(250, 180, 0)",
                data: [0, 10, 5, 2, 20, 30, 45],
            }]
        },
    
        // Configuration options go here
        options:{
          legend: {
              labels: {
                  // fontColor: "#c4c4c4",
                  fontSize: 13
              }
          },
          scales: {
              yAxes : [{
                  ticks : {
                      // fontColor: "#b7b7b7",
                      fontSize: 11,
                      stepSize: 10,
                      max : 40,    
                      min : 0,
                  },
                  gridLines: {
                      display: true ,
                      // color: "#303030"
                      }
              }],
              xAxes: [{
                  ticks: {
                      // fontColor: "#b7b7b7",
                      fontSize: 12
                  },
                  gridLines: {
                      display: true ,
                      // color: "#303030"
                  }
              }]
          }
      }
    });
</script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCekjXwUzMXbmDOqzsdwo68dgBWPb4TTWI&"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
  ';

?>