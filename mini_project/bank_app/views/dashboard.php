<!DOCTYPE html>
<html>
<head>
    <title>Banking Dashboard</title>
    <link rel="stylesheet" href="../public/assets/css/styles.css">
    <style>
        /* styles.css */

.container {
  display: flex;
}

.main-content {
  flex-grow: 1;
  padding: 20px;
}

/* Additional styles for responsiveness */
@media (max-width: 768px) {
  .container {
    flex-direction: column;
  }

  .sidebar {
    width: 100%;
    margin-bottom: 20px;
  }
}

    </style>
</head>
<body>
<div class="container">
<?php include 'sidebar.php'; ?>
    
    <div class="main-content">
    <?php
    // Check the value of a variable or request parameter to determine the current functionality
    if (isset($_GET['action'])) {
      $action = $_GET['action'];
      // Include the corresponding PHP file based on the selected functionality
      switch ($action) {
        case 'profile':
          include 'profile.php';
          break;
        case 'transaction_history':
          include 'transaction_history.php';
          break;
        case 'transfer_funds':
          include 'transfer_funds.php';
          break;
        case 'update_account':
            include 'update_account.php';
            break;
        default:
          include 'default.php';
          break;
      }
    } else {
      // Default functionality
      include 'default.php';
    }
    ?>
</div>

    <script src="js/script.js"></script>
</body>
</html>
