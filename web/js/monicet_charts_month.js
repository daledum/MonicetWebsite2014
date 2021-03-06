function initChart(series, categories, chatType, stacking, title) {
  var chart = new Highcharts.Chart({
    chart: {
         renderTo: 'chart-image',
         defaultSeriesType: 'column'
      },
      title: {
         text: title
      },
      xAxis: {
         categories: categories
      },
      yAxis: {
         min: 0,
         title: {
            text: 'Número de saídas'
         },
         stackLabels: {
            enabled: true,
            style: {
               fontWeight: 'bold',
               color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
            }
         }
      },
      tooltip: {
         formatter: function() {
            return '<b>'+ this.x +'</b><br/>'+
                this.series.name +': '+ this.y +'<br/>'+
                'Total: '+ this.point.stackTotal;
         }
      },
      plotOptions: {
         column: {
            stacking: 'normal',
         }
      },
      credits: {
        href: 'http://www.monicet.net',
        text: 'MONICET.net',
      },
      series: series
  });

}

function updateChart() {
  $("#chart-loading").show();
  var categories = [];
  var series = [];
  $.ajax({
      url: "/index.php/monthChartResults?_=" + Math.floor(Math.random()*1000001),
      data: {
        "year": $("#year").val(),
        "month": $("#month").val(),
        "chart-item": $("#chart-item").val(),
        "company_id": $("#company_id").val(),
        "select_all": $("#select-all-toggle").val(),
      },
      success: function(rsp) {
          var jsonRsp = $.parseJSON(rsp);
          var chartType = 'bar';
          var stacking = 'normal';
          if ($("#chart-item").val() == 0) {
              var title = 'Por barco';
          }
          else {
              var title = 'Por guia';
          } 
          initChart(jsonRsp.series, jsonRsp.categories, chartType, stacking, title);
          $("#chart-loading").hide();
      }
  });
}

$(function() {
  updateChart();
  
  $("#selected-results").change(function(){
    $("#select-all-toggle").val($(this).val());
  });
  
  $(".chart-container .left-sidebar input, .chart-container .left-sidebar select").change(function(){
    updateChart();
  });
});
