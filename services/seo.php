<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SEO Optimization</title><link rel="stylesheet" href="../style.css">
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
    <h2>SEO Services</h2>
    <p>
      Search Engine Optimisation (SEO) improves your website’s visibility on Google and other search engines. By ranking higher, you can attract more visitors, generate quality leads, and grow your online presence organically.
      
    </p>
    <p>
      At Nexgen Digital Solutions, our SEO Services include keyword research, content optimisation, link building, and technical SEO. We create long-term strategies to help your business consistently rank higher and stay ahead of competitors.
    </p>
  </div>

  <img class="servicesimg" src="../assets/seo.png" alt="Services">

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
      <video src="../assets/seovid.mp4" height="580" autoplay muted loop playsinline></video>

      <div class="steps">
  <div class="step-item">
    <div class="step-question">
      <span>Step 1: Analyse Your Website & Goals</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We begin with a comprehensive website audit, competitor analysis, and understanding of your
      business objectives to design a customised SEO plan aimed at improving visibility, driving
      organic traffic, and enhancing overall online performance.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 2: Conduct Keyword Research</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our SEO specialists identify high-value, relevant keywords your target audience actively
      searches for, ensuring your content ranks well, attracts qualified traffic, and supports both
      short-term wins and long-term search engine dominance.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 3: Optimise On-Page Elements</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We refine meta titles, descriptions, headings, URLs, and internal linking structures, ensuring
      each page aligns with SEO best practices to improve rankings, boost click-through rates, and
      enhance user engagement on your site.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 4: Enhance Website Content</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Our content team produces engaging, keyword-rich, and informative articles, landing pages, and
      blogs that address user intent, build authority, and strengthen your brand’s position in
      organic search results for maximum impact.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 5: Improve Technical SEO</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We focus on optimising site speed, mobile-friendliness, structured data, and crawlability while
      resolving technical issues, ensuring search engines can efficiently index your pages and users
      enjoy a seamless browsing experience.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 6: Build High-Quality Backlinks</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      Through strategic outreach, guest posting, and partnerships, we secure authoritative, relevant
      backlinks that strengthen your website’s domain authority, improve search rankings, and
      increase trustworthiness in the eyes of search engines.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 7: Monitor Rankings & Traffic</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      We use advanced analytics tools to track keyword rankings, analyse organic traffic trends, and
      measure conversions, enabling us to assess performance and make data-driven adjustments for
      better search engine results.
    </div>
  </div>

  <div class="step-item">
    <div class="step-question">
      <span>Step 8: Optimise & Update Continuously</span>
      <span class="arrow">&#9660;</span>
    </div>
    <div class="step-answer">
      SEO is an ongoing process — we regularly update strategies, refresh content, and adapt to
      algorithm updates to maintain strong rankings, enhance visibility, and ensure consistent
      long-term growth for your brand.
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

