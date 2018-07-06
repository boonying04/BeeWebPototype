(function(global, factory) {
  if (typeof define === "function" && define.amd) {
    define("/charts/c3", ["jquery", "Site"], factory);
  } else if (typeof exports !== "undefined") {
    factory(require("jquery"), require("Site"));
  } else {
    var mod = {
      exports: {}
    };
    factory(global.jQuery, global.Site);
    global.chartsC3 = mod.exports;
  }
})(this, function(_jquery, _Site) {
  "use strict";

  var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

  (0, _jquery2.default)(document).ready(function($$$1) {
    (0, _Site.run)();
  });

  // C3 Spline Chart
  // -----------------
  (function() {
    var spline_chart = c3.generate({
      bindto: "#c3Spline",
      size: {
        width: 300
      },
      data: {
        x: "x",
        columns: [
          [
            "x",
            "2018-06-01",
            "2018-06-02",
            "2018-06-03",
            "2018-06-04",
            "2018-06-05",
            "2018-06-06",
            "2018-06-07",
            "2018-06-08",
            "2018-06-09",
            "2018-06-10"
          ],
          ["data1", 30, 200, 100, 350, 150, 250, 30, 200, 100, 400, 150, 250],
          ["data2", 100, 100, 50, 300, 350, 50, 330, 100, 230, 200, 50, 350]
        ],
        type: "spline"
      },
      axis: {
        x: {
          type: "timeseries",
          /*
          tick: {
            // this also works for non timeseries data
            values: [
              "2018-06-01",
              "2018-06-02",
              "2018-06-03",
              "2018-06-04",
              "2018-06-05",
              "2018-06-06",
              "2018-06-07",
              "2018-06-08",
              "2018-06-09",
              "2018-06-10"
            ]
          }
          */
          tick: {
            outer: false,
            format: "%m-%d-%Y"
          }
        },
        y: {
          max: 400,
          min: 0,
          tick: {
            outer: false,
            count: 9,
            values: [0, 50, 100, 150, 200, 250, 300, 350, 400]
          }
        }
      },
      color: {
        pattern: [Config.colors("primary", 600), Config.colors("green", 600)]
      },

      grid: {
        x: {
          show: false
        },
        y: {
          show: true
        }
      }
    });
  })();

  // C3 Bar Chart
  // --------------
  (function() {
    var bar_chart = c3.generate({
      bindto: "#c3Bar",
      size: {
        width: 300
      },
      data: {
        columns: [
          ["data1", 30, 200, 100, 400, 150, 250],
          ["data2", 130, 100, 140, 200, 150, 50]
        ],
        type: "bar"
      },
      bar: {
        // width: {
        //  ratio: 0.55 // this makes bar width 55% of length between ticks
        // }
        width: {
          max: 20
        }
      },
      color: {
        pattern: [
          Config.colors("orange", 400),
          Config.colors("blue-grey", 300),
          Config.colors("grey", 300)
        ]
      },
      grid: {
        y: {
          show: true
        },
        x: {
          show: false
        }
      }
    });

    setTimeout(function() {
      bar_chart.load({
        columns: [["data3", 130, -150, 200, 300, -200, 100]]
      });
    }, 1000);
  })();

  // Example C3 Timeseries Line
  // ---------------------
  /*
  (function() {
    var time_series_chart = c3.generate({
      bindto: "#exampleC3TimeSeries",
      data: {
        x: "x",
        columns: [
          [
            "x",
            "2013-01-01",
            "2013-01-02",
            "2013-01-03",
            "2013-01-04",
            "2013-01-05",
            "2013-01-06"
          ],
          ["data1", 80, 125, 100, 220, 80, 160],
          ["data2", 40, 85, 45, 155, 50, 65]
        ]
      },
      color: {
        pattern: [
          Config.colors("primary", 600),
          Config.colors("green", 600),
          Config.colors("red", 500)
        ]
      },
      padding: {
        right: 40
      },
      axis: {
        x: {
          type: "timeseries",
          tick: {
            outer: false,
            format: "%Y-%m-%d"
          }
        },
        y: {
          max: 300,
          min: 0,
          tick: {
            outer: false,
            count: 7,
            values: [0, 50, 100, 150, 200, 250, 300]
          }
        }
      },
      grid: {
        x: {
          show: false
        },
        y: {
          show: true
        }
      }
    });

    setTimeout(function() {
      time_series_chart.load({
        columns: [["data3", 210, 180, 260, 290, 250, 240]]
      });
    }, 1000);
  })();
  */
});
