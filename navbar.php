<!-- <nav class="navbar">
  <div class="logo">
    <a href="index.php">
      <img src="assets/images/logo.png" alt="Company Logo">
    </a>
  </div>
  <ul class="nav-links">
    <li><a href="index.php">Home</a></li>
    <li><a href="services.php">Services</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>
</nav> -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nexgen Digital Solutions</title>
  <style>
    /* Basic navbar styling */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: "Poppins", sans-serif;
      background-color: #FDFAF6;
    }

    .navbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background: #FDFAF6;
      padding: 12px 30px;
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .logo img {
      height: 45px;
      width: auto;
    }

    /* Nav links */
    .nav-links {
      list-style: none;
      display: flex;
      gap: 25px;
    }

    .nav-links li a {
      color: #000000;
      text-decoration: none;
      font-size: 16px;
      font-weight: 500;
      transition: color 0.3s;
    }

    .nav-links li a:hover {
      color: #00bcd4;
    }

    /* Mobile menu icon (hamburger) */
    .menu-icon {
      display: none;
      font-size: 28px;
      color: #000000;
      cursor: pointer;
      transition: transform 0.3s;
    }

    /* Responsive styles */
    @media (max-width: 768px) {
      .menu-icon {
        display: block;
      }

      .nav-links {
        display: none;
        position: absolute;
        top: 60px;
        right: 0;
        width: 220px;
        background: #FDFAF6;
        flex-direction: column;
        align-items: flex-start;
        padding: 15px 20px;
        border-top: 1px solid #222;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
      }

      .nav-links.show {
        display: flex;
        animation: slideDown 0.3s ease-in-out;
      }

      .nav-links li {
        margin: 12px 0;
      }

      .nav-links li a {
        font-size: 15px;
      }

      @keyframes slideDown {
        from {
          opacity: 0;
          transform: translateY(-10px);
        }
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar">
    <div class="logo">
      <a href="index.php">
        <img src="assets/images/logo.png" alt="Company Logo">
      </a>
    </div>

    <div class="menu-icon" id="menu-icon">&#9776;</div>

    <ul class="nav-links" id="nav-links">
      <li><a href="index.php">Home</a></li>
      <li><a href="services.php">Services</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>
  </nav>

  
  <!-- JS for menu toggle -->
  <script>
    const menuIcon = document.getElementById('menu-icon');
    const navLinks = document.getElementById('nav-links');

    menuIcon.addEventListener('click', () => {
      navLinks.classList.toggle('show');
      menuIcon.innerHTML = navLinks.classList.contains('show') ? '&times;' : '&#9776;';
    });
  </script>

</body>
</html>
