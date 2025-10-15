 <!-- Form Card -->
    <div class="form-card">
      <form>
        <div class="row g-3">
          <p class="small-text mt-2">Enter valuation for each property type. Total valuation will be calculated
            automatically.</p>

          <!-- Property Inputs -->
          <div class="col-md-3">
            <label class="form-label">Home</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Land</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Plot</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Commercials</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Other</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Shop</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Gold</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <div class="col-md-3">
            <label class="form-label">Silver</label>
            <input type="number" class="form-control valuation-input">
          </div>
          <!-- Total Valuation -->
          <div class="mb-3">
            <label class="form-label">Total Valuation</label>
            <input type="number" id="totalValuation" class="form-control" readonly placeholder="Auto calculated">
          </div>
        </div>

        <!-- Loan Info -->
        <div class="row g-3 mt-4">
          <div class="col-md-3">
            <label class="form-label">Total Loan Value</label>
            <input type="number" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Loan Years</label>
            <input type="number" class="form-control">
          </div>
          <div class="col-md-3">
            <label class="form-label">Loan Availed On</label>
            <input type="date" class="form-control">
          </div>
        </div>

        <!-- Valuation Report -->

        <div class="mt-4">
          <label class="form-label">Valuation Report</label><br>
          <div class="col-md-3 d-flex align-items-end">
            <button type="button" class="add-document">+ Add Valuation Report</button>
          </div>
        </div>

    </div>
    </form>
    </div>
