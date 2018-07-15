<?php
    $box = $_GET["box"];

    echo '
    <!-- Panel Information -->
    <div class="card card-shadow" id="">
      <div class="card-block p-30">
        <h3 class="card-title">
        '.strtoupper($box).'
          <div class="card-header-actions">
            <span class="badge badge-success badge-round"> Healthy </span>
          </div>
        </h3>
      </div>
      <div class="col-xl-12">
        <!-- Tabs Line Top -->
        <div class="mb-10">
          <div class="nav-tabs-horizontal" data-plugin="tabs">
            <ul class="nav nav-tabs nav-tabs-line tabs-line-top" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" data-toggle="tab" href="#tab1" aria-controls="tab1" role="tab">Overall</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab2" aria-controls="tab2" role="tab">Graph</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab3" aria-controls="tab3" role="tab">Picture</a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab4" aria-controls="tab4" role="tab">Sound</a>
              </li>
              <li class="nav-item" role="presentation">
              <a class="nav-link" data-toggle="tab" href="#tab5" aria-controls="tab4" role="tab" onclick="drawMap()">Map</a>
            </li>
            </ul>
            <div class="tab-content pt-20">
              <!-- Tab 1 - Overall -->
              <div class="tab-pane active" id="tab1" role="tabpanel">
                <div class="container-fluid">
                  <!-- Overall Cards -->
                  <div class="row">
                    <!-- Status -->
                    <div class="col-xxl-12 col-lg-3 p-lg-5 col-sm-4 h-p100">
                      <div class="card card-shadow card-completed-options" style="border: 1px solid #e4eaec;">
                        <div class="card-block p-5">
                          <div class="row">
                            <div class="col-12">
                              <div class="counter text-center blue-grey-700">
                                <div class="counter-label green-600 mt-5">
                                  HEALTHY
                                </div>
                                <div class="counter-number green-600 font-size-30 mt-5">
                                  <i class="icon ti-face-smile font-size-60 mx-5"></i>
                                  <!-- ti-face-sad -->
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Temperature -->
                    <div class="col-xxl-12 col-lg-3 p-lg-5 col-sm-4 h-p100">
                      <div class="card card-shadow card-completed-options" style="border: 1px solid #e4eaec;">
                        <div class="card-block">
                          <!-- p-5 -->
                          <div class="row">
                            <div class="col-12">
                              <div class="counter text-center blue-grey-700">
                                <div class="counter-label mt-5">
                                  TEMPERATURE
                                </div>
                                <div class="counter-number red-600 font-size-30 mt-5">
                                  <i class="wi-day-cloudy font-size-24"></i>
                                  24°
                                  <span class="font-size-12">C</span>
                                </div>
                                <!--<p class="blue-grey-400 mb-5">MONDAY MAY 11, 2017</p>-->
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Humidity -->
                    <div class="col-xxl-12 col-lg-3 p-lg-5 col-sm-4 h-p100">
                      <div class="card card-shadow card-completed-options" style="border: 1px solid #e4eaec;">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-12">
                              <div class="counter text-center blue-grey-700">
                                <div class="counter-label mt-5">
                                  HUMIDITY
                                </div>
                                <div class="counter-number red-600 font-size-30 mt-5">
                                  <i class="icon fa-tint font-size-24 mb-5 ml-3"></i>
                                  <!-- fa-thermometer -->
                                  70 %
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Weight -->
                    <div class="col-xxl-12 col-lg-3 p-lg-5 col-sm-4 h-p100">
                      <div class="card card-shadow card-completed-options" style="border: 1px solid #e4eaec;">
                        <div class="card-block">
                          <div class="row">
                            <div class="col-12">
                              <div class="counter text-center blue-grey-700">
                                <div class="counter-label mt-5">
                                  WEIGHT
                                </div>
                                <div class="counter-number red-600 font-size-30 mt-5">
                                  <i class="icon fa-cubes font-size-24 mb-5 ml-3"></i>
                                  36 kg
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6 offset-md-4">
                    <audio controls>
                      <source src="http://translate.google.com/translate_tts?tl=en&q=Hello%2C+World" type="audio/mpeg">
                    </audio>
                    </div>
                  </div>
                  <!-- Updated Photo -->
                    <div class="row">
                        <div class="col-md-9 offset-md-2">
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
              <div class="tab-pane" id="tab2" role="tabpanel">
                <div class="panel">
                  <div class="panel-body pt-20">
                    <div class="row row-lg">
                      <div class="col-lg-9 offset-md-2">
                        <!-- C3 Bar Chart -->
                          <h4 class="title">Temperature & Humidity</h4>
                          <canvas id="TempHumiChart" style="width:60%,padding-top: 56.25%;"></canvas>
                        <!-- / C3 Bar Chart -->
                      </div>
                    </div>
                    <div class="row row-lg">
                      <div class="col-lg-9 offset-md-2">
                        <!-- C3 Spline -->
                          <h4 class="title">Weight</h4>
                          <canvas id="WeightChart" style="width:60%,padding-top: 56.25%;"></canvas>
                        <!-- / C3 Spline Chart -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tab 3 - Picture -->
              <div class="tab-pane" id="tab3" role="tabpanel">
                <div class="panel">
                  <div class="panel-body pt-0">
                    <div class="row">
                      <h4 class="card-title">Photo :
                        <span id="updatedPhoto">Tueday 26 June, 2018</span>
                      </h4>
                      <div class="tab-pane" id="tab3" role="tabpanel">
                        <div class="row">
                          <div class="col-6 col-md-4">
                            <div class="card text-left">
                              <img class="img-fluid w-full" src="../global/photos/placeholder.png" alt="...">
                              <span id="">02:00:59 am</span>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="card text-left">
                              <img class="img-fluid w-full" src="../global/photos/placeholder.png" alt="...">
                              <span id="">12:00:59 am</span>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="card text-left">
                              <img class="img-fluid w-full" src="../global/photos/placeholder.png" alt="...">
                              <span id="">08:00:59 pm</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Tab 4 - Sound -->
              <div class="tab-pane" id="tab4" role="tabpanel">
                <!-- Panel Table Tools -->
                <div class="panel">
                  <div class="panel-body pt-0">
                    <table class="table table-hover dataTable table-striped w-full" id="TableTools">
                      <thead>
                        <tr class="text-center">
                          <th>Time</th>
                          <th>Sound.</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td align="center">
                            12:30
                          </td>
                          <td align="center">
                            <span class="badge badge-success badge-round"> <font size="3">Healthy</font></span>
                          </td>
                          <td align="center">
                            <audio controls>
                              <source src="http://translate.google.com/translate_tts?tl=en&q=Hello%2C+World" type="audio/mpeg">
                            </audio>
                          </td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- / Panel Table Tools -->
              </div>
              <!-- Tab 5 - Map -->
              <div class="tab-pane" id="tab5" role="tabpanel">
                  <div class="container-fluid">
                  <!-- Google Map -->
                  <div class="row ">
                      <div class="col-md-12 offset-md-3" style="margin:0px">
                          <div id="mainMap" style="width:100%;padding-top: 70%;"></div>
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
    <!-- / Panel Infornmation -->
    
  <script>
    function drawMap() {
          
      var map = new google.maps.Map(document.getElementById("mainMap"), {
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
    var ctx = document.getElementById("TempHumiChart").getContext("2d");
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
    var ctx2 = document.getElementById("WeightChart").getContext("2d");
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