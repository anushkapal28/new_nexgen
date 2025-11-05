<?php include('navbar.php'); ?> 
<!-- This assumes you already have header.php for navbar -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Terms & Conditions | Nexgen Digital Solutions</title>
  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #FDFAF6;
      color: #333;
      margin: 0;
      padding: 0;
    }

    .terms-section {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 70px 20px 100px;
    }

    .terms-box {
      background: #FDFAF6;
      max-width: 950px;
      width: 100%;
      padding: 60px 70px;
      border-radius: 20px;
      box-shadow: 0 12px 35px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      animation: fadeIn 0.8s ease forwards;
    }

    .terms-box:hover {
      transform: translateY(-3px);
      box-shadow: 0 18px 45px rgba(0, 0, 0, 0.1);
    }

    @keyframes fadeIn {
      from {opacity: 0; transform: translateY(20px);}
      to {opacity: 1; transform: translateY(0);}
    }

    .terms-box h1 {
      text-align: center;
      font-size: 2.3rem;
      color: #0a0a23;
      margin-bottom: 10px;
      letter-spacing: 0.5px;
    }

    .terms-box .effective-date {
      text-align: center;
      font-size: 0.95rem;
      color: #666;
      margin-bottom: 25px;
    }

    .terms-box p, .terms-box li {
      font-size: 1.05rem;
      color: #444;
      line-height: 1.7;
      margin-bottom: 16px;
      text-align: justify;
    }

    .terms-box h2 {
      font-size: 1.35rem;
      color: #1c1c47;
      margin-top: 35px;
      margin-bottom: 10px;
      font-weight: 600;
    }

    .terms-box ul {
      margin: 15px 0 15px 25px;
      padding: 0;
    }

    .terms-box ul li {
      list-style-type: disc;
      margin-bottom: 10px;
    }

    @media (max-width: 768px) {
      .terms-box {
        padding: 35px 25px;
      }
      .terms-box h1 {
        font-size: 1.8rem;
      }
    }
  </style>
</head>
<body>

  <section class="terms-section">
    <div class="terms-box">
      <h1>Terms & Conditions</h1>
      <p class="effective-date"><strong>Effective Date:</strong> 13/08/2025</p>
      <p><strong>Company:</strong> Nexgen Digital Solutions &nbsp; • &nbsp; <strong>Website:</strong> www.nexgendigitalsolutions.com</p>

      <p>Please read these Terms and Conditions ("Terms") carefully before using our website or services. By accessing or using any part of the site or our services, you agree to be bound by these Terms.</p>

      <h2>1. Acceptance of Terms</h2>
      <p>By visiting our website or availing any of our services (including digital marketing, SMS, WhatsApp API, email, voice call, website development, etc.), you agree to comply with and be legally bound by these Terms. If you do not agree to these Terms, you must not use our services.</p>

      <h2>2. Services Overview</h2>
      <p>Nexgen Digital Solutions offers digital marketing and IT solutions, including but not limited to:</p>
      <ul>
        <li>SEO, Social Media Marketing</li>
        <li>Bulk SMS, Voice Call & WhatsApp API</li>
        <li>Email Marketing</li>
        <li>Web Design & Development</li>
        <li>Lead Generation Campaigns</li>
        <li>RCS & IVR Services</li>
      </ul>
      <p>We reserve the right to change or discontinue any service at any time without notice.</p>

      <h2>3. Eligibility</h2>
      <p>Our services are intended for businesses, organizations, and individuals above the age of 18. By using our services, you confirm that you meet this requirement.</p>

      <h2>4. User Responsibilities</h2>
      <ul>
        <li>Provide accurate, current, and complete information during the registration or inquiry process.</li>
        <li>Use our services only for lawful purposes.</li>
        <li>Not engage in any activity that interferes with or disrupts our platform.</li>
        <li>Not misuse our services for sending spam, offensive, or misleading content.</li>
      </ul>

      <h2>5. Payment Terms</h2>
      <ul>
        <li>All services are subject to full or partial advance payment as mutually agreed.</li>
        <li>Fees for services are non-refundable unless otherwise stated.</li>
        <li>Late payments may result in service interruption or suspension.</li>
        <li>Nexgen reserves the right to revise pricing at any time with prior notice to the client.</li>
      </ul>

      <h2>6. Intellectual Property</h2>
      <p>All content, designs, graphics, texts, logos, and software on our website or created during project delivery are the intellectual property of Nexgen Digital Solutions or its partners. You may not use, copy, reproduce, or modify any content without prior written permission.</p>

      <h2>7. Confidentiality</h2>
      <p>We respect the confidentiality of our clients' business information and agree not to disclose any private or sensitive data without written consent, except as required by law.</p>

      <h2>8. Limitation of Liability</h2>
      <p>Nexgen Digital Solutions shall not be liable for any direct, indirect, incidental, or consequential damages arising out of:</p>
      <ul>
        <li>Use or inability to use the services.</li>
        <li>Delays or interruptions in service delivery.</li>
        <li>Unauthorized access to or alteration of client data.</li>
        <li>Any third-party content or external links.</li>
      </ul>
      <p>Use of our services is at your own risk.</p>

      <h2>9. Termination</h2>
      <p>We reserve the right to suspend or terminate access to our services at any time, without prior notice, for any reason, including breach of these Terms. Clients may also terminate services by providing written notice, subject to any outstanding dues.</p>

      <h2>10. Governing Law</h2>
      <p>These Terms shall be governed by and interpreted in accordance with the laws of India. Any disputes arising out of these Terms shall be subject to the exclusive jurisdiction of the courts in Delhi, India.</p>

      <h2>11. Modifications</h2>
      <p>We may update or revise these Terms from time to time. Changes will be posted on this page with a revised effective date. Continued use of our website or services constitutes your acceptance of those changes.</p>
    </div>
  </section>

  <?php include('footer.php'); ?> 
  <!-- Assumes you have a footer.php file -->
</body>
</html>
