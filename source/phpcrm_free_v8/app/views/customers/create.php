<?php include __DIR__ . '/../../includes/header.php'; ?>
<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">
      <h2 class="mb-4">Add New Customer</h2>

      <?php if ($successMsg): ?>
        <div class="alert alert-success"><?= htmlspecialchars($successMsg) ?></div>
      <?php endif; ?>

      <?php if ($errorMsg): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($errorMsg) ?></div>
      <?php endif; ?>

      <form method="POST" action="customers.php?a=store">
        <div class="mb-3">
          <label for="name" class="form-label">Full Name</label>
          <input type="text" class="form-control" id="name" name="name" required value="<?= htmlspecialchars($name ?? '') ?>">
        </div>

        <div class="mb-3">
          <label for="role" class="form-label">Role / Designation</label>
          <input type="text" class="form-control" id="role" name="role" required value="<?= htmlspecialchars($role ?? '') ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email Address</label>
          <input type="email" class="form-control" id="email" name="email" required value="<?= htmlspecialchars($email ?? '') ?>">
        </div>


        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control" id="phone" name="phone" required value="<?= htmlspecialchars($phone ?? '') ?>">
        </div>

        <div class="mb-3">
          <label for="company_name" class="form-label">Company Name</label>
          <input type="text" class="form-control" id="company_name" name="company_name" required value="<?= htmlspecialchars($company_name ?? '') ?>">
        </div>

        <div class="mb-3">
          <label for="company_reg_no" class="form-label">Company Registration Number</label>
          <input type="text" class="form-control" id="company_reg_no" name="company_reg_no" required value="<?= htmlspecialchars($company_reg_no ?? '') ?>">
        </div>

        <div class="mb-3">
          <label for="company_address" class="form-label">Company Address</label>
          <textarea class="form-control" id="company_address" name="company_address" rows="3" required><?= htmlspecialchars($company_address ?? '') ?></textarea>
        </div>

        <div class="mb-3">
          <label for="country" class="form-label">Country</label>
          <input type="text" class="form-control" id="country" name="country" required value="<?= htmlspecialchars($country ?? '') ?>">
        </div>


        <div class="mb-3">
          <label for="employees" class="form-label">Number of Employees</label>
                <select name="employees" class="form-select" required>
        <option value="" disabled selected>Select Number of Employees</option>
        <option value="1-10">1-10</option>
        <option value="11-50">11-50</option>
        <option value="51-200">51-200</option>
        <option value="201-500">201-500</option>
        <option value="500+">500+</option>
      </select>
        </div>

        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select name="user_status" id="user_status" class="form-select" required>
            <option value="active" >Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Add Customer</button>
        <a href="customers.php" class="btn btn-secondary ms-2">Cancel</a>
      </form>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>


