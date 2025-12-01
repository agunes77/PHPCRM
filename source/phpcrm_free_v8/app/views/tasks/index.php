<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Tasks / Follow-ups</h2>
        <a href="tasks.php?a=create" class="btn btn-primary">Add Task</a>
      </div>

      <?php if (!empty($_SESSION['success'])): ?>
        <div class="alert alert-success">
          <?= $_SESSION['success']; unset($_SESSION['success']); ?>
        </div>
      <?php endif; ?>

      <?php if (!empty($_SESSION['error'])): ?>
        <div class="alert alert-danger">
          <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
      <?php endif; ?>

      <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm">
          <thead>
            <tr>
              <th>ID</th>
              <th>Customer</th>
              <th>Title</th>
              <th>Follow-up Date</th>
              <th>Status</th>
              <th width="140">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($tasks)): ?>
              <?php foreach ($tasks as $task): ?>
                <tr>
                  <td><?= htmlspecialchars($task['id']); ?></td>
                  <td><?= htmlspecialchars($task['customer_name']); ?></td>
                  <td><?= htmlspecialchars($task['title']); ?></td>
                  <td><?= htmlspecialchars($task['followup_date']); ?></td>
                  <td><?= htmlspecialchars(ucfirst($task['status'])); ?></td>
                  <td>
                    <a href="tasks.php?a=edit&id=<?= $task['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                    <a href="tasks.php?a=delete&id=<?= $task['id']; ?>"
                       onclick="return confirm('Delete this task?');"
                       class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="6" class="text-center">No tasks found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
