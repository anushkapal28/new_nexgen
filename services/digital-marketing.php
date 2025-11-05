<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Digital Marketing</title><link rel="stylesheet" href="../style.css">
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
    <h2>Digital Marketing Services</h2>
    <p>
      Digital Marketing services help your brand grow online through targeted strategies like SEO, social media, email marketing, and paid ads. We ensure your business reaches the right audience at the right time.
      
    </p>
    <p>
      At Nexgen Digital Solutions, our Digital Marketing Services combine creativity, data, and technology to drive measurable growth. From increasing website traffic to boosting conversions, we build campaigns designed for maximum impact and ROI.
    </p>
  </div>

  <img class="servicesimg" src="../assets/digital.png" alt="Services">

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
      <video src="../assets/digitalmarket.mp4" height="580" autoplay muted loop playsinline></video>

      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1. Define Your Marketing Goals</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We start by understanding your business objectives, target audience, and desired outcomes,
      ensuring every campaign aligns with your brand vision and drives measurable growth.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Develop a Custom Strategy</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our team designs a tailored digital marketing plan combining SEO, social media, PPC, and
      content marketing to maximise reach, engagement, and conversions for your brand.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Create High-Impact Content</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We produce engaging, SEO-friendly, and visually appealing content across multiple channels,
      ensuring your message resonates with audiences and builds long-term brand trust.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Optimise Paid Advertising Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We set up and manage data-driven PPC, display, and social ads, targeting the right audience at
      the right time to boost traffic, leads, and sales.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Strengthen Social Media Presence</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We grow and engage your social media audience with creative posts, strategic campaigns, and
      interactive content that encourages community building and brand loyalty.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Improve Website Conversions</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We optimise landing pages, CTAs, and user experiences to convert more visitors into customers,
      improving ROI across all digital marketing channels.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Track & Analyse Performance</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We monitor KPIs, traffic sources, and engagement metrics using advanced analytics tools,
      giving you clear insights into campaign effectiveness and improvement opportunities.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Refine & Scale Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We continuously adjust strategies based on real-time data, scaling high-performing campaigns
      and refining underperforming ones to maintain growth and maximise returns.
    </div>
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

