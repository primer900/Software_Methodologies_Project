/**
 * Created by Chris Procak on 10/26/2015.
 */
$(function () {
    $('#container2').highcharts({
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Forecasted Load for the Week',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['2/20/2004 12:00:00 AM', '2/20/2004	1:00:00 AM', '2/20/2004	2:00:00 AM', '2/20/2004	3:00:00 AM',
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
            '2/26/2004	10:00:00 PM', '2/26/2004	11:00:00 PM']
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
            data: [18.65443425, 13.14984709, 10.39755352, 11.9266055, 13.76146789, 25.99388379, 47.70642202,
                    57.79816514, 62.0795107, 61.77370031, 62.9969419, 60.24464832, 56.26911315, 53.51681957, 50.1529052,
                    50.1529052, 53.51681957, 63.91437309, 76.75840979, 71.86544343, 65.74923547, 55.96330275, 42.50764526,
                    28.44036697, 20.18348624, 12.2324159, 7.645259939, 3.975535168, 3.669724771, 9.785932722,
                    14.67889908, 25.99388379, 41.89602446, 48.92966361, 50.1529052, 49.23547401, 43.73088685,
                    38.53211009, 37.3088685, 37.9204893, 40.97859327, 55.04587156, 66.05504587, 60.24464832,
                    54.74006116, 48.31804281, 35.47400612, 23.24159021, 11.62079511, 4.281345566, 1.834862385,
                    1.22324159, 0, 3.975535168, 9.174311927, 17.12538226, 27.52293578, 37.9204893, 40.97859327,
                    43.73088685, 40.97859327, 37.6146789, 35.16819572, 34.25076453, 40.36697248, 57.79816514,
                    73.70030581, 74.00611621, 65.74923547, 55.04587156, 40.97859327, 23.85321101, 14.98470948,
                    10.70336391, 8.868501529, 11.9266055, 13.14984709, 23.54740061, 44.34250765, 55.65749235,
                    55.35168196, 55.35168196, 54.12844037, 51.98776758, 48.92966361, 46.17737003, 41.59021407,
                    38.83792049, 43.73088685, 60.24464832, 77.37003058, 77.06422018, 70.33639144, 58.40978593,
                    39.75535168, 24.15902141, 12.2324159, 7.339449541, 5.504587156, 4.587155963, 8.256880734,
                    19.57186544, 42.20183486, 51.37614679, 56.88073394, 59.93883792, 59.32721713, 59.02140673,
                    58.40978593, 58.71559633, 55.65749235, 58.40978593, 59.93883792, 73.39449541, 86.85015291,
                    84.70948012, 76.75840979, 66.05504587, 44.95412844, 28.44036697, 20.18348624, 15.29051988,
                    14.67889908, 14.67889908, 18.65443425, 31.80428135, 55.04587156, 62.0795107, 65.74923547,
                    63.60856269, 61.77370031, 59.93883792, 54.12844037, 51.37614679, 49.23547401, 46.78899083,
                    49.8470948, 64.83180428, 82.56880734, 81.03975535, 75.84097859, 63.91437309, 45.25993884,
                    26.60550459, 17.73700306, 14.67889908, 11.00917431, 11.62079511, 14.37308869, 28.44036697,
                    49.8470948, 60.55045872, 60.85626911, 57.18654434, 57.49235474, 55.65749235, 50.4587156,
                    48.01223242, 46.78899083, 46.48318043, 50.4587156, 64.52599388, 79.81651376, 79.81651376,
                    73.39449541, 60.85626911, 44.64831804, 26.29969419
            ]
        }]
    });
});