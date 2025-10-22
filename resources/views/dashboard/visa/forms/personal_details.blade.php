 <!-- Form Card -->
    <div class="form-card">
      <form id="personal_details-form" method="POST">
        @csrf

        <!-- Personal Details -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Surname</label>
            <input type="text" name="surname" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Given Name</label>
            <input type="text" name="given_name" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Gender</label>
            <select class="form-select" name="gender">
              <option selected disabled>Select</option>
              <option value="male">Male</option>
              <option value="female">Female</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="col-md-3">
            <label class="form-label">Marital Status</label>
            <select class="form-select" name="marital_status">
              <option selected disabled>Select</option>
              <option value="single">Single</option>
              <option value="married">Married</option>
              <option value="diverced">Divorced</option>
              <option value="widowed">Widowed</option>
            </select>
          </div>

          <div class="col-md-3">
            <label class="form-label">Date of Birth</label>
            <input type="date" name="date_of_birth" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Country of Origin (Nationality)</label>
            <input type="text" name="country_of_origin" class="form-control">
          </div>
        </div>
        <hr>
        <!-- Home Address -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Home Address</label>
            <input type="text" name="address" class="form-control" id="address">
          </div>

          <div class="col-md-3">
            <label class="form-label">City</label>
            <input type="text" name="city" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">State</label>
            <input type="text" name="state" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Pin Code</label>
            <input type="text" name="pincode" class="form-control">
          </div>
        </div>
        <hr>
        <!-- Mailing Address -->
        <div class="row g-3">
          <div class="form-check">
            <!-- <input class="form-check-input" id="mail_as_above" type="radio" name="visaStatus" id="visaGrantedq"> -->
            <!-- <label class="form-check-label"  for="visaGrantedq">Mailing Address As Above</label> -->
            <input type="radio" name="same_address" id="mail_as_above" value="same"> Same as Permanent Address

          </div>
          <div class="col-md-3">
            <label class="form-label">Mailing Address</label>
            <input type="text" class="form-control" name="mail_address">
          </div>

          <div class="col-md-3">
            <label class="form-label">City</label>
            <input type="text" class="form-control" name="mail_city">
          </div>

          <div class="col-md-3">
            <label class="form-label">State</label>
            <input type="text" class="form-control" name="mail_state">
          </div>

          <div class="col-md-3">
            <label class="form-label">Pin Code</label>
            <input type="text" class="form-control" name="mail_pincode">
          </div>
        </div>
        <hr>
        <!-- Contact Details -->
        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Primary Phone No</label>
            <input type="tel" maxlength="10" class="form-control" name="primary_phone">
          </div>

          <div class="col-md-3">
            <label class="form-label">Secondary Phone No</label>
            <input type="tel" maxlength="10" class="form-control" name="secondary_phone">
          </div>

          <div class="col-md-3">
            <label class="form-label">Work Phone No</label>
            <input type="tel" maxlength="10" class="form-control" name="work_phone">
          </div>

          <div class="col-md-3">
            <label class="form-label">Other Phone No (Used in Last 5 Years)</label>
            <textarea class="form-control" rows="3" name="other_phone"></textarea>
          </div>

          <div class="col-md-3">
            <label class="form-label">Email Address</label>
            <input type="email" class="form-control" name="emial">
          </div>

          <div class="col-md-3">
            <label class="form-label">Other Email (Used in Last 5 Years)</label>
            <textarea class="form-control" rows="3" name="other_email"></textarea>
          </div>

          <div class="col-md-3">
            <label class="form-label">Social Media Preference</label>
            <select class="form-select" name="social_media">
              <option selected disabled>Select</option>
              <option value="facebook">Facebook</option>
              <option value="instagram">Instagram</option>
              <option value="linkedin">LinkedIn</option>
              <option value="twitter">Twitter</option>
              <option value="other">Other</option>
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
