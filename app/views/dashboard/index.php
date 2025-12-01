<?php include __DIR__ . '/../../includes/header.php'; ?>

<div class="container-fluid">
  <div class="row">

    <?php include __DIR__ . '/../../includes/left.php'; ?>

    <main class="col-md-10 ms-sm-auto content-area">

      <div class="d-flex justify-content-between align-items-center mt-4 mb-3">
        <h2 class="m-0">Dashboard</h2>
      </div>

      <!-- Top Stats -->
      <div class="row mb-4">
        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="text-muted">Total Leads</h6>
              <h3><?= (int)$totalLeads; ?></h3>
              <a href="leads.php" class="small">View all leads</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="text-muted">Total Customers</h6>
              <h3><?= (int)$totalCustomers; ?></h3>
              <a href="customers.php" class="small">View all customers</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <div class="card">
            <div class="card-body">
              <h6 class="text-muted">Pending Tasks</h6>
              <h3><?= (int)$pendingTasks; ?></h3>
              <a href="tasks.php" class="small">View all tasks</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Today's Follow-ups -->
      <div class="row mb-4">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              Today's Follow-ups
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-sm table-striped mb-0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Customer</th>
                      <th>Title</th>
                      <th>Follow-up Date</th>
                      <th>Status</th>
                      <th width="120">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($todayTasks)): ?>
                      <?php foreach ($todayTasks as $task): ?>
                        <tr>
                          <td><?= htmlspecialchars($task['id']); ?></td>
                          <td><?= htmlspecialchars($task['customer_name']); ?></td>
                          <td><?= htmlspecialchars($task['title']); ?></td>
                          <td><?= htmlspecialchars($task['followup_date']); ?></td>
                          <td><?= htmlspecialchars(ucfirst($task['status'])); ?></td>
                          <td>
                            <a href="tasks.php?a=edit&id=<?= $task['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                          </td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="6" class="text-center p-3">No follow-ups scheduled for today.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Recent Leads & Customers -->
      <div class="row mb-4">
        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-header">
              Recent Leads
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-sm mb-0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($recentLeads)): ?>
                      <?php foreach ($recentLeads as $lead): ?>
                        <tr>
                          <td><?= htmlspecialchars($lead['name']); ?></td>
                          <td><?= htmlspecialchars($lead['email']); ?></td>
                          <td><?= htmlspecialchars($lead['phone']); ?></td>
                          <td><?= htmlspecialchars($lead['created_at']); ?></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="4" class="text-center p-3">No leads found.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <div class="card">
            <div class="card-header">
              Recent Customers
            </div>
            <div class="card-body p-0">
              <div class="table-responsive">
                <table class="table table-sm mb-0">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Created</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if (!empty($recentCustomers)): ?>
                      <?php foreach ($recentCustomers as $cust): ?>
                        <tr>
                          <td><?= htmlspecialchars($cust['name']); ?></td>
                          <td><?= htmlspecialchars($cust['email']); ?></td>
                          <td><?= htmlspecialchars($cust['phone']); ?></td>
                          <td><?= htmlspecialchars($cust['created_at']); ?></td>
                        </tr>
                      <?php endforeach; ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="4" class="text-center p-3">No customers found.</td>
                      </tr>
                    <?php endif; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
  </div>
</div>

<?php include __DIR__ . '/../../includes/footer.php'; ?>
