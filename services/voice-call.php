<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Voice Call Services</title><link rel="stylesheet" href="../style.css">
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
    <h2>Voice Call Servicess</h2>
    <p>
      Voice call services (also called voice broadcasting) allow you to send a pre-recorded message to thousands of mobile or landline numbers automatically, in just a few clicks. You record a message (in your own voice or professional voice-over), upload a list of phone numbers, and our platform takes care of the rest — fast, reliable, and fully trackable.
      
    </p>
    <p>
      At Nexgen Digital Solutions, our Voice Call Services help businesses communicate instantly and effectively with their customers through automated pre-recorded voice messages in any regional language. Whether you're sending reminders, running political campaigns, collecting feedback, or promoting an offer — voice calling is one of the most cost-effective and high-impact tools for mass communication.


    </p>
  </div>

  <img class="servicesimg" src="../assets/voiceimg.png" alt="Services">

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
      <span>Step 1. Understand Your Campaign Goals</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We begin by discussing your objectives, target audience, and expected outcomes to ensure a clear and results-driven voice campaign plan. This deep understanding helps us tailor every aspect for maximum effectiveness.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Create & Approve Your Script</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our team crafts a concise, engaging, and persuasive voice script, which is then reviewed and approved by you before recording begins. We ensure the messaging aligns perfectly with your brand’s tone and intent.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Choose Language & Voice Style</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Select from multiple regional languages and choose a male or female professional voice to best connect with your audience. This personalization ensures your calls feel authentic and relatable.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Record Professional Voice Messages</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We produce high-quality, crystal-clear recordings that reflect your brand tone, ensuring clarity and impact for every listener. Every detail is fine-tuned for pronunciation, pacing, and emphasis.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Prepare & Verify Contact List</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Your contact database is cleaned, validated, and segmented to ensure accurate targeting and compliance with regulations. This minimizes call wastage and increases connection success rates.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Schedule Your Voice Campaign</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We set the ideal date, time, and frequency for calls to maximize answer rates and audience engagement. Smart scheduling ensures your message reaches people when they’re most likely to listen.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Launch Automated Bulk Calling</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our advanced system sends thousands of calls instantly, ensuring fast and reliable delivery of your message to all recipients. This scalable process allows you to reach a wide audience in minutes.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Monitor Results & Optimize</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We track delivery rates, call responses, and engagement in real-time, providing reports and insights to improve future campaigns. Continuous optimization ensures better ROI with every campaign.
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

