@extends('layouts/index')
@section('content')
<div id="container">
</div>
<div class="row mb-2 music"
    style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px;align-items: center">
    <div class="col-1">
        <p>1</p>
    </div>
    <div class="col-2">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p class="sub-string">Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p class="sub-string">Album Nhạc Việt123213</p>
    </div>
    <div class="col-2">
        <p><span>1000</span><a class="link-heart" href="#">
                @if(1 == 1)
                <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16" fill="currentColor"
                    class="bi bi-heart-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
                </svg>
                @else
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart"
                    viewBox="0 0 16 16">
                    <path
                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                </svg>
                @endif
            </a></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
    </div>
    <div class="col-1">
        <p><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-play-fill"
                viewBox="0 0 16 16">
                <path
                    d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
            </svg></p>
    </div>
</div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        renderTo: 'container',
        backgroundColor: null,
        type: 'line'
    },

    yAxis: {
        title: {
            text: 'Number of Employees'
        }
    },

    xAxis: {
        accessibility: {
            rangeDescription: 'Range: 2010 to 2020'
        }
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle'
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false
            },
            pointStart: 2010
        }
    },

    series: [{
        name: 'Installation & Developers',
        data: [43934, 48656, 65165, 81827, 112143, 142383,
            171533, 165174, 155157, 161454, 154610
        ]
    }, {
        name: 'Manufacturing',
        data: [24916, 37941, 29742, 29851, 32490, 30282,
            38121, 36885, 33726, 34243, 31050
        ]
    }, {
        name: 'Sales & Distribution',
        data: [11744, 30000, 16005, 19771, 20185, 24377,
            32147, 30912, 29243, 29213, 25663
        ]
    }, {
        name: 'Operations & Maintenance',
        data: [null, null, null, null, null, null, null,
            null, 11164, 11218, 10077
        ]
    }, {
        name: 'Other',
        data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
            17300, 13053, 11906, 10073
        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom'
                }
            }
        }]
    }

});
</script>
@endsection
