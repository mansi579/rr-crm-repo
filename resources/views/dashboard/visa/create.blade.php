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
  <!-- Header -->
  <div class="header-container">
    <div class="header-accent-bar"></div>
    <div class="lead-number">LEAD 0009</div>
  </div>
  <main class="container-fluid">

    <!-- Tabs -->
    <div class="tabs-container mb-4">
      <div class="tab-item active">
        <div class="tab-icon">
          <i class="bi bi-person"></i>
        </div>
        <a href="Personal_Details.html">Personal Details</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-passport"></i>
        </div>
        <a href="Passport_Details.html">Passport Details</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-person-lines-fill"></i>
        </div>
        <a href="Relative_Contact_Information.html">Relative Contact Information</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-people"></i>
        </div>
        <a href="Family_Information.html">Family Information</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-mortarboard"></i>
        </div>
        <a href="Education.html">Education</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-briefcase"></i>
        </div>
        <a href="Client_Preference.html">Client Preference</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-person-workspace"></i>
        </div>
        <a href="Professional_Experience.html">Professional Experience</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-building"></i>
        </div>
        <a href="Property_Details.html">Property Details</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-building"></i>
        </div>
        <a href="Financial_Status.html">Financial Status</a>
      </div>
      <div class="tab-item">
        <div class="tab-icon">
          <i class="bi bi-building"></i>
        </div>
        <a href="Travel_Details.html">Travel Details</a>
      </div>
    </div>

    <!-- Form Card -->
    <div class="form-card">
      <form>
        <!-- Personal Details -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Surname</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Given Name</label>
            <input type="text" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Gender</label>
            <select class="form-select">
              <option selected disabled>Select</option>
              <option>Male</option>
              <option>Female</option>
              <option>Other</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Marital Status</label>
            <select class="form-select">
              <option selected disabled>Select</option>
              <option>Single</option>
              <option>Married</option>
              <option>Divorced</option>
              <option>Widowed</option>
            </select>
          </div>

          <div class="col-md-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Country of Origin (Nationality)</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <hr>
        <!-- Home Address -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Home Address</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">State</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Pin Code</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <hr>
        <!-- Mailing Address -->
        <div class="row g-3">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="visaStatus" id="visaGrantedq">
            <label class="form-check-label" for="visaGrantedq">Mailing Address As Above</label>
          </div>
          <div class="col-md-3">
            <label class="form-label">Mailing Address</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">State</label>
            <input type="text" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Pin Code</label>
            <input type="text" class="form-control">
          </div>
        </div>
        <hr>
        <!-- Contact Details -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Primary Phone No</label>
            <input type="tel" maxlength="10" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Secondary Phone No</label>
            <input type="tel" maxlength="10" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Work Phone No</label>
            <input type="tel" maxlength="10" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Other Phone No (Used in Last 5 Years)</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Other Email (Used in Last 5 Years)</label>
            <textarea class="form-control" rows="3"></textarea>
          </div>

          <div class="col-md-3">
            <label class="form-label">Social Media Preference</label>
            <select class="form-select">
              <option selected disabled>Select</option>
              <option>Facebook</option>
              <option>Instagram</option>
              <option>LinkedIn</option>
              <option>Twitter / X</option>
              <option>Other</option>
            </select>
          </div>
        </div>
        <hr>
        <!-- Visa Status -->
        <div class="form-section">
          <h6>Last Five Years Visa Status</h6>
          <div class="row g-3 mt-1">
            <div class="col-md-3">
              <input class="form-check-input" type="radio" name="visaStatus" id="visaGranted">
              <label class="form-check-label" for="visaGranted">Visa Granted</label>
            </div>
            <div class="col-md-3">
              <label class="form-label">Visa Issue Date</label>
              <input type="month" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Visa Expire Date</label>
              <input type="month" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Visa Category</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="row g-3 mt-1">
            <div class="col-md-3">
              <input class="form-check-input" type="radio" name="visaStatus" id="VisaRefusal">
              <label class="form-check-label" for="VisaRefusal">Visa Refusal</label>
            </div>
            <div class="col-md-3">
              <label class="form-label">Visa Rejection Date</label>
              <input type="month" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Visa Category</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <button type="button" class="add-document">+ Add More</button>
            </div>

          </div>
          <div class="mt-3">
            <label class="form-label">Reason</label>
            <textarea class="form-control" rows="2"></textarea>
          </div>
        </div>
        <hr>
        <div class="form-section">
          <div class="mt-3">
            <label class="form-label">Languages Spoken</label>
            <textarea class="form-control" rows="2"></textarea>
          </div>
        </div>
      </form>
    </div>

    <!-- Bottom Buttons -->
    <div class="row align-items-center justify-content-between g-2 bottom-btns">

      <!-- Left Button -->
      <div class="col-12 col-md-auto d-flex flex-column flex-md-row">
        <a href="Passport_Details.html"><button class="btn-previous w-md-auto">Previous</button></a>
      </div>

      <!-- Right Buttons -->
      <div class="col-12 col-md-auto d-flex flex-column flex-md-row gap-2 justify-content-md-end">
        <a href="Passport_Details.html"><button type="submit" class="btn-save w-md-auto">Save & Next</button></a>
        <a href="Index.html"><button class="btn-cancel w-md-auto">Cancel</button></a>
      </div>
    </div>
  </main>

@endsection

@push('scripts')
<script src="{{ asset('Bootstrap_5/JS_v5.3.3.js') }}"></script>
@endpush