<nav class="col-md-2 sidebar">
  <ul class="nav flex-column">

    <li class="nav-item mb-2">
      <a href="dashboard.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : '' ?>">Dashboard</a>
    </li>

    <li class="nav-item mb-2">
      <a href="leads.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'leads.php' ? 'active' : '' ?>">Leads</a>
    </li>

    <li class="nav-item mb-2">
      <a href="customers.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'customers.php' ? 'active' : '' ?>">Customers</a>
    </li>

    <li class="nav-item mb-2">
      <a href="tasks.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'tasks.php' ? 'active' : '' ?>">Tasks / Follow-ups</a>
    </li>

    <li class="nav-item mb-2">
      <a href="notes.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'notes.php' ? 'active' : '' ?>">Notes / Activities</a>
    </li>

    <li class="nav-item mb-2">
      <a href="change_password.php" class="nav-link <?= basename($_SERVER['PHP_SELF']) == 'change_password.php' ? 'active' : '' ?>">Change Password</a>
    </li>

    <li class="nav-item mb-2">
      <a href="index.php?a=logout" class="nav-link text-danger">Logout</a>
    </li>

  </ul>
</nav>
