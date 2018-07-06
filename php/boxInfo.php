<?php
    $box = $_GET["box"];

    echo '<div class="card card-shadow">
    <div class="card-block p-30 hidden-xs-down">
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
                <a class="nav-link active" data-toggle="tab" href="#tab1'.$box.'" aria-controls="tab1" role="tab">Overall</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab2'.$box.'" aria-controls="tab2" role="tab">Graph</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab3'.$box.'" aria-controls="tab3" role="tab">Picture</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" data-toggle="tab" href="#tab4'.$box.'" aria-controls="tab4" role="tab">Download</a>
            </li>
            </ul>
            <div class="tab-content pt-20">

            <!-- Tab 1 - Overall -->
            <div class="tab-pane active" id="tab1'.$box.'" role="tabpanel">
                <div class="container-fluid">
                <!-- Overall Cards -->
                <div class="row hidden-xs-down">
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

                <!-- Google Map -->
                <div class="row ">
                    <div class="col-md-12 offset-md-3" style="margin:0px">
                    <div id="googleMap'.$box.'" style="width:100%;padding-top:56.25%%;"></div>
                    </div>
                </div>

                </div>
            </div>

            <!-- Tab 2 - Graph -->
            <!-- MORE INFORMATION : https://c3js.org/ -->
            <!-- MORE INFORMATION - JSON : https://c3js.org/samples/data_json.html -->
            <div class="tab-pane" id="tab2'.$box.'" role="tabpanel">
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
            <div class="tab-pane" id="tab3'.$box.'" role="tabpanel">
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
              <div class="tab-pane" id="tab4'.$box.'" role="tabpanel">
                <!-- Panel Table Tools -->
                <div class="panel">
                  <div class="panel-body pt-0">
                    <table class="table table-hover dataTable table-striped w-full" id="TableTools'.$box.'">
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
            </div>
          </div>
        </div>
        <!-- / Tabs Line Top -->
      </div>
    </div>
    ';

?>