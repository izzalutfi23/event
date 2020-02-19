@extends('admin/layout/main')
@section('title', 'Home | Lutfi Hakim')
@section('container')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-home icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>Dashboard
                        <div class="page-title-subheading">Aplikasi Data PTK.
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-xl-6">
                <div class="card mb-3 widget-content bg-midnight-bloom">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Sekolah</div>
                            <div class="widget-subheading">Jumlah sekolah negeri dan swasta</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>30</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-6">
                <div class="card mb-3 widget-content bg-grow-early">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Pendidik</div>
                            <div class="widget-subheading">Jumlah seluruh tenaga pendidik</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>20</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="mb-3 card">
                    <div class="card-header-tab card-header-tab-animation card-header">
                        <div class="card-header-title">
                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                            Grafik Jumlah Sekolah
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="tabs-eg-77">
                                <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                                    <div class="widget-chat-wrapper-outer">
                                        <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                            <canvas id="chart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Footer -->
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="app-footer__inner">
                <div class="app-footer-left">
                </div>
                <div class="app-footer-right">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="javascript:void(0);" class="nav-link">
                                &copy 2019 E-data PTK
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End footer -->

</div>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
</div>
</div>



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script> 

<!-- Chart 1 -->
<script type="text/javascript">
    var ctx = document.getElementById("chart1").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["TK", "SD", "SMP", "SMA"],
            datasets: [{
                label: 'Negeri',
                data: [5, 7, 20, 9],
                fill: true,
                borderColor: '#DA2029',
                borderWidth: 1
            },
            {
                label: 'Swasta',
                data: [20, 13, 12, 7],
                fill: true,
                borderColor: '#D2D02C',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endsection()