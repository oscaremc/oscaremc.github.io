class DatosBarras {
    constructor(x1, y1, x2, y2, x3, y3, x4, y4, x5, y5) {
        this.x1 = x1;
        this.y1 = y1;
        this.x2 = x2;
        this.y2 = y2;
        this.x3 = x3;
        this.y3 = y3;
        this.x4 = x4;
        this.y4 = y4;
        this.x5 = x5;
        this.y5 = y5;
    }
}


document.getElementById('formm')
    .addEventListener('button', function (e) {
        const x1 = document.getElementById('inputUnoX').value;
        const y1 = document.getElementById('inputUnoY').value;
        const x2 = document.getElementById('inputDosX').value;
        const y2 = document.getElementById('inputDosY').value;
        const x3 = document.getElementById('inputTresX').value;
        const y3 = document.getElementById('inputTresY').value;
        const x4 = document.getElementById('inputCuatroX').value;
        const y4 = document.getElementById('inputCuatroY').value;
        const x5 = document.getElementById('inputCincoX').value;
        const y5 = document.getElementById('inputCincoY').value;

        const product = new DatosBarras(x1, y1, x2, y2, x3, y3, x4, y4, x5, y5);
        console.log(product);

        e.preventDefault();
    })

    Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        accessibility: {
            announceNewData: {
                enabled: true
            }
        },
        xAxis: {
            type: 'category'
        },
        yAxis: {
            title: {
                text: 'Valores del eje Y'
            }
    
        },
        legend: {
            enabled: false
        },
        plotOptions: {
            series: {
                borderWidth: 0,
                dataLabels: {
                    enabled: true,
                    format: '{point.y:.1f}%'
                }
            }
        },
    
        tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
        },
    
        series: [
            {
                name: "Browsers",
                colorByPoint: true,
                data: [
                    {
                        name: DatosBarras.x1,
                        y: 7.98,
                        drilldown: "Chrome"
                    },
                    {
                        name: "Firefox",
                        y: 10.57,
                        drilldown: "Firefox"
                    },
                    {
                        name: "Internet Explorer",
                        y: 7.23,
                        drilldown: "Internet Explorer"
                    },
                    {
                        name: "Safari",
                        y: 5.58,
                        drilldown: "Safari"
                    },
                    {
                        name: "Edge",
                        y: 4.02,
                        drilldown: "Edge"
                    },
                    {
                        name: "Opera",
                        y: 1.92,
                        drilldown: "Opera"
                    },
                    {
                        name: "Other",
                        y: 7.62,
                        drilldown: null
                    }
                ]
            }
        ],
    });