<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Article - CLOTHESIS</title>
  <link rel="stylesheet" href="Asets/profil.css" />
  <link rel="stylesheet" href="Asets/accordion.css" /> <!-- Tambahan CSS accordion -->
</head>
<body>

  <?php include 'partials/header.php'; ?>

  <main class="content">
    <h2 class="page-title">Article</h2>

    <!-- Accordion Article Section -->
    <section class="accordion-section">
      <div class="accordion">

        <!-- Bagian 1 -->
        <button class="accordion-btn">What is CLOTHESIS?</button>
        <div class="accordion-content">
          <p><strong>CLOTHESIS</strong> is a local fashion brand born from the spirit of Indonesian youth to appear confident and authentic. Known for trendy designs, quality materials, and a strong local feel, CLOTHESIS offers collections suitable for everyday wear to exclusive looks.</p>
        </div>

        <!-- Bagian 2 -->
        <button class="accordion-btn">Our Mission</button>
        <div class="accordion-content">
          <p>Our mission is to spread the spirit of <strong>#WearYourIdentity</strong> to the younger generation. CLOTHESIS empowers personal style through expressive, comfortable, and sustainable fashion.</p>
        </div>

        <!-- Bagian 3 -->
        <button class="accordion-btn">Why Choose Us?</button>
        <div class="accordion-content">
          <ul>
            <li>Exclusive and trendy designs</li>
            <li>Premium quality materials</li>
            <li>Support for local artisans & eco-friendly production</li>
            <li>Fast and friendly customer service</li>
          </ul>
        </div>

      </div>
    </section>
  </main>

  <?php include 'partials/footer.php'; ?>

  <!-- Accordion Functionality -->
  <script>
    const accBtns = document.querySelectorAll(".accordion-btn");
    accBtns.forEach(btn => {
      btn.addEventListener("click", () => {
        const content = btn.nextElementSibling;
        const isOpen = content.style.display === "block";

        // Close all others
        document.querySelectorAll(".accordion-content").forEach(el => el.style.display = "none");

        // Toggle current
        content.style.display = isOpen ? "none" : "block";
      });
    });
  </script>

</body>
</html>
