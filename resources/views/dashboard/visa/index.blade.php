@extends('layouts.app')

@push('datatable-styles')
    @include('sections.daterange_css')
    
  <!-- Bootstrap 5 -->
  <link href="{{ asset('Bootstrap_5/CSS_v5.3.3.css') }}" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('Bootstrap_5/custom.css') }}" rel="stylesheet">

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

    .sec-one.yellow {
        background: #FFBF09;
    }

    .sec-one.red {
        background: #DF3046;
    }

    .dashboard-card .small-text {
        font-size: 12px;
        color: #999;
    }

    .box-dashboard {
        padding-top: 15px;
    }

    .box-top {
        border-bottom: 2px solid #DEDEDE;
        padding-bottom: 10px;
    }

    .box-top.second-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .box-bottom {
        padding-top: 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .box-inner-left {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .counts-box {
        font-size: 14px;
        font-weight: 600;
        color: #4D4D4D;
    }

    .box-inner-bottom {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .text-count {
        font-size: 14px;
        font-weight: 400;
        color: #000;
    }

    #leadStatsChart {
        width: 100%;
        height: 220px !important;
    }

    .box-bottom canvas {
        height: 206px !important;
        margin: 0 4px 10px 13px;
        display: block;
    }

    /* Tabs Styling */
    .nav-tabs .nav-link {
        color: #000;
        font-weight: 600;
        border-radius: 8px 8px 0 0;
    }

    .nav-tabs .nav-link.active {
        background-color: #0CC8F1;
        color: #fff;
        border: none;
    }

    .tab-content {
        background: #fff;
        padding: 20px;
        box-shadow: 0px 6px 18px 0px #00000020;
        border-radius: 0 0 12px 12px;
    }

    .create-lead-btn {
        background-color: #0CC8F1;
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 8px 16px;
        font-weight: 600;
    }
</style>
@endpush

@section('content')

<main class="container-fluid">
        <!-- Breadcrumb Navigation -->
        <div class="breadcrumb-section">
            <div class="breadcrumb-nav">
                <i class="bi bi-house-door-fill"></i>
                <span>/ Lead / LEAD LIST</span>
            </div>
        </div>

        <!-- Lead Statistics -->
        <div class="lead-stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">5</div>
                    <div class="stat-label">All Leads</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-person-fill"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-number">3</div>
                    <div class="stat-label">My Leads</div>
                </div>
            </div>
        </div>

        <!-- Action Bar -->
        <div class="action-bar">
            <div class="action-buttons">
                <button class="action-btn"><i class="bi bi-funnel-fill"></i></button>
                <button class="action-btn"><i class="bi bi-sort-down"></i></button>
                <button class="action-btn"><i class="bi bi-file-earmark-text"></i></button>
                <button class="action-btn"><i class="bi bi-question-circle-fill"></i></button>
            </div>
            <div class="action-right">
                <a href="{{ route('dashboard.visa.create')}}"><button class="add-lead-btn"><i class="bi bi-plus"></i></button></a>
                <button class="lead-import-btn"><i class="bi bi-upload"></i> Lead Import</button>
            </div>
        </div>

        <!-- Filter Section -->
        <div class="filter-section">
            <div class="filter-row">
                <div class="filter-group">
                    <label>Lead Status</label>
                    <div class="filter-dropdown">
                        <select>
                            <option>View All Lead</option>
                        </select>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
                <div class="filter-group">
                    <label>Lead Source</label>
                    <div class="filter-dropdown">
                        <select>
                            <option>View All Source</option>
                        </select>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
                <div class="filter-group">
                    <label>All Service</label>
                    <div class="filter-dropdown">
                        <select>
                            <option>All Services</option>
                        </select>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
                <div class="filter-group">
                    <label>Follow Up</label>
                    <div class="filter-dropdown">
                        <select>
                            <option>Follow Up</option>
                        </select>
                        <i class="bi bi-chevron-down"></i>
                    </div>
                </div>
                <div class="filter-group">
                    <label>Search</label>
                    <div class="search-input">
                        <input type="text" placeholder="Search">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lead Table -->
        <div class="lead-table-container">
            <div class="table-header">
                <div class="table-header-row">
                    <div class="header-cell">LEAD</div>
                    <div class="header-cell">CLIENT</div>
                    <div class="header-cell">SERVICES</div>
                    <div class="header-cell">STATUS</div>
                    <div class="header-cell">Lead Quality</div>
                    <div class="header-cell">FOLLOW-UP</div>
                    <div class="header-cell"></div> <!-- For avatar -->
                </div>
            </div>
            <div class="table-body">
                <!-- Lead Row 1 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #4FD3F2;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0008</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Facebook</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #4FD3F2;"></i>
                            <span>3</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Application + Student Visa (A....)</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge untouched">Untouched</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge in-process">In-Process</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">PS</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>

                <!-- Lead Row 2 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #AD86FF;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0007</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Walk-In</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #AD86FF;"></i>
                            <span>1</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Admission Australia</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge calling">Calling</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge untouched">Untouched</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">AD</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>

                <!-- Lead Row 3 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #FF8383;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0006</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Walk-In</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #FF8383;"></i>
                            <span>3</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Application + Student Visa (A....)</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge consulting">Consulting</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge admission">Admission A...</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">AD</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>

                <!-- Lead Row 4 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #FF8383;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0005</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Walk-In</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #FF8383;"></i>
                            <span>3</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Application + Student Visa (A....)</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge meeting">Meeting</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge unassigned">Unassig</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">AD</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>

                <!-- Lead Row 5 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #219127;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0004</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Walk-In</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #219127;"></i>
                            <span>3</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Application + Student Visa (A....)</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge documentation">Documentation</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge admission">Admission A...</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">AD</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>

                <!-- Lead Row 6 -->
                <div class="lead-row">
                    <div class="lead-indicator" style="background-color: #4FD3F2;"></div>
                    <div class="lead-cell">
                        <span class="lead-id">LEAD-0003</span>
                        <span class="lead-date">17-07-2023 2:36 PM...</span>
                        <span class="lead-source">Walk-In</span>
                    </div>
                    <div class="client-cell">
                        <div class="quality-indicator">
                            <i class="bi bi-star-fill" style="color: #4FD3F2;"></i>
                            <span>3</span>
                        </div>
                        <div class="contact-info">
                            <div class="contact-item">
                                <i class="bi bi-telephone-fill"></i>
                                <span>+91 123 4567 890</span>
                            </div>
                            <div class="contact-item">
                                <i class="bi bi-envelope-fill"></i>
                                <span>abc@mail.com</span>
                            </div>
                        </div>
                    </div>
                    <div class="services-cell">
                        <span class="service-name">Application + Student Visa (A....)</span>
                        <div class="service-date">
                            <i class="bi bi-calendar"></i>
                            <span>17-07-2025</span>
                        </div>
                    </div>
                    <div class="status-cell">
                        <span class="status-badge unassigned">Unassigned</span>
                    </div>
                    <div class="quality-cell">
                        <span class="status-badge unassigned">Unassig</span>
                    </div>
                    <div class="followup-cell">
                        <button class="add-followup">+ Add</button>
                    </div>
                    <div class="avatar-cell">
                        <div class="avatar">AD</div>
                        <button class="menu-btn"><i class="bi bi-three-dots-vertical"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </main>


@endsection

@push('scripts')
<!-- <script src="Bootstrap_5/bundle.min.js"></script> -->
<script src="{{ asset('Bootstrap_5/JS_v5.3.3.js') }}"></script>
<script>

</script>
@endpush