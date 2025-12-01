<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Add New Lead</h2>
        <a href="leads.php" class="btn btn-secondary">Back to List</a>
      </div>

      <form method="post" action="leads.php?a=store">

        <div class="mb-3">
          <label class="form-label">Lead Name *</label>
          <input type="text" name="name" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Email</label>
          <input type="email" name="email" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" name="phone" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Company Name</label>
          <input type="text" name="company_name" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Lead Source</label>
          <input type="text" name="lead_source" class="form-control" placeholder="Website, Call, Referral, etc.">
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="new">New</option>
            <option value="contacted">Contacted</option>
            <option value="qualified">Qualified</option>
            <option value="lost">Lost</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Lead</button>

      </form>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
