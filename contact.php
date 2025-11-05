<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">


</head>
<body>

  <?php include 'navbar.php'; ?>

  <section class="contact-container">
    <div class="contact-info">
      <h3>Get In Touch</h3>
      <p>📧 Email: abhishek@nexgendigitalsolution.com</p>
      <p>📞 Phone: +91 9560321883</p>
      <p>🏢 Registered address - 321, Pragati Appartment, Punjabi Bagh Road, Paschim Vihar, West Delhi, Delhi-110063</p>
      <p>🏢Office address - B-143, Mansaram Park, Nawada , New Delhi-110059</p>
      <br>
      <br>
      <h3>Follow Us:</h3>
<div class="contact-social-icons">
  <a href="https://www.facebook.com/NexgenDigitalSolutions"><i class="fab fa-facebook-f"></i></a>
  <a href="https://www.instagram.com/nexgen.digital.solutions/"><i class="fab fa-instagram"></i></a>
  <a href="https://www.linkedin.com/company/78472269/admin/page-posts/published/"><i class="fab fa-linkedin-in"></i></a>
  <a href="https://x.com/nexgendigsol"><i class="fab fa-twitter"></i></a>
</div>

    </div>

    <div class="contact-form">
      <h3>Send Us a Message</h3>
      <br>
      <form action="process_contact.php" method="POST">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="text" name="number" placeholder="Your Number" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <div class="checkbox-container">
  <label class="checkbox-item">
    <input type="checkbox" name="agree_terms" required>
    <span>By filling out the form, you agree to Nexgen Digital Solutions’ <a href="terms.php">Terms and Conditions</a> and <a href="privacy.php">Privacy Policy</a>.</span>
  </label>

  <label class="checkbox-item">
    <input type="checkbox" name="agree_updates">
    <span>I agree to receive information, promotions, and updates from Nexgen Digital Solutions.</span>
  </label>
</div>
<button type="submit">Submit</button>
  </section>

  <?php include 'footer.php'; ?>

</body>
</html>