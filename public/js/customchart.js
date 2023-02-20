var options = {
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
}],
  chart: {
  height: 350,
  type: 'line',
  toolbar: {
    show: true,
    offsetX: 0,
    offsetY: 0,
    tools: {
      download: true,
      selection: true,
      zoom: true,
      zoomin: true,
      zoomout: true,
      pan: true,
      reset: true | '<img src="/static/icons/reset.png" width="20">',
      customIcons: []
    },
    export: {
      csv: {
        filename: undefined,
        columnDelimiter: ',',
        headerCategory: 'category',
        headerValue: 'value',
        dateFormatter(timestamp) {
          return new Date(timestamp).toDateString()
        }
      },
      svg: {
        filename: undefined,
      },
      png: {
        filename: undefined,
      }
    },
    autoSelected: 'zoom' 
  },              
},
dataLabels: {
  enabled: true
},
stroke: {
  curve: 'straight'
},
title: {
  align: 'left'
},
colors : ["#349ccc"],
grid: {
  row: {
    opacity: 0.5
  },
},
xaxis: {
  categories: ['2022-12-04', '2022-12-05', '2022-12-06', '2022-12-07', '2022-12-08', '2022-12-09', '2022-12-10', '2022-12-11', '2022-12-12'],
}
};

var chart = new ApexCharts(document.querySelector("#chart"), options);
chart.render();