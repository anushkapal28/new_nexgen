<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Our Services</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <?php include 'navbar.php'; ?>

  <section class="services">
    <div class="serviceupper">
    <h2>Our Solutions</h2>
    <h2>Your Advantage.</h2>
    <p>
      As more entrepreneurs and businesses embrace the digital shift, we’re proud to be the backbone behind countless success stories across India and beyond. With every line of code, every campaign, and every solution, we help you stand out, scale up, and stay ahead.
      
    </p>
    <p>
      We offer a full suite of web and marketing services designed to elevate your business — from startups to enterprises.
    </p>
  </div>

  <img class="servicesimg" src="./assets/services.jpg" alt="Services">

  <hr>

  <div class="bottom">
    <span>Our Services</span>
    <span>01</span>
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
      <button  onclick="window.location.href='services/sms.php'">INQUIRE NOW</button>

      </div>


      <div class="service-card">
        <img src="assets/2.png" alt="SEO Services">
        <h3 class="service-index">02</h3>
        <h3>RCS Services</h3>
        <p>RCS (Rich Communication Services) is the next generation of SMS that brings rich, interactive, and branded experiences to users—directly in their phone's default messaging app (like Google Messages).</p>
<button onclick="window.location.href='services/rcs.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/6.png" alt="App Design">
        <h3 class="service-index">03</h3>
        <h3>Business WhatsApp API</h3>
        <p>The WhatsApp Business API Services is designed for medium and large businesses to communicate with their customers at scale using automated, secure, and verified messaging on WhatsApp.
</p>
<button onclick="window.location.href='services/whatsapp.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/7.png" alt="SEO Services">
        <h3 class="service-index">04</h3>
        <h3>Email Services</h3>
        <p>Email services refer to professional platforms or tools used to send bulk emails, transactional alerts, promotions, reminders, newsletters, and automated sequences for marketing, engagement, or customer support.</p>
<button onclick="window.location.href='services/email.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/12.png" alt="SEO Services">
        <h3 class="service-index">05</h3>
        <h3>Digital Marketing Services</h3>
        <p>We help you craft and execute a result-driven digital marketing strategy tailored to your unique business goals. Our approach combines the latest industry trends, advanced tools, and in-depth analytics to maximize your online presence.</p>
<button onclick="window.location.href='services/digital-marketing.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/5.png" alt="SEO Services">
        <h3 class="service-index">06</h3>
        <h3>SEO Services</h3>
        <p>At Nexgen Digital Solutions, our expert SEO services are designed to boost your website’s visibility, attract high-quality traffic, and increase conversions — all through proven, white-hat techniques that align with Google’s algorithms.</p>
<button onclick="window.location.href='services/seo.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/11.png" alt="SEO Services">
        <h3 class="service-index">07</h3>
        <h3>Voice Call Services</h3>
        <p>At Nexgen Digital Solutions, our Voice Call Services help businesses communicate instantly and effectively with their customers through automated pre-recorded voice messages in any regional language.</p>
<button onclick="window.location.href='services/voice-call.php'">INQUIRE NOW</button>
      </div>


      <div class="service-card">
        <img src="assets/10.png" alt="SEO Services">
        <h3 class="service-index">08</h3>
        <h3>IVR Services</h3>
        <p>IVR (Interactive Voice Response) is a cloud-based telephony system that interacts with callers using voice menus and keypad input. It helps businesses manage incoming calls and deliver a personalized caller experience.</p>
<button onclick="window.location.href='services/ivr.php'">INQUIRE NOW</button>
      </div>
    </div>
    <hr>

  <div class="bottom">
    <span>Frequently Asked Questions</span>
    <span>02</span>
  </div>
  <h2>Need Clarity?<br>
We've Got You</h2>
    <p>Everything you need to know about cleansing, delivery and more.</p>
    <p>Got more questions? Reach out to our friendly customer service team via email, WhatsApp and phone.</p>

    
  </section>
<section class="how-we-do">
  <div class="container">
    
    <?php
    $faqs = [
      [
        "question" => "1. What services do you offer?",
        "answer" => "We offer a complete range of digital solutions, including Website Design & Development, Mobile App Development, Digital Marketing (SEO, SMO, PPC), Bulk SMS & Email Services, WhatsApp Marketing, IVR & Voice Broadcasting, and more."
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
  <?php include 'footer.php'; ?>
  <script>
    const faqs = document.querySelectorAll('.faq');
  faqs.forEach(faq => {
    faq.addEventListener('click', () => {
      faq.classList.toggle('active');
    });
  });
  </script>

</body>
</html>
