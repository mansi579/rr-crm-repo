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

    </style>
@endpush

@section('content')
<div class="container-fluid">
    <div class="row box-dashboard" >
        <!-- Total Leads -->
        <div class="col-md-3 col-sm-6">
            <div class="dashboard-card">
                <div class="box-top">
                    <h6><i class="bi bi-journal-text me-2"></i> Total Leads</h6>
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
                <h6><i class="bi bi-clipboard-check me-2"></i> Reg. Leads</h6>
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
                <h6><i class="bi bi-people me-2"></i> Open Leads</h6>
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
                <h6><i class="bi bi-receipt me-2"></i> Open Invoices</h6>
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
                      <h6><i class="bi bi-journal-text me-2"></i> Total Actioned Lead</h6>
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
                      <h6><i class="bi bi-journal-text me-2"></i> Total Actioned Awaited Leads</h6>
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
                      <h6><i class="bi bi-journal-text me-2"></i> Total Followup Overdue</h6>
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
                      <h6><i class="bi bi-journal-text me-2"></i>Total Application Done</h6>
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
</div>
@endsection

@push('scripts')
    @include('sections.daterange_js')
@endpush
