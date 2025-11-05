<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>RCS Services</title>
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
    <h2>RCS Services</h2>
    <p>
      Rich Communication Services (RCS) bring SMS into the modern age with interactive, media-rich messaging. Share images, videos, buttons, and branding to create engaging, app-like experiences in your customer’s inbox.
      
    </p>
    <p>
      At Nexgen Digital Solutions, our RCS Services help brands deliver more than just text. We create rich, dynamic messages that improve engagement, build trust, and enhance your brand communication experience.
    </p>
  </div>

  <img class="servicesimg" src="../assets/rcs.png" alt="Services">

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
      <video src="../assets/rcsvid.mp4" height="580" autoplay muted loop playsinline></video>

      <!-- Right Steps Section -->
      <div class="steps">
        <div class="step-item">
          <div class="step-question">
            <span>Step 1: Discovery & Consultation</span>
            <span class="arrow">&#9660;</span>
          </div>
          <div class="step-answer">
            We begin by understanding your goals and challenges, conducting a thorough consultation
            to ensure our approach aligns perfectly with your needs.
          </div>
        </div>

        <div class="step-item">
          <div class="step-question">
            <span>Step 2: Strategy & Planning</span>
            <span class="arrow">&#9660;</span>
          </div>
          <div class="step-answer">
            Our team designs a detailed strategy covering timelines, tools, and key deliverables for
            a transparent and efficient workflow.
          </div>
        </div>

        <div class="step-item">
          <div class="step-question">
            <span>Step 3: Design & Development</span>
            <span class="arrow">&#9660;</span>
          </div>
          <div class="step-answer">
            We transform ideas into interactive, user-focused designs and implement robust backend
            solutions to bring your vision to life.
          </div>
        </div>

        <div class="step-item">
          <div class="step-question">
            <span>Step 4: Testing & Feedback</span>
            <span class="arrow">&#9660;</span>
          </div>
          <div class="step-answer">
            Every product undergoes rigorous testing for performance, functionality, and user
            experience before deployment.
          </div>
        </div>

        <div class="step-item">
          <div class="step-question">
            <span>Step 5: Launch & Support</span>
            <span class="arrow">&#9660;</span>
          </div>
          <div class="step-answer">
            We launch your project seamlessly and provide continuous monitoring, updates, and
            maintenance support for long-term success.
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
