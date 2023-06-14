<!-- views/register.html -->
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <!-- Add CSS stylesheets and other necessary meta tags and scripts -->
    <style>
        /* styles.css */

/* Signup Form */
.signup-form {
  max-width: 400px;
  margin: 0 auto;
  padding: 20px;
  background-color: #f4f4f4;
  border-radius: 5px;
}

.signup-form h2 {
  text-align: center;
  margin-bottom: 20px;
}

.signup-form input[type="text"],
.signup-form input[type="email"],
.signup-form input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

.signup-form button {
  width: 100%;
  padding: 10px;
  background-color: #f00;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

.signup-form button:hover {
  background-color: #ff5050;
}

    </style>
</head>
<body>
<?php include 'navbar.php'?>
    <!-- Registration Form -->
    <div class="signup-form">
    <h2>Signup</h2>
    <form action="process_signup.php" method="POST">
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <!-- <input type="number" name="account" placeholder="account number" required> 
      <input type="number" name="balance" placeholder="balance" required>-->
      <button type="submit" name="register">Sign Up</button>
    </form>
  </div>
    <!-- Add CSS styles for the page -->
</body>
</html>
