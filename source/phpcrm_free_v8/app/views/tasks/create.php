<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Add Task / Follow-up</h2>
        <a href="tasks.php" class="btn btn-secondary">Back to List</a>
      </div>

      <form method="post" action="tasks.php?a=store">

        <div class="mb-3">
          <label class="form-label">Customer *</label>
          <select name="customer_id" class="form-select" required>
            <option value="">Select Customer</option>
            <?php foreach ($customers as $cust): ?>
              <option value="<?= $cust['id']; ?>">
                <?= htmlspecialchars($cust['name']); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Title *</label>
          <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Follow-up Date & Time *</label>
          <input type="datetime-local" name="followup_date" class="form-control" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="pending">Pending</option>
            <option value="completed">Completed</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Save Task</button>

      </form>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
