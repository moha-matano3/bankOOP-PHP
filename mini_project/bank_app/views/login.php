<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* styles.css */

/* Login Form */
.login-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.login-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.login-form input[type="text"],
.login-form input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

.login-form button {
  width: 100%;
  padding: 10px;
  background-color: #f00;
  color: #fff;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.login-form button:hover {
  background-color: #ff5050;
}

    </style>
</head>
<body>
<?php include 'navbar.php'?>
    <?php if (isset($error) && $error !== ''): ?>
        <p class="error"><?= $error ?></p>
    <?php endif; ?>

    <div class="login-form">
    <h2>Login</h2>
    <form action="../public/login.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit">Login</button>
    </form>
  </div>

    <script src="js/script.js"></script>
</body>
</html>
