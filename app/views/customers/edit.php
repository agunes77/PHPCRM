<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">
      <h2 class="mb-4">Edit Customer</h2>

      <?php if (!empty($successMsg)): ?>
        <div class="alert alert-success"><?= htmlspecialchars($successMsg) ?></div>
      <?php endif; ?>

      <?php if (!empty($errorMsg)): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($errorMsg) ?></div>
      <?php endif; ?>

      <form method="POST" action="customers.php?a=update">
        <input type="hidden" name="id" value="<?= $customer['id'] ?>">

        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" name="name" required
                 value="<?= htmlspecialchars($customer['name']) ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Role / Designation</label>
          <input type="text" class="form-control" name="role" required
                 value="<?= htmlspecialchars($customer['role']) ?>">
        </div>
        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" name="email" required
                 value="<?= htmlspecialchars($customer['email']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" required
                 value="<?= htmlspecialchars($customer['phone']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Company Name</label>
          <input type="text" class="form-control" name="company_name" required
                 value="<?= htmlspecialchars($customer['company_name']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Company Registration Number</label>
          <input type="text" class="form-control" name="company_reg_no" required
                 value="<?= htmlspecialchars($customer['company_reg_no']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Company Address</label>
          <textarea class="form-control" name="company_address" rows="3" required><?= htmlspecialchars($customer['company_address']) ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Country</label>
          <input type="text" class="form-control" name="country" required
                 value="<?= htmlspecialchars($customer['country']) ?>">
        </div>



        <div class="mb-3">
          <label class="form-label">Number of Employees</label>
          <select name="employees" class="form-select" required>
            <option value="1-10"   <?= $customer['employees']=='1-10'?'selected':'' ?>>1-10</option>
            <option value="11-50"  <?= $customer['employees']=='11-50'?'selected':'' ?>>11-50</option>
            <option value="51-200" <?= $customer['employees']=='51-200'?'selected':'' ?>>51-200</option>
            <option value="201-500"<?= $customer['employees']=='201-500'?'selected':'' ?>>201-500</option>
            <option value="500+"   <?= $customer['employees']=='500+'?'selected':'' ?>>500+</option>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="user_status" class="form-select" required>
            <option value="active"   <?= $customer['user_status']=='active'?'selected':'' ?>>Active</option>
            <option value="inactive" <?= $customer['user_status']=='inactive'?'selected':'' ?>>Inactive</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Changes</button>
        <a href="customers.php?a=index" class="btn btn-secondary ms-2">Cancel</a>
      </form>
    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
</body>
</html>