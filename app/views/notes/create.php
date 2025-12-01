<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Add Note / Activity</h2>
        <a href="notes.php" class="btn btn-secondary">Back to List</a>
      </div>

      <form method="post" action="notes.php?a=store">

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
          <label class="form-label">Note *</label>
          <textarea name="note" class="form-control" rows="4" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save Note</button>

      </form>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
