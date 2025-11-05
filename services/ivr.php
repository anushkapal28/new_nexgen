<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IVR Solutions</title>
  <link rel="stylesheet" href="../style.css">
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
    <h2>IVR Services</h2>
    <p>
      Interactive Voice Response (IVR) services let your customers navigate calls through automated voice menus. This helps manage high call volumes, direct queries to the right department, and improve customer service efficiency.
      
    </p>
    <p>
      At Nexgen Digital Solutions, our IVR Services provide customised call flow designs that enhance caller experience and streamline operations. From simple menus to multi-level systems, we deliver intelligent call management solutions for every business need.
    </p>
  </div>

  <img class="servicesimg" src="../assets/ivr.png" alt="Services">

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
      <video src="../assets/voice.mp4" height="580" autoplay muted loop playsinline></video>

      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1. Identify Your IVR Requirements</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We assess your business needs, call flow expectations, and customer service objectives to design a customised IVR system that improves efficiency and delivers a smooth caller experience.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Design Call Flow Structure</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our team creates a clear, user-friendly call flow with logical menu options, ensuring callers can quickly navigate to the right department or information without confusion.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Record Professional Voice Prompts</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We produce clear, high-quality recordings in multiple languages with professional voice talent, ensuring your IVR sounds welcoming, consistent, and aligned with your brand identity.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Configure Routing & Extensions</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We set up intelligent call routing, extensions, and forwarding rules so customers are connected to the right agents or departments without unnecessary delays.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Integrate with CRM & Databases</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We connect your IVR system to CRM platforms and databases for personalised caller experiences, allowing instant access to customer records during interactions.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Implement Multi-Level Menus</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We create structured, multi-level menu options to efficiently handle high call volumes while offering self-service features for faster resolution of common customer queries.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Test for Quality & Performance</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We rigorously test call flows, audio clarity, and routing speed to ensure your IVR works flawlessly before going live for customers.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Monitor & Optimise System</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We track call analytics, drop-off points, and menu selections to continually refine your IVR system for better efficiency, reduced call times, and improved customer satisfaction.
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


