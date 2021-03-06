/**
 * Created by Chris Procak on 10/24/2015.
 */
$(function() {
    $('#container').highcharts ({
        chart: {
            zoomType: 'x'
        },
        title: {
            text: 'Weekly Wind Speed',
            x: -20
        },
        subtitle: {
            x: -20
        },
        xAxis: {
            categories: ['2/13/2004	12:00:00 AM', '2/13/2004	1:00:00 AM', '2/13/2004	2:00:00 AM', '2/13/2004	3:00:00 AM',
                '2/13/2004	4:00:00 AM', '2/13/2004	5:00:00 AM', '2/13/2004	6:00:00 AM', '2/13/2004	7:00:00 AM', '2/13/2004	8:00:00 AM',
                '2/13/2004	9:00:00 AM', '2/13/2004	10:00:00 AM', '2/13/2004	11:00:00 AM', '2/13/2004	12:00:00 PM',
                '2/13/2004	1:00:00 PM', '2/13/2004	2:00:00 PM', '2/13/2004	3:00:00 PM', '2/13/2004	4:00:00 PM',
                '2/13/2004	5:00:00 PM', '2/13/2004	6:00:00 PM', '2/13/2004	7:00:00 PM', '2/13/2004	8:00:00 PM',
                '2/13/2004	9:00:00 PM', '2/13/2004	10:00:00 PM', '2/13/2004	11:00:00 PM', '2/14/2004	12:00:00 AM',
                '2/14/2004	1:00:00 AM', '2/14/2004	2:00:00 AM', '2/14/2004	3:00:00 AM', '2/14/2004	4:00:00 AM', '2/14/2004	5:00:00 AM',
                '2/14/2004	6:00:00 AM', '2/14/2004	7:00:00 AM', '2/14/2004	8:00:00 AM', '2/14/2004	9:00:00 AM',
                '2/14/2004	10:00:00 AM', '2/14/2004	11:00:00 AM', '2/14/2004	12:00:00 PM', '2/14/2004	1:00:00 PM',
                '2/14/2004	2:00:00 PM', '2/14/2004	3:00:00 PM', '2/14/2004	4:00:00 PM', '2/14/2004	5:00:00 PM',
                '2/14/2004	6:00:00 PM', '2/14/2004	7:00:00 PM', '2/14/2004	8:00:00 PM', '2/14/2004	9:00:00 PM', '2/14/2004	10:00:00 PM',
                '2/14/2004	11:00:00 PM', '2/15/2004	12:00:00 AM', '2/15/2004	1:00:00 AM', '2/15/2004	2:00:00 AM',
                '2/15/2004	3:00:00 AM', '2/15/2004	4:00:00 AM', '2/15/2004	5:00:00 AM', '2/15/2004	6:00:00 AM',
                '2/15/2004	7:00:00 AM', '2/15/2004	8:00:00 AM', '2/15/2004	9:00:00 AM', '2/15/2004	10:00:00 AM',
                '2/15/2004	11:00:00 AM', '2/15/2004	12:00:00 PM', '2/15/2004	1:00:00 PM', '2/15/2004	2:00:00 PM',
                '2/15/2004	3:00:00 PM', '2/15/2004	4:00:00 PM', '2/15/2004	5:00:00 PM', '2/15/2004	6:00:00 PM',
                '2/15/2004	7:00:00 PM', '2/15/2004	8:00:00 PM', '2/15/2004	9:00:00 PM', '2/15/2004	10:00:00 PM',
                '2/15/2004	11:00:00 PM', '2/16/2004	12:00:00 AM', '2/16/2004	1:00:00 AM', '2/16/2004	2:00:00 AM',
                '2/16/2004	3:00:00 AM', '2/16/2004	4:00:00 AM', '2/16/2004	5:00:00 AM', '2/16/2004	6:00:00 AM',
                '2/16/2004	7:00:00 AM', '2/16/2004	8:00:00 AM', '2/16/2004	9:00:00 AM', '2/16/2004	10:00:00 AM',
                '2/16/2004	11:00:00 AM', '2/16/2004	12:00:00 PM', '2/16/2004	1:00:00 PM', '2/16/2004	2:00:00 PM',
                '2/16/2004	3:00:00 PM', '2/16/2004	4:00:00 PM', '2/16/2004	5:00:00 PM', '2/16/2004	6:00:00 PM',
                '2/16/2004	7:00:00 PM', '2/16/2004	8:00:00 PM', '2/16/2004	9:00:00 PM', '2/16/2004	10:00:00 PM',
                '2/16/2004	11:00:00 PM', '2/17/2004	12:00:00 AM', '2/17/2004	1:00:00 AM', '2/17/2004	2:00:00 AM',
                '2/17/2004	3:00:00 AM', '2/17/2004	4:00:00 AM', '2/17/2004	5:00:00 AM', '2/17/2004	6:00:00 AM',
                '2/17/2004	7:00:00 AM', '2/17/2004	8:00:00 AM', '2/17/2004	9:00:00 AM', '2/17/2004	10:00:00 AM',
                '2/17/2004	11:00:00 AM', '2/17/2004	12:00:00 PM', '2/17/2004	1:00:00 PM', '2/17/2004	2:00:00 PM',
                '2/17/2004	3:00:00 PM', '2/17/2004	4:00:00 PM', '2/17/2004	5:00:00 PM', '2/17/2004	6:00:00 PM',
                '2/17/2004	7:00:00 PM', '2/17/2004	8:00:00 PM', '2/17/2004	9:00:00 PM', '2/17/2004	10:00:00 PM',
                '2/17/2004	11:00:00 PM', '2/18/2004	12:00:00 AM', '2/18/2004	1:00:00 AM', '2/18/2004	2:00:00 AM',
                '2/18/2004	3:00:00 AM', '2/18/2004	4:00:00 AM', '2/18/2004	5:00:00 AM', '2/18/2004	6:00:00 AM',
                '2/18/2004	7:00:00 AM', '2/18/2004	8:00:00 AM', '2/18/2004	9:00:00 AM', '2/18/2004	10:00:00 AM',
                '2/18/2004	11:00:00 AM', '2/18/2004	12:00:00 PM', '2/18/2004	1:00:00 PM', '2/18/2004	2:00:00 PM',
                '2/18/2004	3:00:00 PM', '2/18/2004	4:00:00 PM', '2/18/2004	5:00:00 PM', '2/18/2004	6:00:00 PM',
                '2/18/2004	7:00:00 PM', '2/18/2004	8:00:00 PM', '2/18/2004	9:00:00 PM', '2/18/2004	10:00:00 PM',
                '2/18/2004	11:00:00 PM', '2/19/2004	12:00:00 AM', '2/19/2004	1:00:00 AM', '2/19/2004	2:00:00 AM',
                '2/19/2004	3:00:00 AM', '2/19/2004	4:00:00 AM', '2/19/2004	5:00:00 AM', '2/19/2004	6:00:00 AM',
                '2/19/2004	7:00:00 AM', '2/19/2004	8:00:00 AM', '2/19/2004	9:00:00 AM', '2/19/2004	10:00:00 AM',
                '2/19/2004	11:00:00 AM', '2/19/2004	12:00:00 PM', '2/19/2004	1:00:00 PM', '2/19/2004	2:00:00 PM',
                '2/19/2004	3:00:00 PM', '2/19/2004	4:00:00 PM', '2/19/2004	5:00:00 PM', '2/19/2004	6:00:00 PM',
                '2/19/2004	7:00:00 PM', '2/19/2004	8:00:00 PM', '2/19/2004	9:00:00 PM', '2/19/2004	10:00:00 PM',
                '2/19/2004	11:00:00 PM']
        },
        yAxis: {
            title: {
                text: 'Mph'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
            tooltip: {
                valueSuffix: 'Mph'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },

            series: [{
                name: 'Wind Speed',
                data: [9.79756958, 11.04593782, 9.419478303, 9.233336394, 16.38179292, 8.025349214, 11.97403026,
                    9.255181261, 10.74821427, 14.61743612, 14.65114295, 17.23590449, 14.76938316, 23.38938459,
                    18.64227732, 20.7390072, 9.022953907, 14.64272399, 5.021422099, 0.141423164, -0.804492837,
                    0.001489846, 0.379327516, 0.734220391, 0.707581906, -0.870761567, 0.329028647, 0.665967034,
                    0.557597006, -0.206853239, -0.559118719, -0.548302623, -0.367620055, 0.678096722, -0.95299154,
                    -0.483405259, -0.334966216, -0.051983797, -0.804491629, 7.281710777, 13.43905116, 10.3282129,
                    8.732732503, 6.665472746, -0.961342497, 3.405048057, 0.147928238, 0.115669569, 0.162595261,
                    0.485262419, 0.348012634, 0.799248808, 0.572855101, 0.80345772, -0.751775456, -0.733315416,
                    0.105026632, -0.55118688, 5.848496261, -0.125462477, -0.333663752, 3.838253479, 6.751848896,
                    0.361380045, 6.499054741, 6.334471039, 6.896594651, -0.318826719, 8.744528109, 4.802239551,
                    5.613124966, 5.161563002, 2.89879898, 0.147306357, 5.01895172, -0.375667131, 0.164224049,
                    -0.798121749, -0.94277552, 0.537330501, -0.068234537, 0.782175949, 0.762063902, 3.008585322,
                    0.888428698, 2.44140839, 6.686597305, 2.834646171, -0.104695112, 3.035427151, 2.560467095,
                    6.555631485, 5.528927495, 5.661864112, 5.549685058, 7.563331341, 9.324020153, 3.675889734,
                    -0.992173711, 0.731114013, 3.876478962, 0.959112863, 7.034758272, -0.943692139, 5.192252824,
                    -0.082492881, 0.590601589, 4.544667723, 6.948690994, 10.63919986, 11.68649044, 12.8501107,
                    11.79392431, 14.98894321, 11.12344024, 6.644310698, 6.747791747, 5.965935824, 9.020956115,
                    7.024585643, 8.364519062, 5.651637923, 12.71769719, 5.764533763, 9.446676785, 9.456696112,
                    0.985562023, 5.204418253, 5.687055442, -0.850247574, 8.395941798, 10.66839457, 5.858817868,
                    12.51476222, 9.235682294, 13.35336286, 14.87656093, 7.952780281, 9.029986594, 4.406095006,
                    2.056662141, 0.112029266, -0.230306, -0.035847064, 0.340621393, 0.294495363, 0.327988075,
                    0.517787302, 0.963408985, 3.905780187, 2.098436589, -0.702944869, -0.328322525, -0.958402714,
                    2.422076805, 6.532265129, 8.518800676, 10.49618051, 7.588763369, 8.142808249, 9.573710919,
                    6.781224027, 3.653516042, 4.789438672, 3.996197648, 0.337269217, 0.483988228, -0.834433374
                ]
            },
                {
                name: 'Forecasted Wind Speed',
                data: [8, 8, 5, 7, 6, 3, 7, 9, 8, 6, 14, 13, 15, 17, 16, 11, 13, 11, 7, 10, 8, 8, 6, 6, 3, 3, 5, 3, 6,
                        9, 9, 10, 8, 8, 9, 15, 10, 13, 13, 14, 15, 13, 9, 9, 7, 9, 8, 9, 7, 3, 0, 0, 5, 7, 17, 14, 16,
                        18, 13, 14, 11, 8, 14, 14, 6, 9, 7, 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 8, 6, 5, 5,
                        7, 5, 5, 3, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, 5, 5, 5, 5, 6, 3, 5, 6, 5, 3, 5, 5, 3,
                        0, 0, 3, 0, 0, 0, 0, 5, 5, 3, 11, 7, 13, 15, 15, 16, 15, 11, 10, 9, 7, 0, 3, 0, 0, 0, 0, 0, 0,
                        0, 0, 0, 0, 0, 3, 0, 0, 0, 11, 6, 15, 14, 7, 8, 7, 3, 0, 0, 0
                ]
                }]
    });
});

