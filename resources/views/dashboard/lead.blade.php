@extends('layouts.app')

@push('datatable-styles')
    @include('sections.daterange_css')
@endpush

@push('styles')
    <style>
        .dashboard-card {
            border-radius: 12px;
            background: #fff;
            box-shadow: 0px 6px 18px 0px #00000040;
            padding: 18px;
            margin-bottom: 20px;
            height: 140px;
            align-content: center;
        }
        .dashboard-card h6 {
            font-size: 14px;
            font-weight: 600;
            color: #000;
        }
        .dashboard-card .sec-one {
            font-size: 14px;
            font-weight: 700;
            color: #fff;
            border-radius: 6px;
            background: #0CC8F1;
            width: 29px;
            height: 25px;
            text-align: center;
            place-content: center;
        }

        .dashboard-card.canvas-card {
            height: max-content;
        }

        .sec-one.green {
            background: #1B855B;
        }

        .sec-one.yellow{
            background: #FFBF09;
        }
        .sec-one.red{
            background: #DF3046;
        }
        .dashboard-card .small-text {
            font-size: 12px;
            color: #999;
        }

        .box-dashboard{
            padding-top: 15px;
        }
        
        .box-top{
            border-bottom: 2px solid #DEDEDE;
            padding-bottom: 10px;
        }

        .box-top.second-section{
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box-bottom{
            padding-top: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .box-inner-left{
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .counts-box{
            font-size: 14px;
            font-weight: 600;
            color: #4D4D4D;
        }

        .box-inner-bottom{
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .text-count{
            font-size: 14px;
            font-weight: 400;
            color: #000;
        }
        #leadStatsChart {
            width: 100%;
            height: 220px !important;
        }

        .box-bottom canvas {
            width: 206px !important;
            height: 206px !important;
            margin: 0 auto;
            display: block;
        }

    </style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row box-dashboard" >
        <!-- Total Leads -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top">
                    <h6>
                        <img src="{{ asset('images/lead-assets/checklist.svg') }}" alt="Total Leads Icon" class="me-2 dashboard-icon">
                        Total Leads</h6>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-left">
                        <div class="sec-one">0</div>
                        <div class="sec-two">Current Month</div>
                    </div>
                        <div class="sec-three">Total <span class="counts-box">12</span></div>
                </div>
              
            </div>
        </div>

        <!-- Reg. Leads -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top">
                <h6>
                    <img src="{{ asset('images/lead-assets/registered_lead.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                     Reg. Leads</h6>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-left">
                        <div class="sec-one green">0</div>
                        <div class="sec-two">Current Month</div>
                    </div>
                        <div class="sec-three">Total <span class="counts-box">12</span></div>
                </div>
           
            </div>
        </div>

        <!-- Open Leads -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top">
                <h6>
                    <img src="{{ asset('images/lead-assets/open_leads.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                 Open Leads</h6>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-left">
                        <div class="sec-one yellow">0</div>
                        <div class="sec-two">Current Month</div>
                    </div>
                        <div class="sec-three">Total <span class="counts-box">12</span></div>
                </div>
            </div>
        </div>

        <!-- Open Invoices -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top">
                <h6>
                    <img src="{{ asset('images/lead-assets/open_invoices.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                     Open Invoices</h6>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-left">
                        <div class="sec-one yellow">0</div>
                        <div class="sec-two">Current Month</div>
                    </div>
                        <div class="sec-three">Total <span class="counts-box">12</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row box-dashboard">
        <!-- Total Leads -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top second-section">
                    <div>
                      <h6>                  
                        <img src="{{ asset('images/lead-assets/open_leads.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                     Total Actioned Lead</h6>
                    </div>
                    <div>
                        <span>1</span>
                    </div>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-bottom">
                       <div class="sec-one yellow">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                       <div class="sec-one red">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                        <div class="sec-one green">2</div>
                       <span class="text-count"> W</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Reg. Leads -->
        <div class="col-md-3 col-sm-6">
           <div class="dashboard-card">
                <div class="box-top second-section">
                    <div>
                      <h6>
                           <img src="{{ asset('images/lead-assets/open_leads.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                         Total Actioned Awaited Leads</h6>
                    </div>
                    <div>
                        <span>1</span>
                    </div>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-bottom">
                       <div class="sec-one yellow">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                       <div class="sec-one red">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                        
                       <span class="text-count"> W</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Open Leads -->
        <div class="col-md-3 col-sm-6">
           <div class="dashboard-card">
                <div class="box-top second-section">
                    <div>
                      <h6>
                         <img src="{{ asset('images/lead-assets/total_follow_overdue.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                       Total Followup Overdue</h6>
                    </div>
                    <div>
                        <span>1</span>
                    </div>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-bottom">
                       <div class="sec-one yellow">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                       <div class="sec-one red">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                        
                       <span class="text-count"> W</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Open Invoices -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top second-section">
                    <div>
                      <h6>
                        <img src="{{ asset('images/lead-assets/total_follow_overdue.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                        Total Application Done</h6>
                    </div>
                    <div>
                        <span>1</span>
                    </div>
                </div>
                <div class="box-bottom">
                    <div class="box-inner-bottom">
                       <div class="sec-one yellow">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">
                       <div class="sec-one red">2</div>
                       <span class="text-count"> W</span>
                    </div>
                    <div class="box-inner-bottom">

                       <span class="text-count"> W</span>
                    </div>
                </div>
            </div>
        </div>

       
    </div>
     <div class="row">
            <div class="col-md-6">
                <div class="dashboard-card canvas-card">
                    <div class="box-top">
                        <h6>
                            <img src="{{ asset('images/lead-assets/priority_wise_lead.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">
                             Priority Wise Lead</h6>
                    </div>
                    <div class="box-bottom">
                        <canvas id="priorityLeadChart" height="220"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="dashboard-card canvas-card" >
                    <div class="box-top">
                        <h6>
                        <img src="{{ asset('images/lead-assets/open_leads.png') }}" alt="Registered Leads Icon" class="me-2 dashboard-icon">    
                        Lead Statistics</h6>
                    </div>
                    <div class="box-bottom">
                        <canvas id="leadStatsChart" height="220"></canvas>
                    </div>
                </div>
            </div>


        </div>

</div>
@endsection

@push('scripts')
    @include('sections.daterange_js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
           const ctx1 = document.getElementById('priorityLeadChart').getContext('2d');
        new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ['Level 1', 'Level 2', 'Level 3', 'Level 4', 'Level 5'],
                datasets: [{
                    data: [2, 1, 3, 3, 3],
                    backgroundColor: [
                        '#DF3046', // red
                        '#FFBF09', // yellow
                        '#9C6ADE', // purple
                        '#0CC8F1', // teal
                        '#1B855B'  // green
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                cutout: '65%',
                plugins: {
                    legend: {
                        position: 'right',
                        labels: {
                            boxWidth: 14,
                            color: '#333',
                            font: {
                                size: 12
                            }
                        }
                    }
                }
            }
        });

          const ctx2 = document.getElementById('leadStatsChart').getContext('2d');
    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['Assigned', 'Unassigned'],
            datasets: [{
                label: '',
                data: [6, 1], // example data
                backgroundColor: [
                    '#00B2FF', // Assigned color (blue)
                    '#A5E1AD'  // Unassigned color (light green)
                ],
                borderRadius: 10,
                barThickness: 15,
            }]
        },
        options: {
            indexAxis: 'y', // Horizontal bar
            scales: {
                x: {
                    beginAtZero: true,
                    grid: {
                        color: '#f1f1f1',
                        drawBorder: false
                    },
                    ticks: {
                        stepSize: 1,
                        color: '#666',
                        font: {
                            size: 12
                        }
                    }
                },
                y: {
                    grid: {
                        display: false
                    },
                    ticks: {
                        color: '#666',
                        font: {
                            size: 13
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: '#333',
                    titleFont: { size: 13 },
                    bodyFont: { size: 12 }
                }
            },
            responsive: true,
            maintainAspectRatio: false,
        }
    });

    </script>
@endpush
