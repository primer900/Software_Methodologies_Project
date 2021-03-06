/**
 * Created by Chris Procak on 10/26/2015.
 */

$(function () {
    $('#container2').highcharts({
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Weekly Temperature Forecast',
            x: -20 //center
        },
        subtitle: {
            x: -20
        },
        xAxis: {
                categories: ['2/20/2004 12:00:00 AM', '2/20/2004 1:00:00 AM', '2/20/2004	2:00:00 AM', '2/20/2004	3:00:00 AM',
            '2/20/2004	4:00:00 AM', '2/20/2004	5:00:00 AM', '2/20/2004	6:00:00 AM', '2/20/2004	7:00:00 AM', '2/20/2004	8:00:00 AM',
            '2/20/2004	9:00:00 AM', '2/20/2004	10:00:00 AM', '2/20/2004	11:00:00 AM', '2/20/2004	12:00:00 PM',
            '2/20/2004	1:00:00 PM', '2/20/2004	2:00:00 PM', '2/20/2004	3:00:00 PM', '2/20/2004	4:00:00 PM',
            '2/20/2004	5:00:00 PM', '2/20/2004	6:00:00 PM', '2/20/2004	7:00:00 PM', '2/20/2004	8:00:00 PM', '2/20/2004	9:00:00 PM',
            '2/20/2004	10:00:00 PM', '2/20/2004	11:00:00 PM', '2/21/2004	12:00:00 AM', '2/21/2004	1:00:00 AM',
            '2/21/2004	2:00:00 AM', '2/21/2004	3:00:00 AM', '2/21/2004	3:00:00 AM', '2/21/2004	5:00:00 AM',
            '2/21/2004	6:00:00 AM', '2/21/2004	7:00:00 AM', '2/21/2004	8:00:00 AM', '2/21/2004	9:00:00 AM',
            '2/21/2004	10:00:00 AM', '2/21/2004	11:00:00 AM', '2/21/2004	12:00:00 PM', '2/21/2004	1:00:00 PM',
            '2/21/2004	2:00:00 PM', '2/21/2004	3:00:00 PM', '2/21/2004	4:00:00 PM', '2/21/2004	5:00:00 PM',
            '2/21/2004	6:00:00 PM', '2/21/2004	7:00:00 PM', '2/21/2004	8:00:00 PM', '2/21/2004	9:00:00 PM',
            '2/21/2004	10:00:00 PM', '2/21/2004	11:00:00 PM', '2/22/2004	12:00:00 AM', '2/22/2004	1:00:00 AM',
            '2/22/2004	2:00:00 AM', '2/22/2004	3:00:00 AM', '2/22/2004	4:00:00 AM', '2/22/2004	5:00:00 AM',
            '2/22/2004	6:00:00 AM', '2/22/2004	7:00:00 AM', '2/22/2004	8:00:00 AM', '2/22/2004	9:00:00 AM',
            '2/22/2004	10:00:00 AM', '2/22/2004	11:00:00 AM', '2/22/2004	12:00:00 PM', '2/22/2004	1:00:00 PM',
            '2/22/2004	2:00:00 PM', '2/22/2004	3:00:00 PM', '2/22/2004	4:00:00 PM', '2/22/2004	5:00:00 PM',
            '2/22/2004	6:00:00 PM', '2/22/2004	7:00:00 PM', '2/22/2004	8:00:00 PM', '2/22/2004	9:00:00 PM',
            '2/22/2004	10:00:00 PM', '2/22/2004	11:00:00 PM', '2/23/2004	12:00:00 AM', '2/23/2004	1:00:00 AM',
            '2/23/2004	2:00:00 AM', '2/23/2004	3:00:00 AM', '2/23/2004	4:00:00 AM', '2/23/2004	5:00:00 AM',
            '2/23/2004	6:00:00 AM', '2/23/2004	7:00:00 AM', '2/23/2004	8:00:00 AM', '2/23/2004	9:00:00 AM',
            '2/23/2004	10:00:00 AM', '2/23/2004	11:00:00 AM', '2/23/2004	12:00:00 PM', '2/23/2004	1:00:00 PM',
            '2/23/2004	2:00:00 PM', '2/23/2004	3:00:00 PM', '2/23/2004	4:00:00 PM', '2/23/2004	5:00:00 PM',
            '2/23/2004	6:00:00 PM', '2/23/2004	7:00:00 PM', '2/23/2004	8:00:00 PM', '2/23/2004	9:00:00 PM',
            '2/23/2004	10:00:00 PM', '2/23/2004	11:00:00 PM', '2/23/2004	11:00:00 PM', '2/24/2004	1:00:00 AM',
            '2/24/2004	2:00:00 AM', '2/24/2004	3:00:00 AM', '2/24/2004	4:00:00 AM', '2/24/2004	5:00:00 AM',
            '2/24/2004	6:00:00 AM', '2/24/2004	7:00:00 AM', '2/24/2004	8:00:00 AM', '2/24/2004	9:00:00 AM',
            '2/24/2004	10:00:00 AM', '2/24/2004	11:00:00 AM', '2/24/2004	12:00:00 PM', '2/24/2004	1:00:00 PM',
            '2/24/2004	2:00:00 PM', '2/24/2004	3:00:00 PM', '2/24/2004	4:00:00 PM', '2/24/2004	5:00:00 PM',
            '2/24/2004	6:00:00 PM', '2/24/2004	7:00:00 PM', '2/24/2004	8:00:00 PM', '2/24/2004	9:00:00 PM',
            '2/24/2004	10:00:00 PM', '2/24/2004	11:00:00 PM', '2/25/2004	12:00:00 AM', '2/25/2004	1:00:00 AM',
            '2/25/2004	2:00:00 AM', '2/25/2004	3:00:00 AM', '2/25/2004	4:00:00 AM', '2/25/2004	5:00:00 AM',
            '2/25/2004	6:00:00 AM', '2/25/2004	7:00:00 AM', '2/25/2004	8:00:00 AM', '2/25/2004	9:00:00 AM',
            '2/25/2004	10:00:00 AM', '2/25/2004	11:00:00 AM', '2/25/2004	12:00:00 PM', '2/25/2004	1:00:00 PM',
            '2/25/2004	2:00:00 PM', '2/25/2004	3:00:00 PM', '2/25/2004	4:00:00 PM', '2/25/2004	5:00:00 PM',
            '2/25/2004	6:00:00 PM', '2/25/2004	7:00:00 PM', '2/25/2004	8:00:00 PM', '2/25/2004	9:00:00 PM',
            '2/25/2004	10:00:00 PM', '2/25/2004	11:00:00 PM', '2/26/2004	12:00:00 AM', '2/26/2004	1:00:00 AM',
            '2/26/2004	2:00:00 AM', '2/26/2004	3:00:00 AM', '2/26/2004	4:00:00 AM', '2/26/2004	5:00:00 AM',
            '2/26/2004	6:00:00 AM', '2/26/2004	7:00:00 AM', '2/26/2004	8:00:00 AM', '2/26/2004	9:00:00 AM',
            '2/26/2004	10:00:00 AM', '2/26/2004	11:00:00 AM', '2/26/2004	12:00:00 PM', '2/26/2004	1:00:00 PM',
            '2/26/2004	2:00:00 PM', '2/26/2004	3:00:00 PM', '2/26/2004	4:00:00 PM', '2/26/2004	5:00:00 PM',
            '2/26/2004	6:00:00 PM', '2/26/2004	7:00:00 PM', '2/26/2004	8:00:00 PM', '2/26/2004	9:00:00 PM',
            '2/26/2004	10:00:00 PM', '2/26/2004	11:00:00 PM'
            ]},
        pane: {
            background:{
                backgroundColor:''
            }
        },
        yAxis: {
            title: {
                text: 'Load'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '�C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Current Forecast',
            data: [24, 22, 21, 21, 21, 21, 20, 22, 24, 27, 31, 34, 36, 37, 39, 39, 39, 39, 37, 37, 35, 34, 34,
                34, 35, 35, 34, 35, 34, 33, 33, 33, 33, 34, 35, 38, 41, 44, 45, 47, 47, 44, 41, 40, 40, 39, 38,
                37, 37, 36, 36, 35, 35, 35, 36, 35, 36, 38, 40, 41, 42, 42, 42, 41, 41, 39, 37, 35, 35, 33, 32,
                30, 28, 25, 24, 22, 22, 21, 20, 20, 23, 30, 32, 35, 38, 40, 42, 43, 44, 44, 40, 33, 31, 29, 27,
                25, 25, 24, 24, 26, 27, 29, 29, 29, 30, 30, 31, 32, 30, 29, 29, 29, 29, 29, 29, 29, 28, 29, 26,
                24, 23, 21, 22, 22, 20, 17, 14, 12, 19, 25, 28, 30, 32, 35, 36, 37, 37, 37, 35, 31, 26, 24, 23,
                20, 21, 19, 19, 18, 17, 16, 15, 15, 20, 28, 33, 33, 35, 38, 39, 39, 37, 36, 35, 33, 31, 28, 30, 29
            ]
        }]
    })
});