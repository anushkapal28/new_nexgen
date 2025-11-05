<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Email Marketing</title><link rel="stylesheet" href="../style.css">
  <style>
    .container {
        padding: 0 7rem;
        display: flex;
        flex-direction: column;
        gap: 2.5rem;
        background-color: #FDFAF6;
        padding-bottom: 50px;
      }

      /* ----------- Video Styles ----------- */
      video {
        width: 10%;
        
      }

      /* ----------- Steps Section ----------- */
      .steps {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        width: 100%;
      }

      .step-item {
        border-bottom: 1px solid #555;
        transition: box-shadow 0.3s ease-in-out;
      }

      .step-item:hover {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.08);
      }

      .step-question {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem;
        cursor: pointer;
        font-size: 0.9rem;
      }

      .arrow {
        font-size: 1rem;
        transition: transform 0.3s ease;
      }

      .arrow.open {
        transform: rotate(180deg);
      }

      .step-answer {
        display: none;
        padding: 0 1rem 0.8rem 1rem;
        color: #555;
        font-size: 0.85rem;
        text-align: justify;
      }

      /* ----------- Responsive ----------- */
      @media (min-width: 768px) {
        .container {
          flex-direction: row;
          gap: 5rem;
          align-items: flex-start;
        }

        video {
          width: 35%;
        }

        .steps {
          width: 65%;
          gap: 1.5rem;
        }

        .step-question {
          font-size: 1rem;
        }

        .step-answer {
          font-size: 0.95rem;
        }
      }

      /* ----------- Fade-In Animation ----------- */
      .fade-in {
        opacity: 0;
        transform: translateY(20px);
        animation: fadeInUp 0.8s ease forwards;
      }

      @keyframes fadeInUp {
        to {
          opacity: 1;
          transform: translateY(0);
        }
      }
    </style>
</head>
<body>
<nav class="navbar">
  <div class="logo">
    <a href="index.php">
      <img src="assets/images/logo.png" alt="Company Logo">
    </a>
  </div>
  <ul class="nav-links">
    <li><a href="../index.php">Home</a></li>
    <li><a href="../services.php">Services</a></li>
    <li><a href="../contact.php">Contact</a></li>
  </ul>
</nav>



<section class="services">
  <div class="serviceupper">
    <h2>Bulk Email Services</h2>
    <p>
      Bulk Email services allow you to send professional, visually appealing emails to large audiences at once. Perfect for newsletters, promotions, or announcements, our platform ensures secure, compliant, and high-deliverability campaigns.
      
    </p>
    <p>
      At Nexgen Digital Solutions, we design and deliver engaging Bulk Email campaigns tailored to your audience. With advanced personalisation, tracking, and automation, our services help you maximise open rates and drive meaningful customer interactions.
    </p>
  </div>

  <img class="servicesimg" src="../assets/Email.png" alt="Services">

  <hr>

  <div class="bottom">
    <span>How it works?</span>
    <span>01</span>
  </div>
</div>
    <h2> We don’t just apply strategies-<br>
 we create lasting impact.</h2>
    <p >Our process starts with understanding your brand’s true purpose. We then align every action, message, <br>  and touchpoint to reflect that vision. By bridging the gap between what you say and what you do, <br> we build trust, strengthen engagement, and set your business on a path to sustainable growth.

</section>
<div class="container fade-in">
      <!-- Left Video Section -->
      <video src="../assets/mailvid.mp4" height="580" autoplay muted loop playsinline></video>

      <!-- Right Steps Section -->
      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1. Define Your Email Campaign Goals</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We identify your objectives, audience segments, and desired outcomes to ensure each bulk email
      campaign is targeted, relevant, and designed to drive measurable results.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Build & Verify Email List</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We clean, validate, and segment your email database to improve deliverability, ensure compliance
      with regulations, and target recipients with the most relevant content.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Design Engaging Email Templates</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our team creates mobile-friendly, visually appealing, and brand-consistent email designs that
      grab attention and encourage recipients to read and take action.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Craft Compelling Email Content</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We write clear, engaging, and action-driven email copy with strong subject lines, personalised
      greetings, and persuasive calls-to-action to maximise reader engagement.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Personalise Email Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We use recipient data such as names, preferences, and behaviour to create highly relevant emails
      that increase open rates and conversions.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Schedule & Automate Sending</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We set up automation workflows and schedule campaigns for optimal delivery times, ensuring
      maximum visibility and engagement from recipients.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Track Campaign Performance</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We monitor open rates, click-through rates, and conversions in real time, providing detailed
      insights into campaign performance and audience behaviour.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Optimise for Future Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We analyse results to refine subject lines, design, targeting, and sending times, ensuring
      continuous improvement and higher ROI in future bulk email campaigns.
    </div>
  </div>
</div>

    </div>
    
<?php include '../footer.php'; ?>
<script>
      // Hover-based accordion effect
      const stepItems = document.querySelectorAll(".step-item");

      stepItems.forEach((item) => {
        const question = item.querySelector(".step-question");
        const answer = item.querySelector(".step-answer");
        const arrow = item.querySelector(".arrow");

        question.addEventListener("mouseenter", () => {
          document.querySelectorAll(".step-answer").forEach((a) => (a.style.display = "none"));
          document.querySelectorAll(".arrow").forEach((ar) => ar.classList.remove("open"));
          answer.style.display = "block";
          arrow.classList.add("open");
        });

        question.addEventListener("mouseleave", () => {
          answer.style.display = "none";
          arrow.classList.remove("open");
        });
      });
    </script>
</body>
</html>
