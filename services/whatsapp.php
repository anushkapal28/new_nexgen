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

  <img class="servicesimg" src="../assets/APIWhatsapp.png" alt="Services">

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
      <video src="../assets/Whatsapp.mp4" height="580" autoplay muted loop playsinline></video>

      <!-- Right Steps Section -->
      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1. Verify & Connect Your Business</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We help you get your business officially verified on WhatsApp, ensuring you earn customer trust with the green checkmark. Then we integrate the API with your CRM, e-commerce platform, or marketing tools.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2. Set Up Your Messaging Dashboard</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Get a central hub to manage all conversations. Send, receive, and organize messages from one place — whether it’s bulk campaigns or one-to-one chats.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3. Choose Your Messaging Type</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Session Messages are triggered when customers contact you and allow free-form replies for 24 hours, while Template Messages are pre-approved by WhatsApp for sending alerts, reminders, updates, or offers beyond that window.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4. Automate Customer Support</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Deploy chatbots to instantly answer FAQs, process common requests, and route complex queries to live agents. Reduce response times and keep customers happy 24/7.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5. Deliver Order & Service Updates</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Send order confirmations, delivery alerts, and real-time tracking updates straight to your customer’s WhatsApp inbox — where they’ll actually see them.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6. Run Targeted Marketing Campaigns</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Promote flash sales, new product launches, seasonal discounts, and event invitations to a segmented audience for higher engagement and conversions.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7. Boost Lead Generation</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Capture leads automatically from Facebook, Instagram, and your website. Start conversations instantly with pre-defined welcome messages and nurture them into paying customers.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8. Measure & Optimize</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Track delivery rates, open rates, response times, and conversions. Use these insights to fine-tune your communication strategy and achieve maximum ROI.
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

