  <!-- Form Card -->
    <div class="form-card">
      <form>
        <!-- Radio Buttons -->
        <div class="mb-3">
          <label class="form-label">Select Visa Type:</label><br>
          <div class="form-check form-check-inline custom-radio">
            <input class="form-check-input visa-type" type="radio" name="visaType" id="pr" value="pr">
            <label class="form-check-label" for="pr">PR</label>
          </div>
          <div class="form-check form-check-inline custom-radio">
            <input class="form-check-input visa-type" type="radio" name="visaType" id="visit" value="visit">
            <label class="form-check-label" for="visit">Visit Visa</label>
          </div>
          <div class="form-check form-check-inline custom-radio">
            <input class="form-check-input visa-type" type="radio" name="visaType" id="work" value="work">
            <label class="form-check-label" for="work">Work Permit</label>
          </div>
          <div class="form-check form-check-inline custom-radio">
            <input class="form-check-input visa-type" type="radio" name="visaType" id="student" value="student">
            <label class="form-check-label" for="student">Student Visa</label>
          </div>
        </div>

        <!-- PR Section -->
        <div id="prSection" class="form-section d-none">
          <div class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Skill Assessment Letter</label>
              <select class="form-select">
                <option>Select</option>
                <option>Positive</option>
                <option>Negative</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Preferred Country</label>
              <select class="form-select">
                <option>Select</option>
                <option>Canada</option>
                <option>Australia</option>
                <option>UK</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Preferred State</label>
              <select class="form-select">
                <option>Select</option>
                <option>Victoria</option>
                <option>Ontario</option>
                <option>Alberta</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Family</label>
              <select class="form-select">
                <option>Select</option>
                <option>Single</option>
                <option>Couple Visa</option>
                <option>Couple + Children Visa</option>
                <option>Family Visa</option>
              </select>
            </div>
            <div class="col-md-3 d-flex align-items-end">
              <button type="button" class="add-document">+ Add Assessment Letter</button>
            </div>
          </div>
        </div>

        <!-- Visit Visa Section -->
        <div id="visitSection" class="form-section d-none">
          <div class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Purpose of Visit</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Family</label>
              <select class="form-select">
                <option>Select</option>
                <option>Single</option>
                <option>Couple Visa</option>
                <option>Couple + Children Visa</option>
                <option>Family Visa</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Preferred Country</label>
              <select class="form-select">
                <option>Select</option>
                <option>USA</option>
                <option>Canada</option>
                <option>UAE</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Preferred State</label>
              <select class="form-select">
                <option>Select</option>
                <option>New York</option>
                <option>Dubai</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Work Permit Section -->
        <div id="workSection" class="form-section d-none">
          <div class="row g-3">

            <div class="col-md-3">
              <label class="form-label">Preferred Designation</label>
              <input type="text" class="form-control" placeholder="Enter designation">
            </div>
            <div class="col-md-3">
              <label class="form-label">Industry</label>
              <select class="form-select">
                <option selected>List given in document</option>
                <option>IT</option>
                <option>Finance</option>
                <option>Healthcare</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">On Role / Off Role</label>
              <select class="form-select">
                <option>Select</option>
                <option>On Role</option>
                <option>Off Role</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">Preferred Country</label>
              <select class="form-select">
                <option>Select</option>
                <option>Australia</option>
                <option>UK</option>
                <option>Canada</option>
              </select>
            </div>
            <div class="row g-3 mt-2">
              <div class="col-md-3">
                <label class="form-label">Work Category</label>
                <select class="form-select">
                  <option>Select</option>
                  <option>Skilled</option>
                  <option>Semi-Skilled</option>
                  <option>Unskilled</option>
                </select>
              </div>
            </div>
          </div>
        </div>

        <!-- Student Visa Section -->
        <div id="studentSection" class="form-section d-none">
          <div class="row g-3">
            <div class="col-md-3">
              <label class="form-label">Preferred Course</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Country</label>
              <select class="form-select">
                <option>Select</option>
                <option>Canada</option>
                <option>UK</option>
                <option>Australia</option>
              </select>
            </div>
            <div class="col-md-3">
              <label class="form-label">University</label>
              <input type="text" class="form-control">
            </div>
            <div class="col-md-3">
              <label class="form-label">Term/ Inteck</label>
              <input type="text" class="form-control">
            </div>
          </div>
        </div>
      </form>
    </div>
