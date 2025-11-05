<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Nexgen Digital Solutions | Home</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<style>
  /* General Reset */
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Dosis:wght@200..800&display=swap');
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
:root {
  --font-serif: 'Cormorant Garamond', serif;
  --font-sans: 'Dosis', sans-serif;
  --font-display: 'Bebas Neue', sans-serif;
}

/* Navbar Base */
.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 80px;
  background: #FDFAF6;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  position: sticky;
  top: 0;
  z-index: 1000;
  height: 70px; 
  font-family: var(--font-sans);
}

/* Logo */
.logo img {
  height: 55px; /* Adjust height as needed */
  width: auto;
  display: block;
  object-fit: contain;
}

/* Nav Links */
.nav-links {
  list-style: none;
  display: flex;
  gap: 30px;
  margin: 0;
  padding: 0;
}

.nav-links li a {
  text-decoration: none;
  color: #0a0a23;
  font-weight: 500;
  transition: color 0.3s ease;
}

.nav-links li a:hover {
  color: #ff7f00;
}




/* NEW HERO SECTION - FULL BACKGROUND IMAGE */
.hero {
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  background:  #FDFAF6;
}

.hero-box {
  position: relative;
  width: 80vw;
  height: 80vh;
  border-radius: 25px;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0,0,0,0.15);
  background-image: url("assets/images/hero-image.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

/* Dark overlay to make text readable */
.hero-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55);
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 40px;
}

/* Text Content */
.hero-content {
  text-align: center;
  color:  #FDFAF6;
  max-width: 650px;
}

.hero-title {
  font-size: 3rem;
  font-family: "Bebas Neue", sans-serif;
  letter-spacing: 2px;
  margin-bottom: 15px;
}

.hero-tagline {
  font-size: 1.6rem;
  font-family: "Cormorant Garamond", serif;
  font-weight: 500;
  margin-bottom: 15px;
  color: #f8f8f8;
}

.hero-desc {
  font-size: 1.05rem;
  line-height: 1.7;
  font-family: "Dosis", sans-serif;
  color: #eaeaea;
  margin-bottom: 30px;
}

/* Button */
.hero-btn {
  background: linear-gradient(45deg, #7cddfa, #5ac2e8);
  padding: 12px 35px;
  border-radius: 8px;
  font-weight: bold;
  color:  #FDFAF6;
  text-decoration: none;
  transition: 0.3s ease;
}

.hero-btn:hover {
  background: #ffb347;
  transform: translateY(-3px);
}

/* Responsive */
@media (max-width: 900px) {
  .hero-box {
    width: 90vw;
    height: 70vh;
  }
  .hero-title {
    font-size: 2.3rem;
  }
  .hero-tagline {
    font-size: 1.3rem;
  }
  .hero-desc {
    font-size: 0.95rem;
  }
}





/* Services Page */
.services {
  padding: 20px 60px;
  background:  #FDFAF6;
  text-align: center;
}

.services h2 {
  color: #0a0a23;
  font-size: 3rem;
  margin-bottom: 2px;
  font-weight: 600;
  font-family: "Cormorant Garamond", serif;
}

.services p {
  color: #0a0a23;
  margin-bottom: 10px;
  font-size: 1.2rem;
  
  font-family: "Dosis", serif;
}

.servicesimg {
  width: 100%;
  margin-top: 2rem;
  margin-bottom: 2rem;
  padding-left: 1rem;
  padding-right: 1rem;
  margin-left: auto;
  margin-right: auto;
}

.service-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 60px;
  padding: 40px 50px;
}

.service-card {
  background-color: #FDFAF6;
  border-radius: 12px;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.service-card img {
  width: 70%;
  height: 200px;
  object-fit: cover;
}

.service-card h3 {
  margin: 15px 20px 10px;
  color: #0a0a23;
  text-align: left;
  font-weight: 500;
}

.service-card p {
  margin: 0 20px 20px;
  color: #0a0a23;
  font-size: 1rem;
  text-align: justify;
}

.service-card button {
  margin: 0 20px 20px;
  padding: 8px 20px;
  border: 1px solid #ff6600;
  background: transparent;
  color: #ff6600;
  border-radius: 20px;
  cursor: pointer;
  transition: 0.3s;
  
}
.service-card button:hover {
  background: #ff6600;
  color:  #FDFAF6;
}

/* Contact Page */
.contact-container {
  display: flex;
  justify-content: space-around;
  align-items: flex-start;
  padding: 80px;
  background:  #FDFAF6;
  flex-wrap: wrap;
}

.contact-info {
  width: 40%;
  background: #FDFAF6;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.contact-info h3 {
  margin-bottom: 20px;
}

.contact-info p {
  margin-bottom: 15px;
  line-height: 1.5;
}

.contact-form {
  width: 45%;
  background: #FDFAF6;
  padding: 30px;
  border-radius: 15px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.contact-form input, 
.contact-form textarea {
  width: 100%;
  padding: 12px;
  margin-bottom: 15px;
  border: 1px solid #ccc;
  border-radius: 8px;
}

.contact-form button {
  background: #ff6600;
  border: none;
  color: white;
  padding: 12px 25px;
  border-radius: 25px;
  cursor: pointer;
  transition: 0.3s;
}

.contact-form button:hover {
  background: #e05500;
}


/* Checkbox container */
.checkbox-container {
  margin: 20px 0;
  display: flex;
  flex-direction: column;
  gap: 10px;
}

/* Each checkbox + text */
.checkbox-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 15px;
  line-height: 1.4;
  color: #333;
}

/* The actual checkbox box */
.checkbox-item input[type="checkbox"] {
  width: 18px;
  height: 18px;
  accent-color: #b55b73; /* theme color */
  flex-shrink: 0;
  cursor: pointer;
}

/* The text beside checkbox */
.checkbox-item span {
  display: inline-block;
}

/* Link styling */
.checkbox-item a {
  color: #b55b73;
  text-decoration: none;
}

.checkbox-item a:hover {
  text-decoration: underline;
}




/* Footer */
footer {
  background: #0a0a23;
  color: #ddd;
  padding: 50px 80px;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

footer div {
  margin: 15px 0;
}

footer h4 {
  margin-bottom: 15px;
  color: #fff;
  font-family: var(--font-bebas);
}

footer p, footer a {
  color: #bbb;
  font-size: 0.9rem;
  text-decoration: none;
}

footer a:hover {
  color: #ff6600;
}


.social-icons {
  margin-top: 20px;
  display: flex;
  justify-content: center;
  gap: 20px;   /* <-- this creates spacing between icons */
}

.social-icons a {
  color: #ffe8d6;
  font-size: 22px;
  transition: color 0.3s ease, transform 0.3s ease;
  text-decoration: none;
}

.social-icons a:hover {
  color: #ff7f00;
  transform: scale(1.2);
}
.contact-social-icons {
  margin-top: 10px;
}

.contact-social-icons a {
  display: inline-block;
  margin-right: 12px;
  text-decoration: none;
  color: #333;
  font-size: 20px;
  transition: color 0.3s ease, transform 0.3s ease;
}

.contact-social-icons a:hover {
  color: #007bff;
  transform: scale(1.2);
}

.service-text {
  flex: 1;
  min-width: 320px;
  max-width: 600px;
  background-color:#FFFF;
}

.service-text h1 {
  font-size: 2.4rem;
  margin-bottom: 20px;
  color: #222;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.service-text p {
  font-size: 1rem;
  color: #444;
  line-height: 1.7;
  margin-bottom: 15px;
}

.service-image {
  flex: 1;
  text-align: center;
  min-width: 300px;
}

.service-image img {
  max-width: 100%;
  border-radius: 10px;
  box-shadow: 0px 6px 18px rgba(0, 0, 0, 0.15);
  transition: transform 0.3s ease;
}

.service-image img:hover {
  transform: scale(1.03);
}


/* ===== ABOUT SECTION ===== */
.about-section {
  background-color:  #FDFAF6;
  color: #000;
  padding: 40px 60px;
  font-family: 'Poppins', sans-serif;
}

.about-header hr {
  border-top: 1px solid #444;
  margin: 0 0;
  width: 100%;
}

.about-top {
  display: flex;
  justify-content: space-between;
  margin: 2px auto 40px auto;
  font-size: 14px;
}

.about-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 60px;
  max-width: 1200px;
  margin: auto;
  flex-wrap: wrap;
}

.about-image img {
  width: 100%;
  max-width: 500px;
  height: auto;
}

.about-content {
  flex: 1;
  min-width: 300px;
}

.about-title {
  color: #1a3fad;
  font-size: 42px;
  margin-bottom: 10px;
  font-family: var(--font-display);
}

.about-subtitle {
  font-size: 20px;
  margin-bottom: 15px;
  font-weight: 300;
  font-family: var(--font-display);
}

.about-content p {
  text-align: justify;
  line-height: 1.6;
  margin-bottom: 20px;
  font-family: var(--font-sans);
}

.about-list {
  list-style: none;
  padding: 0;
  font-family: var(--font-sans);
}

.about-list li {
  margin-bottom: 10px;
  font-size: 16px;
}

.about-list i {
  color: #1a3fad;
  margin-right: 8px;
}


.how-we-do {
  background-color:  #FDFAF6;
  color: #222;
  padding: 40px 60px;
  text-align: center;
}

.how-we-do h1 {
  font-family: 'Cormorant Garamond', serif;
  font-size: 38px;
  margin-bottom: 10px;
}

.how-we-do p {
  font-size: 16px;
  color: #444;
  margin-bottom: 40px;
}

.how-we-do .faq {
  text-align: left;
  border-bottom: 1px solid #ddd;
  padding: 15px 0;
  cursor: pointer;
  transition: background 0.3s;
  max-width: 800px;
  margin: 0 auto;
}

.how-we-do .faq:hover {
  background: #f9f9f9;
}

.how-we-do .faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: 500;
  font-size: 16px;
}

.how-we-do .faq-answer {
  display: none;
  font-size: 15px;
  color: #555;
  margin-top: 10px;
  line-height: 1.6;
}

.how-we-do .faq.active .faq-answer {
  display: block;
}

.how-we-do .arrow {
  transition: transform 0.3s;
}

.how-we-do .faq.active .arrow {
  transform: rotate(180deg);
}


/* Info Bar */
.info-bar {
  width: 100%;
  background: #fff5f5;
  color: #8a1c1c;
  border-bottom: 1px solid #f5c2c2;
  overflow: hidden;
  position: relative;
  font-family: "Dosis", sans-serif;
}

.info-text {
  white-space: nowrap;
  display: inline-block;
  padding: 10px 0;
  font-size: 15px;
  animation: scrollText 25s linear infinite;
}

.info-text strong {
  color: #b55b73;
}

.info-text a {
  color: #b55b73;
  text-decoration: none;
  font-weight: 600;
}

.info-text a:hover {
  text-decoration: underline;
}

@keyframes scrollText {
  0% { transform: translateX(100%); }
  100% { transform: translateX(-100%); }
}

@media (max-width: 900px) {
  .service-detail {
    flex-direction: column;
    text-align: center;
  }
  .service-text {
    max-width: 90%;
  }
  .service-image {
    margin-top: 30px;
  }
}


@media (max-width: 768px) {
  .hero-box {
    width: 90vw;
    height: 50vh;
  }

  .hero-content h1 {
    font-size: 1.8rem;
  }

  .hero-content p {
    font-size: 1rem;
  }
}
/* ===========================
   📱 RESPONSIVE MEDIA QUERIES
   =========================== */

/* --- Large Tablets (max-width: 1200px) --- */
@media (max-width: 1200px) {
  .navbar {
    padding: 15px 50px;
  }

  .hero-title {
    font-size: 2.6rem;
  }

  .hero-tagline {
    font-size: 1.4rem;
  }

  .services h2 {
    font-size: 2.5rem;
  }

  .about-title {
    font-size: 36px;
  }

  footer {
    padding: 40px 50px;
  }
}

/* --- Tablets (max-width: 992px) --- */
@media (max-width: 992px) {
  .navbar {
    padding: 15px 40px;
  }

  .hero-box {
    width: 90vw;
    height: 65vh;
  }

  .hero-title {
    font-size: 2.2rem;
  }

  .hero-tagline {
    font-size: 1.2rem;
  }

  .hero-desc {
    font-size: 0.95rem;
  }

  .service-grid {
    gap: 40px;
    padding: 30px 20px;
  }

  .about-container {
    flex-direction: column;
    text-align: center;
  }

  .about-title {
    font-size: 32px;
  }

  .about-subtitle {
    font-size: 18px;
  }

  footer {
    flex-direction: column;
    text-align: center;
  }
}

/* --- Mobile Landscape (max-width: 768px) --- */
@media (max-width: 768px) {
  /* Navbar */
  .navbar {
    padding: 10px 25px;
    height: auto;
  }

  .nav-links {
    display: none;
    flex-direction: column;
    background: #fff;
    position: absolute;
    top: 65px;
    right: 0;
    width: 200px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
  }

  .nav-links.active {
    display: flex;
  }

  .menu-toggle {
    display: block;
    font-size: 28px;
    cursor: pointer;
  }

  /* Hero Section */
  .hero-box {
    height: 55vh;
  }

  .hero-title {
    font-size: 1.8rem;
  }

  .hero-tagline {
    font-size: 1.1rem;
  }

  .hero-desc {
    font-size: 0.9rem;
  }

  /* Services */
  .services {
    padding: 30px 20px;
  }

  .services h2 {
    font-size: 2rem;
  }

  .services p {
    font-size: 1rem;
  }

  /* About Section */
  .about-title {
    font-size: 28px;
  }

  .about-subtitle {
    font-size: 17px;
  }

  .about-content p {
    font-size: 0.95rem;
  }

  /* Contact Section */
  .contact-container {
    flex-direction: column;
    padding: 40px 25px;
  }

  .contact-info,
  .contact-form {
    width: 100%;
  }

  /* Footer */
  footer {
    padding: 30px 20px;
  }

  footer h4 {
    font-size: 1rem;
  }

  footer p,
  footer a {
    font-size: 0.85rem;
  }
}

/* --- Mobile Portrait (max-width: 480px) --- */
@media (max-width: 480px) {
  /* Navbar */
  .navbar {
    padding: 10px 15px;
  }

  .logo img {
    height: 40px;
  }

  /* Hero */
  .hero {
    height: 70vh;
  }

  .hero-title {
    font-size: 1.6rem;
  }

  .hero-tagline {
    font-size: 0.7rem;
  }

  .hero-desc {
    font-size: 0.7rem;
  }

  .hero-btn {
    padding: 10px 20px;
    font-size: 0.7rem;
  }

  /* Services */
  .services h2 {
    font-size: 1.8rem;
  }

  .services p {
    font-size: 0.9rem;
  }

  .service-card h3 {
    font-size: 1rem;
  }

  .service-card p {
    font-size: 0.9rem;
  }

  /* About */
  .about-title {
    font-size: 26px;
  }

  .about-subtitle {
    font-size: 16px;
  }

  .about-content p {
    font-size: 0.85rem;
  }

  /* Contact */
  .contact-container {
    padding: 20px;
  }

  .contact-info,
  .contact-form {
    padding: 20px;
  }

  .contact-form input,
  .contact-form textarea {
    font-size: 0.9rem;
  }

  /* Footer */
  footer {
    padding: 25px 15px;
  }

  footer p,
  footer a {
    font-size: 0.8rem;
  }

  .social-icons a {
    font-size: 18px;
  }
}

</style>
</head>
<body>

  <?php include 'navbar.php'; ?>
<div id="dynamicPadding">
<div class="info-bar">
  <div class="info-text">
    🚨 <strong>Important Notice:</strong> Beware of fraudulent job offers made in the name of 
    <b>Nexgen Digital Solutions</b>. We never charge any fees during hiring and only use official emails ending with 
    <b>@nexgendigitalsolution.com</b>. Report suspicious offers to 
    <a href="mailto:sales@nexgendigitalsolution.com">sales@nexgendigitalsolution.com</a>.
  </div>
</div>
<section class="hero">
  <div class="hero-box">
    <div class="hero-overlay">
      <div class="hero-content">
        <h1 class="hero-title">NEXGEN DIGITAL SOLUTIONS</h1>
        <h2 class="hero-tagline">Where Creativity Meets Strategy.</h2>
        <p class="hero-desc">
          Driven by innovation and guided by results, Nexgen Digital Solutions helps brands navigate the ever-evolving digital world — creating strategies that turn potential into performance.
        </p>
        <a href="services.php" class="btn hero-btn">Our Services</a>
      </div>
    </div>
  </div>
</section>



  <section class="about-section">
    <div class="about-header">
      <hr>
      <div class="about-top">
        <span>About Us</span>
        <span>01</span>
      </div>
    </div>

    <div class="about-container">
      <!-- Left Image -->
      <div class="about-image">
        <img src="assets/about.png" alt="About Nexgen Digital Solutions">
      </div>

      <!-- Right Content -->
      <div class="about-content">
        <h3 class="about-title">WELCOME TO NEXGEN DIGITAL SOLUTIONS.</h3>
        <h4 class="about-subtitle">All-In-One Web & Marketing Solutions</h4>
        <p>
          We have experienced professional team of developers who are here to fulfill your digital marketing requirements. 
          We provide services like SMS Services, RCS Services, Business WhatsApp API, Email Services, Digital Marketing Services, 
          SEO Services, Voice Call services, IVR Services and various web services all over the world. 
          Entrepreneurs and business owners are showing increasing interest in India.
        </p>

        <ul class="about-list">
          <li><i class="fa-regular fa-circle-check"></i> SMS Services</li>
          <li><i class="fa-regular fa-circle-check"></i> RCS Services</li>
          <li><i class="fa-regular fa-circle-check"></i> Business WhatsApp API</li>
          <li><i class="fa-regular fa-circle-check"></i> Email Services</li>
          <li><i class="fa-regular fa-circle-check"></i> Digital Marketing Services</li>
          <li><i class="fa-regular fa-circle-check"></i> SEO Services</li>
          <li><i class="fa-regular fa-circle-check"></i> Voice Call Services</li>
          <li><i class="fa-regular fa-circle-check"></i> IVR Services</li>
        </ul>
      </div>
    </div>
  </section>
  
  
  
  <section class="services">
    <div class="about-header">
      <hr>
      <div class="about-top">
        <span>Services</span>
        <span>02</span>
      </div>
    </div>
    <h2>We don’t just offer solutions<br>
We help shape your brand’s future.</h2>
    <p>Our work goes beyond fixing surface-level problems. We dig deeper to align your business with its core purpose,<br> closing the “walk the talk” gap that often leads to lost trust, poor engagement, and stalled growth.</p>
    <div class="service-grid">


      <div class="service-card">
        <img src="assets/4.png" alt="SMS Services">
        <h3 class="service-index">01</h3>
        <h3>SMS Services</h3>
        <p>Reach your audience instantly with our high-speed, reliable bulk SMS solutions. Whether it’s for promotions, alerts, reminders, or updates, we help you deliver your message directly to your customers’ phones with maximum impact.</p>
      <button onclick="window.location.href='services/sms.php'">Know More</button>

      </div>


      <div class="service-card">
        <img src="assets/2.png" alt="SEO Services">
        <h3 class="service-index">02</h3>
        <h3>RCS Services</h3>
        <p>RCS (Rich Communication Services) is the next generation of SMS that brings rich, interactive, and branded experiences to users—directly in their phone's default messaging app (like Google Messages).</p>
<button onclick="window.location.href='services/rcs.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/6.png" alt="App Design">
        <h3 class="service-index">03</h3>
        <h3>Business WhatsApp API</h3>
        <p>The WhatsApp Business API Services is designed for medium and large businesses to communicate with their customers at scale using automated, secure, and verified messaging on WhatsApp.
</p>
<button onclick="window.location.href='services/whatsapp.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/7.png" alt="SEO Services">
        <h3 class="service-index">04</h3>
        <h3>Email Services</h3>
        <p>Email services refer to professional platforms or tools used to send bulk emails, transactional alerts, promotions, reminders, newsletters, and automated sequences for marketing, engagement, or customer support.</p>
<button onclick="window.location.href='services/email.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/12.png" alt="SEO Services">
        <h3 class="service-index">05</h3>
        <h3>Digital Marketing Services</h3>
        <p>We help you craft and execute a result-driven digital marketing strategy tailored to your unique business goals. Our approach combines the latest industry trends, advanced tools, and in-depth analytics to maximize your online presence.</p>
<button onclick="window.location.href='services/digital-marketing.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/5.png" alt="SEO Services">
        <h3 class="service-index">06</h3>
        <h3>SEO Services</h3>
        <p>At Nexgen Digital Solutions, our expert SEO services are designed to boost your website’s visibility, attract high-quality traffic, and increase conversions — all through proven, white-hat techniques that align with Google’s algorithms.</p>
<button onclick="window.location.href='services/seo.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/11.png" alt="SEO Services">
        <h3 class="service-index">07</h3>
        <h3>Voice Call Services</h3>
        <p>At Nexgen Digital Solutions, our Voice Call Services help businesses communicate instantly and effectively with their customers through automated pre-recorded voice messages in any regional language.</p>
<button onclick="window.location.href='services/voice-call.php'">Know More</button>
      </div>


      <div class="service-card">
        <img src="assets/10.png" alt="SEO Services">
        <h3 class="service-index">08</h3>
        <h3>IVR Services</h3>
        <p>IVR (Interactive Voice Response) is a cloud-based telephony system that interacts with callers using voice menus and keypad input. It helps businesses manage incoming calls and deliver a personalized caller experience.</p>
<button onclick="window.location.href='services/ivr.php'">Know More</button>
      </div>
    </div>
  </section>

  <!-- How We Do Section -->
<section class="how-we-do">
  <div class="about-header">
      <hr>
      <div class="about-top">
        <span>How we do?</span>
        <span>03</span>
      </div>
    </div>
  <div class="container">
    <h1>From strategy to delivery<br>and everything in between.</h1>
    <p>We plan, create, and execute with precision to bring vision to life.<br>
    Want the inside scoop? Our friendly team is just a call, email, or WhatsApp away.</p>

    <?php
    $faqs = [
      [
        "question" => "1. What services do you offer?",
        "answer" => "We offer a complete range of digital solutions, including Digital Marketing (SEO, SMO, PPC), Bulk SMS & Email Services, WhatsApp Marketing, IVR & Voice Broadcasting, and more."
      ],
      [
        "question" => "2. Do you provide ongoing support and maintenance?",
        "answer" => "Yes, we offer ongoing support and maintenance packages to ensure your website, app, or marketing campaign continues running smoothly and efficiently after launch."
      ],
      [
        "question" => "3. Can you help with SEO and getting my website ranked?",
        "answer" => "Yes, our SEO experts use proven strategies to help improve your search engine visibility and drive organic traffic to your website."
      ],
      [
        "question" => "4. How do bulk SMS, email, or WhatsApp marketing services work?",
        "answer" => "We provide easy-to-use platforms and API integrations to send bulk SMS, emails, and WhatsApp messages to your audience. These tools are great for promotions, alerts, or customer engagement at scale."
      ],
      [
        "question" => "5. How do I get started?",
        "answer" => "You can get started by contacting us through our website or filling out the inquiry form. We’ll schedule a consultation to understand your goals and propose the best solution."
      ]
    ];

    foreach ($faqs as $faq) {
      echo '
      <div class="faq">
        <div class="faq-question">
          <span>' . $faq["question"] . '</span>
          <span class="arrow">▼</span>
        </div>
        <div class="faq-answer">' . $faq["answer"] . '</div>
      </div>';
    }
    ?>
  </div>
</section>

  </div>
  <?php include 'footer.php'; ?>

  <script>
  const faqs = document.querySelectorAll('.faq');
  faqs.forEach(faq => {
    faq.addEventListener('click', () => {
      faq.classList.toggle('active');
    });
  });
    const container = document.getElementById('dynamicPadding');

    function handleResize() {
      const padding = (window.innerWidth - 1280) / 2;
      const paddingX = padding > 0 ? padding : 0;

      container.style.paddingLeft = `${paddingX}px`;
      container.style.paddingRight = `${paddingX}px`;
    }

    handleResize(); // Run initially
    window.addEventListener('resize', handleResize);
</script>

</body>
</html>
