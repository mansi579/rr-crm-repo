 <div class="form-card">
      <form id="passport_details-form" method="POST">
        @csrf

        <div class="row g-3">
          <div class="col-md-3">
            <label class="form-label">Passport Number</label>
            <input type="text" name="passport_number" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Issuing Country</label>
            <input type="text" name="issuing_country" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">City Where Issued</label>
            <input type="text" name="city_used" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Issuance Date</label>
            <input type="date" name="issue_date" class="form-control">
          </div>

          <div class="col-md-3">
            <label class="form-label">Expiration Date</label>
            <input type="date" name="expire_date" class="form-control">
          </div>

          <div class="col-md-3 d-flex align-items-end">
            <button type="button" name="is_lost" class="add-document">+ Add Passport</button>
          </div>

          <div class="col-12">
            <label class="form-label">Lost Passport History</label>
            <textarea class="form-control" name="lost_history" rows="3"></textarea>
          </div>
        </div>
      </form>
    </div>