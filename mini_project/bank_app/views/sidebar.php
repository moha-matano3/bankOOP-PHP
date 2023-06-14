<!-- sidebar.php -->
<style>
 /* sidebar.css */

 .sidebar {
  width: 250px;
  background-color: #343a40;
  padding: 20px;
  box-sizing: border-box;
  height: 100vh;
  overflow-y: auto;
}

.sidebar-header {
  margin-bottom: 20px;
}

.sidebar-header h3 {
  color: #fff;
  font-size: 24px;
  margin: 0;
}

.sidebar-menu {
  list-style: none;
  padding: 0;
  margin: 0;
}

.menu-item {
  margin-bottom: 10px;
}

.menu-item a {
  display: flex;
  align-items: center;
  color: #fff;
  text-decoration: none;
  font-size: 16px;
  line-height: 1.5;
  transition: color 0.3s;
}

.menu-item a i {
  margin-right: 10px;
}

.menu-item a:hover {
  color: #ffc107;
}


</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!-- sidebar.php -->

<div class="sidebar">
  <div class="sidebar-header">
    <h3>Dashboard</h3>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-item">
      <a href="dashboard.php">
        <i class="fas fa-home"></i>
        Dashboard
      </a>
    </li>
    <li class="menu-item">
      <a href="dashboard.php?action=profile">
        <i class="fas fa-user"></i>
        Profile
      </a>
    </li>
    <li class="menu-item">
      <a href="dashboard.php?action=transaction_history">
        <i class="fas fa-history"></i>
        Transaction History
      </a>
    </li>
    <li class="menu-item">
      <a href="dashboard.php?action=transfer_funds">
        <i class="fas fa-exchange-alt"></i>
        Transfer Funds
      </a>
    </li>
    <li class="menu-item">
      <a href="dashboard.php?action=update_account">
        <i class="fas fa-cogs"></i>
        Update Account
      </a>
    </li>
    <li class="menu-item">
      <a href="logout.php">
        <i class="fas fa-sign-out-alt"></i>
        Logout
      </a>
    </li>
  </ul>
</div>

