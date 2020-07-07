@extends('layouts.app')

@section('content')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Панель администратора</li>
    </ol>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div id="ui-view">
                    <div>
                        <div class="fade-in">
                            <div class="row">

                                @include("dashboard.stat")
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('dashboard.unaproved')
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    @include('dashboard.useronline')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
@section("scripts")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script>
        // Chart.defaults.global.pointHitDetectionRadius = 1;
        // Chart.defaults.global.tooltips.enabled = false;
        // Chart.defaults.global.tooltips.mode = 'index';
        // Chart.defaults.global.tooltips.position = 'nearest';
        // Chart.defaults.global.tooltips.custom = coreui.ChartJS.customTooltips;
        // Chart.defaults.global.defaultFontColor = coreui.Utils.getStyle('--color', document.getElementsByClassName('c-app')[0]);
        // document.body.addEventListener('classtoggle', function () {
        //     cardChart1.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--primary', document.getElementsByClassName('c-app')[0]);
        //     cardChart2.data.datasets[0].pointBackgroundColor = coreui.Utils.getStyle('--info', document.getElementsByClassName('c-app')[0]);
        //     Chart.defaults.global.defaultFontColor = coreui.Utils.getStyle('--color', document.getElementsByClassName('c-app')[0]);
        //     cardChart1.update();
        //     cardChart2.update();
        //     mainChart.update();
        // });
        // var cardChart1 = new Chart(document.getElementById('card-chart11'), {
        //     type: 'line',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        //         datasets: [{
        //             label: 'My First dataset',
        //             backgroundColor: 'transparent',
        //             borderColor: 'rgba(255,255,255,.55)',
        //             //pointBackgroundColor: coreui.Utils.getStyle('--primary', document.getElementsByClassName('c-app')[0]),
        //             data: [65, 59, 84, 84, 51, 55, 40]
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         legend: {display: false},
        //         scales: {
        //             xAxes: [{
        //                 gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
        //                 ticks: {fontSize: 2, fontColor: 'transparent'}
        //             }], yAxes: [{display: false, ticks: {display: false, min: 35, max: 89}}]
        //         },
        //         elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
        //     }
        // });
        // var cardChart2 = new Chart(document.getElementById('card-chart2'), {
        //     type: 'line',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        //         datasets: [{
        //             label: 'My First dataset',
        //             backgroundColor: 'transparent',
        //             borderColor: 'rgba(255,255,255,.55)',
        //             pointBackgroundColor: coreui.Utils.getStyle('--info', document.getElementsByClassName('c-app')[0]),
        //             data: [1, 18, 9, 17, 34, 22, 11]
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         legend: {display: false},
        //         scales: {
        //             xAxes: [{
        //                 gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
        //                 ticks: {fontSize: 2, fontColor: 'transparent'}
        //             }], yAxes: [{display: false, ticks: {display: false, min: -4, max: 39}}]
        //         },
        //         elements: {line: {tension: 0.00001, borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
        //     }
        // });
        // var cardChart3 = new Chart(document.getElementById('card-chart3', document.getElementsByClassName('c-app')[0]), {
        //     type: 'line',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        //         datasets: [{
        //             label: 'My First dataset',
        //             backgroundColor: 'rgba(255,255,255,.2)',
        //             borderColor: 'rgba(255,255,255,.55)',
        //             data: [78, 81, 80, 45, 34, 12, 40]
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         legend: {display: false},
        //         scales: {xAxes: [{display: false}], yAxes: [{display: false}]},
        //         elements: {line: {borderWidth: 2}, point: {radius: 0, hitRadius: 10, hoverRadius: 4}}
        //     }
        // });
        // var cardChart4 = new Chart(document.getElementById('card-chart4'), {
        //     type: 'bar',
        //     data: {
        //         labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April'],
        //         datasets: [{
        //             label: 'My First dataset',
        //             backgroundColor: 'rgba(255,255,255,.2)',
        //             borderColor: 'rgba(255,255,255,.55)',
        //             data: [78, 81, 80, 45, 34, 12, 40, 85, 65, 23, 12, 98, 34, 84, 67, 82],
        //             barPercentage: 0.6
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         legend: {display: false},
        //         scales: {xAxes: [{display: false}], yAxes: [{display: false}]}
        //     }
        // });
        // var mainChart = new Chart(document.getElementById('main-chart'), {
        //     type: 'line',
        //     data: {
        //         labels: ['M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S', 'M', 'T', 'W', 'T', 'F', 'S', 'S'],
        //         datasets: [{
        //             label: 'My First dataset',
        //             backgroundColor: coreui.Utils.hexToRgba(coreui.Utils.getStyle('--info', document.getElementsByClassName('c-app')[0]), 10),
        //             borderColor: coreui.Utils.getStyle('--info', document.getElementsByClassName('c-app')[0]),
        //             pointHoverBackgroundColor: '#fff',
        //             borderWidth: 2,
        //             data: [165, 180, 70, 69, 77, 57, 125, 165, 172, 91, 173, 138, 155, 89, 50, 161, 65, 163, 160, 103, 114, 185, 125, 196, 183, 64, 137, 95, 112, 175]
        //         }, {
        //             label: 'My Second dataset',
        //             backgroundColor: 'transparent',
        //             borderColor: coreui.Utils.getStyle('--success', document.getElementsByClassName('c-app')[0]),
        //             pointHoverBackgroundColor: '#fff',
        //             borderWidth: 2,
        //             data: [92, 97, 80, 100, 86, 97, 83, 98, 87, 98, 93, 83, 87, 98, 96, 84, 91, 97, 88, 86, 94, 86, 95, 91, 98, 91, 92, 80, 83, 82]
        //         }, {
        //             label: 'My Third dataset',
        //             backgroundColor: 'transparent',
        //             borderColor: coreui.Utils.getStyle('--danger', document.getElementsByClassName('c-app')[0]),
        //             pointHoverBackgroundColor: '#fff',
        //             borderWidth: 1,
        //             borderDash: [8, 5],
        //             data: [65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65, 65]
        //         }]
        //     },
        //     options: {
        //         maintainAspectRatio: false,
        //         legend: {display: false},
        //         scales: {
        //             xAxes: [{gridLines: {drawOnChartArea: false}}],
        //             yAxes: [{ticks: {beginAtZero: true, maxTicksLimit: 5, stepSize: Math.ceil(250 / 5), max: 250}}]
        //         },
        //         elements: {point: {radius: 0, hitRadius: 10, hoverRadius: 4, hoverBorderWidth: 3}}
        //     }
        // });
    </script>
    <script>
        var ctx = document.getElementById('card-chart1');
        var myChart1 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'User count',
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [{{ implode(", ",$stat['articles'])  }}]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {display: false},
                scales: {
                    xAxes: [{
                        gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
                        ticks: {fontSize: 2, fontColor: 'transparent'}
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                            min: {!! min($stat['articles']) - 5!!},
                            max: {!! max($stat['articles']) + 5 !!} }
                    }]
                },
                elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
            }
        });

        var ctx = document.getElementById('card-chart2');
        var myChart2 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'January', 'February', 'March', 'April', 'May'],
                datasets: [{
                    label: 'User count',
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [21, 12, 20, 26, 17, 22, 26, 20, 17, 27, 17, 16]
                }]
            },
            options: {
                maintainAspectRatio: true,
                legend: {display: false},
                scales: {
                    xAxes: [{
                        gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
                        ticks: {fontSize: 2, fontColor: 'transparent'}
                    }], yAxes: [{display: false, ticks: {display: false, min: 35, max: 89}}]
                },
                elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
            }
        });
        var ctx = document.getElementById('card-chart3');
        var myChart3 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'User count',
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [65, 59, 84, 84, 51, 55, 40]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {display: false},
                scales: {
                    xAxes: [{
                        gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
                        ticks: {fontSize: 2, fontColor: 'transparent'}
                    }], yAxes: [{display: false, ticks: {display: false, min: 35, max: 89}}]
                },
                elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
            }
        });
        var ctx = document.getElementById('card-chart4');
        var myChart4 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'User count',
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [65, 59, 84, 84, 51, 55, 40]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {display: false},
                scales: {
                    xAxes: [{
                        gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
                        ticks: {fontSize: 2, fontColor: 'transparent'}
                    }], yAxes: [{display: false, ticks: {display: false, min: 35, max: 89}}]
                },
                elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
            }
        });
    </script>
    <script>
        var ctx = document.getElementById('card-chart5');
        var myChart1 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Субота', 'Воскресенье'],
                datasets: [{
                    label: 'User count',
                    backgroundColor: 'transparent',
                    borderColor: 'rgba(255,255,255,.55)',
                    data: [{{ implode(", ",$stat['articles'])  }}]
                }]
            },
            options: {
                maintainAspectRatio: false,
                legend: {display: false},
                scales: {
                    xAxes: [{
                        gridLines: {color: 'transparent', zeroLineColor: 'transparent'},
                        ticks: {fontSize: 2, fontColor: 'transparent'}
                    }],
                    yAxes: [{
                        display: false,
                        ticks: {
                            display: false,
                            min: {!! min($stat['articles']) - 5!!},
                            max: {!! max($stat['articles']) + 5 !!} }
                    }]
                },
                elements: {line: {borderWidth: 1}, point: {radius: 4, hitRadius: 10, hoverRadius: 4}}
            }
        });


    </script>
@append
@section("styles")
    <link rel='stylesheet' href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
@endsection

