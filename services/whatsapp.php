<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>WhatsApp Business API</title><link rel="stylesheet" href="../style.css">
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
    <h2>WhatsApp API Services</h2>
    <p>
      The WhatsApp Business API is designed for medium and large businesses to manage customer communication at scale through secure, automated, and verified messaging. Unlike the WhatsApp Business app, it offers advanced features such as AI chatbots, CRM integration, and automation, enabling 24/7 customer support and faster query resolution. Businesses can send rich media — including images, videos, and interactive buttons — to create engaging conversations.
      
    </p>
    <p>
      The API supports seamless integration with e-commerce platforms and helpdesks, ensuring every interaction is connected to customer data for a unified experience. With end-to-end encryption, high deliverability, and scalable messaging capabilities, it’s ideal for customer support, order tracking, appointment reminders, and marketing campaigns, making it a powerful tool for enhancing engagement and streamlining communication.
    </p>
  </div>

  <img class="servicesimg" src="../assets/APIwhatsapp.png" alt="Services">

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
      <video src="../assets/whatsapp.mp4" height="580" autoplay muted loop playsinline></video>

      <!-- Right Steps Section -->
      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1. Understand Your Messaging Goals</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We identify your campaign objectives, target audience, and desired outcomes, ensuring the Bulk
      SMS strategy delivers maximum reach, engagement, and conversions for your brand.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Prepare & Segment Contact List</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We clean, verify, and segment your recipient database to ensure accurate targeting, higher
      delivery rates, and better engagement for every SMS campaign.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Craft Compelling SMS Content</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our team creates short, persuasive, and action-driven SMS messages that clearly convey your
      offer or information while maintaining compliance with character limits and regulations.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Personalise Messaging for Recipients</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We use dynamic fields like names, locations, and relevant details to make each SMS feel
      personal, increasing the likelihood of customer interaction and response.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Schedule SMS Campaign Delivery</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We plan optimal sending times based on audience behaviour, ensuring messages are delivered when
      recipients are most likely to read and respond.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Enable Two-Way Communication</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We set up response tracking and reply management so customers can interact directly with your
      campaign, improving engagement and feedback collection.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Monitor Delivery & Engagement</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We track delivery reports, open rates, and click-through metrics in real time, giving clear
      insights into campaign performance and recipient behaviour.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Optimise for Future Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We analyse campaign results to refine content, timing, and targeting strategies, ensuring
      higher engagement and improved ROI for your future Bulk SMS campaigns.
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
