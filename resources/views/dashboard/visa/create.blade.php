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
    <!-- Tabs (unchanged styles) -->
    <div class="tabs-container mb-4">
      <div class="tab-item active" data-section="personal_details">
        <div class="tab-icon"><i class="bi bi-person"></i></div>
        <a href="javascript:void(0)">Personal Details</a>
      </div>
      <div class="tab-item" data-section="passport_details">
        <div class="tab-icon"><i class="bi bi-passport"></i></div>
        <a href="javascript:void(0)">Passport Details</a>
      </div>
      <div class="tab-item" data-section="relative_contact_information">
        <div class="tab-icon"><i class="bi bi-person-lines-fill"></i></div>
        <a href="javascript:void(0)">Relative Contact Information</a>
      </div>
      <div class="tab-item" data-section="family_information">
        <div class="tab-icon"><i class="bi bi-people"></i></div>
        <a href="javascript:void(0)">Family Information</a>
      </div>
      <div class="tab-item" data-section="education">
        <div class="tab-icon"><i class="bi bi-mortarboard"></i></div>
        <a href="javascript:void(0)">Education</a>
      </div>

      <div class="tab-item" data-section="client_preference">
        <div class="tab-icon"><i class="bi bi-briefcase"></i></div>
        <a href="javascript:void(0)">Client Preference</a>
      </div>

      <div class="tab-item" data-section="professional_experience">
        <div class="tab-icon"><i class="bi bi-person-workspace"></i></div>
        <a href="javascript:void(0)">Professional Experience</a>
      </div>

      <div class="tab-item" data-section="property_details">
        <div class="tab-icon"><i class="bi bi-building"></i></div>
        <a href="javascript:void(0)">Property Details</a>
      </div>

      <div class="tab-item" data-section="financial_status">
        <div class="tab-icon"><i class="bi bi-cash-stack"></i></div>
        <a href="javascript:void(0)">Financial Status</a>
      </div>

      <div class="tab-item" data-section="travel_details">
        <div class="tab-icon"><i class="bi bi-airplane"></i></div>
        <a href="javascript:void(0)">Travel Details</a>
      </div>
      <!-- Add more tabs as needed -->
    </div>

    <!-- Form content area -->
    <div id="form-content" class="form-card">
      <div class="text-center text-muted py-4">Loading...</div>
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
<script>
  document.addEventListener("DOMContentLoaded", function() {

    const formContainer = document.getElementById('form-content');
    const tabs = document.querySelectorAll('.tab-item');

    // Function to load section via AJAX
    function loadSection(section) {
        formContainer.innerHTML = `<div class="text-center text-muted py-4">Loading ${section.replace('_', ' ')}...</div>`;

        fetch(`/account/form/${section}`)
          .then(res => res.json())
          .then(data => {
            if (data.html) {
              formContainer.innerHTML = data.html;
            } else {
              formContainer.innerHTML = `<div class="text-danger text-center py-4">Error: ${data.error}</div>`;
            }
          })
          .catch(() => {
            formContainer.innerHTML = `<div class="text-danger text-center py-4">Failed to load form.</div>`;
          });
    }

    // Load default tab (Personal Details)
    loadSection('personal_details');

    // Tab click event
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        loadSection(tab.dataset.section);
      });
    });
  });

  $('.btn-save').on('click', function (e) {
      e.preventDefault();

      const activeSection = $('.tab-item.active').data('section');
      const form = $(`#${activeSection}-form`);
      const formData = new FormData(form[0]);

      $.ajax({
          url: `/account/save-${activeSection}`,
          method: 'POST',
          data: formData,
          processData: false,
          contentType: false,
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
          success: function (data) {
              if (data.success) {
                  alert(data.message);

                  // Switch to next tab automatically
                  const nextTab = $('.tab-item.active').next();
                  if (nextTab.length) nextTab.click();
              }
          },
          error: function (xhr) {
              console.log(xhr.responseText);
          }
      });
  });


  //  $('.btn-save').on('click', function (e) {
  //       e.preventDefault();

  //       // const activeSection = $('.tab-item.active').data('section');

  //         // const form = $('#personal-details-form');
  //         // const formData = new FormData(form[0]);
  //         const activeSection = $('.tab-item.active').data('section');


  //         //new code
  //         const form = $(`#${activeSection}-form`); // form id = personal_details-form
  //         const formData = new FormData(form[0]);
  //         console.log("active", activeSection);
  //         console.log("form", form);
  //         console.log("formData", formData);                 

  //         $.ajax({
  //               url: `/account/save-${activeSection}`, // Dynamic URL
  //               method: 'POST',
  //               data: formData,
  //               processData: false,
  //               contentType: false,
  //               headers: {
  //                   'X-CSRF-TOKEN': $('input[name="_token"]').val()
  //               },
  //               success: function (data) {
  //                   if (data.success) {
  //                       alert('Saved successfully!');
  //                       // Move to the next tab automatically
  //                       $('.tab-item[data-section="passport_details"]').click();
  //                   } else {
  //                     console.log("error" + data.message);
  //                 }
  //               },                
  //               error: function (xhr, status, error) {
  //                   console.error(error);
  //                   console.log("something went wrong while saving");
  //               }
  //           });
        
  //   });

    $('input[type=radio]').on('mousedown', function (e) {
        if (this.checked) {
            $(this).data('wasChecked', true);
        } else {
            $(this).data('wasChecked', false);
            $('input[name="mail_address"]').val('');
            $('input[name="mail_city"]').val('');
            $('input[name="mail_state"]').val('');
            $('input[name="mail_pincode"]').val('');
        }
    });

    $(document).on('change', '#mail_as_above', function () {
      if ($(this).is(':checked')) {
          $('input[name="mail_address"]').val($('input[name="address"]').val());
          $('input[name="mail_city"]').val($('input[name="city"]').val());
          $('input[name="mail_state"]').val($('input[name="state"]').val());
          $('input[name="mail_pincode"]').val($('input[name="pincode"]').val());
      } else {
          $('input[name="mail_address"]').val('');
          $('input[name="mail_city"]').val('');
          $('input[name="mail_state"]').val('');
          $('input[name="mail_pincode"]').val('');
      }
    });

</script>
@endpush