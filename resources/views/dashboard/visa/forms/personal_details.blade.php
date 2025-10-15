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
