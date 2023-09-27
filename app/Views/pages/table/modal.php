<div class="modal fade viewModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control first_name" readonly>
        </div>
        <div class="form-group">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control last_name" readonly>
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control email" readonly>
        </div>
        <div class="form-group">
          <label for="country" class="form-label">Country</label>
          <input type="text" class="form-control country" readonly>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        <!-- <button type="button" class="btn bg-gradient-primary">Send message</button> -->
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Insert Data</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <?= form_open(base_url('table/add')) ?>
      <div class="modal-body">
        <div class="form-group">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" class="form-control first_name" placeholder="example: Zen" name="first_name">
        </div>
        <div class="form-group">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" class="form-control last_name" placeholder="example: Bagus" name="last_name">
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control email" placeholder="example: email@email.com" name="email">
        </div>
        <div class="form-group">
          <label for="country" class="form-label">Country</label>
          <input type="text" class="form-control country" placeholder="example: Indonesia" name="country">
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn bg-gradient-success">Submit</button>
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>

<div class="modal fade editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalMessageTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <?= form_open(base_url('table/edit')) ?>
      <div class="modal-body">
        <input type="hidden" class="id" name="id">
        <div class="form-group">
          <label for="first_name" class="form-label">First Name</label>
          <input type="text" name="first_name" class="form-control first_name">
        </div>
        <div class="form-group">
          <label for="last_name" class="form-label">Last Name</label>
          <input type="text" name="last_name" class="form-control last_name">
        </div>
        <div class="form-group">
          <label for="email" class="form-label">Email</label>
          <input type="email" name="email" class="form-control email">
        </div>
        <div class="form-group">
          <label for="country" class="form-label">Country</label>
          <input type="text" name="country" class="form-control country">
        </div>
      </div>
      <div class="modal-footer">
      <button type="submit" class="btn bg-gradient-success">Submit</button>
        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      <?= form_close() ?>
    </div>
  </div>
</div>