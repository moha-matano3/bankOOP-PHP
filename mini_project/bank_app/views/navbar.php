<style>
  /* styles.css */

/* Navigation Bar */
.nav-menu {
  background-color: #333;
  height: 50px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  list-style-type: none;
}

.nav-menu ul {
  margin: 0;
  padding: 0;
  display: flex;
}

.nav-menu li {
  margin: 0 10px;
}

.nav-menu li a {
  text-decoration: none;
  color: #fff;
  font-weight: bold;
}

.nav-menu li a:hover {
  color: #ff5050;
}

    </style>
<nav>
    <div class="top-nav">
    <ul class="nav-menu">
        <li><a href="../views/home.php">Home</a></li>
        <li><a href="../views/about.php">About</a></li>
        <li><a href="../views/services.php">Services</a></li>
        <li><a href="../views/blog.php">Blog</a></li>
        <li><a href="../views/contacts.php">Contacts</a></li>
        <li><a href="login.php" class="button" style="color: white">Login</a></li>
        <li><a href="register.php" class="button" style="color: white">Register</a></li>
    </ul>
    </div>
</nav>