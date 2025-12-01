<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">
	  
<div class="d-flex justify-content-between align-items-center mt-4 mb-3">
  <h2 class="m-0">Customers List</h2>
  <a href="customers.php?a=create" class="btn btn-primary">Add New Customer</a>
</div>
	  
	  

      <?php if ($successMsg): ?>
        <div class="alert alert-success"><?= htmlspecialchars($successMsg) ?></div>
      <?php endif; ?>

      <?php if ($errorMsg): ?>
        <div class="alert alert-danger"><?= htmlspecialchars($errorMsg) ?></div>
      <?php endif; ?>



      <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Company</th>
              <th>Role</th>
			  <th>Status</th>
              <th>Created At</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php if (count($users) > 0): ?>
              <?php foreach ($users as $user): ?>
                <tr>
                  <td><?= htmlspecialchars($user['id']) ?></td>
                  <td><?= htmlspecialchars($user['name']) ?></td>
                  <td><?= htmlspecialchars($user['email']) ?></td>
                  <td><?= htmlspecialchars($user['phone']) ?></td>
                  <td><?= htmlspecialchars($user['company_name']) ?></td>
                  <td><?= htmlspecialchars($user['role']) ?></td>
				  <td><?php
                    $statusClass = 'secondary';
                    switch ($user['user_status']) {
                      case 'active': $statusClass = 'success'; break;
                      case 'inactive': $statusClass = 'danger'; break;
                    }
                  ?>
				   <span class="badge bg-<?= $statusClass ?>"><?= ucfirst($user['user_status']) ?></span>
				  </td>
				    
                  <td><?= htmlspecialchars($user['created_at']) ?></td>
                  <td>
                    <a href="customers.php?a=edit&id=<?= urlencode($user['id']) ?>" 
   class="btn btn-sm btn-primary">Edit</a>

<a href="customers.php?a=delete&id=<?= urlencode($user['id']) ?>" 
   class="btn btn-sm btn-danger"
   onclick="return confirm('Are you sure you want to delete this customer?');">Delete</a>

                  </td>
                </tr>
              <?php endforeach; ?>
            <?php else: ?>
              <tr>
                <td colspan="9" class="text-center">No customers found.</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>


