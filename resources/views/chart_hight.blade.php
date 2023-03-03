@extends('layouts/index')
@section('content')
<div id="container">
</div>
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>1</p>
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p>Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>1000</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
    </div>
</div>
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>2</p>
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p>Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>1000</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
    </div>
</div>
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>3</p>
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p>Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>1000</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
    </div>
</div>
<div class="row mb-2 music" style="border-radius:10px;border:1px solid;border-color: aquamarine;padding:5px">
    <div class="col-1">
        <p>4</p>
    </div>
    <div class="col-3">
        <p>
            <a class="link" href="{{route('detail', ['id' => 1])}}">Ngoài 30
            </a>
        </p>
    </div>
    <div class="col-2">
        <p>Ca Sĩ :Thái Học</p>
    </div>
    <div class="col-2">
        <p>Album Nhạc Việt</p>
    </div>
    <div class="col-2">
        <p><span>1000</span> <svg color="red" xmlns="http://www.w3.org/2000/svg" width="20" height="16"
                fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                    d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z" />
            </svg></p>
    </div>
    <div class="col-2">
        <p>2021/01/01</p>
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