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
      <h1>Privacy Ploicy</h1>
      <p class="effective-date"><strong>Effective Date:</strong> 13/08/2025</p>
      <p><strong>Company:</strong> Nexgen Digital Solutions &nbsp; • &nbsp; <strong>Website:</strong> www.nexgendigitalsolutions.com</p>



      <h2>1. Introduction</h2>
<p>At Nexgen Digital Solutions, we value your privacy and are committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, disclose, and safeguard your data when you visit our website or use our digital marketing services. By accessing our website or using our services, you agree to the terms of this Privacy Policy.</p>
      

<h2>2. Information We Collect</h2>
    <h3>a) Personal Information</h3>
    <ul>
      <li>Full name</li>
      <li>Email address</li>
      <li>Phone number</li>
      <li>Company name</li>
      <li>Billing address</li>
      <li>Any information you voluntarily provide through forms or inquiries</li>
    </ul>

    <h3>b) Technical Data</h3>
    <ul>
      <li>IP address</li>
      <li>Browser type</li>
      <li>Device information</li>
      <li>Referring URLs</li>
      <li>Time and date of visit</li>
      <li>Cookies and usage data</li>
    </ul>

       <h2>3. How We Use Your Information</h2>
    <ul>
      <li>Respond to inquiries or service requests</li>
      <li>Send updates, newsletters, or marketing communications (with consent)</li>
      <li>Improve our website and user experience</li>
      <li>Provide customer support and technical assistance</li>
      <li>Process payments and invoices</li>
      <li>Conduct analytics and monitor website usage</li>
      <li>Comply with legal or regulatory obligations</li>
    </ul>

      <h2>4. Cookies and Tracking Technologies</h2>
    <p>We use cookies and similar technologies to improve your browsing experience and analyze website traffic. You can control the use of cookies through your browser settings.</p>

      <h2>5. Sharing of Information</h2>
    <p>We do not sell, rent, or trade your personal information. However, we may share your data with:</p>
    <ul>
      <li>Trusted third-party service providers (e.g., payment gateways, email services)</li>
      <li>Legal authorities if required by law or in response to valid legal requests</li>
      <li>Business partners for service delivery (under strict confidentiality)</li>
    </ul>

       <h2>6. Data Security</h2>
    <p>We implement appropriate technical and organizational security measures to protect your personal information against unauthorized access, alteration, disclosure, or destruction. However, please note that no method of transmission over the internet is 100% secure.</p>

      <h2>7. Your Rights</h2>
    <ul>
      <li>Access, update, or delete your personal information</li>
      <li>Withdraw your consent for marketing communications</li>
      <li>Request restriction or object to certain types of data processing</li>
      <li>Request a copy of the personal data we hold about you</li>
    </ul>
    <p>To exercise your rights, email us at <a href="mailto:abhishek@nexgendigitalsolutions.com">abhishek@nexgendigitalsolutions.com</a></p>

     <h2>8. Third-Party Links</h2>
    <p>Our website may contain links to other websites. We are not responsible for the privacy practices of such third parties. We encourage you to read their privacy policies.</p>

      <h2>9. Children’s Privacy</h2>
    <p>Our services are not intended for individuals under the age of 18. We do not knowingly collect data from children.</p>

      <h2>10. Updates to This Privacy Policy</h2>
    <p>We may update this Privacy Policy from time to time to reflect changes in legal, technical, or business developments. Changes will be posted on this page with the effective date updated accordingly.</p>
    </div>
  </section>

  <?php include('footer.php'); ?> 
  <!-- Assumes you have a footer.php file -->
</body>
</html>
