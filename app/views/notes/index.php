<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Notes / Activities</h2>
        <a href="notes.php?a=create" class="btn btn-primary">Add Note</a>
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
              <th>Note</th>
              <th>Added At</th>
              <th width="100">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (!empty($notes)): ?>
              <?php foreach ($notes as $note): ?>
                <tr>
                  <td><?= htmlspecialchars($note['id']); ?></td>
                  <td><?= htmlspecialchars($note['customer_name']); ?></td>
                  <td><?= nl2br(htmlspecialchars($note['note'])); ?></td>
                  <td><?= htmlspecialchars($note['created_at']); ?></td>
                  <td>
                    <a href="notes.php?a=delete&id=<?= $note['id']; ?>"
                       onclick="return confirm('Delete this note?');"
                       class="btn btn-sm btn-danger">Delete</a>
                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="5" class="text-center">No notes found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
