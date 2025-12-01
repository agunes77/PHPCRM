<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Edit Task / Follow-up</h2>
        <a href="tasks.php" class="btn btn-secondary">Back to List</a>
      </div>

      <?php if (!$task): ?>
        <div class="alert alert-danger">Task not found.</div>
      <?php else: ?>

      <form method="post" action="tasks.php?a=update">
        <input type="hidden" name="id" value="<?= htmlspecialchars($task['id']); ?>">

        <div class="mb-3">
          <label class="form-label">Customer *</label>
          <select name="customer_id" class="form-select" required>
            <option value="">Select Customer</option>
            <?php foreach ($customers as $cust): ?>
              <option value="<?= $cust['id']; ?>" <?= ($task['customer_id'] == $cust['id']) ? 'selected' : ''; ?>>
                <?= htmlspecialchars($cust['name']); ?>
              </option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="mb-3">
          <label class="form-label">Title *</label>
          <input type="text" name="title" class="form-control"
                 value="<?= htmlspecialchars($task['title']); ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Description</label>
          <textarea name="description" class="form-control" rows="3"><?= htmlspecialchars($task['description']); ?></textarea>
        </div>

        <div class="mb-3">
          <label class="form-label">Follow-up Date & Time *</label>
          <input type="datetime-local" name="followup_date" class="form-control"
                 value="<?= str_replace(' ', 'T', htmlspecialchars($task['followup_date'])); ?>" required>
        </div>

        <div class="mb-3">
          <label class="form-label">Status</label>
          <select name="status" class="form-select">
            <option value="pending" <?= $task['status'] === 'pending' ? 'selected' : ''; ?>>Pending</option>
            <option value="completed" <?= $task['status'] === 'completed' ? 'selected' : ''; ?>>Completed</option>
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>

      </form>

      <?php endif; ?>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
