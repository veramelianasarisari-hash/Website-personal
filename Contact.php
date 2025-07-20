<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile - CLOTHESIS</title>
  <link rel="stylesheet" href="Asets/profil.css" />
</head>
<body>
    <?php include 'partials/header.php'; ?>
  <main class="content">
    <h2>CONTACT</h2>
    <main class="content">
        <h1 class="page-title">CONTACT</h1>
        <p class="subtitle">Get in touch with us - we'd love to hear from you!</p>

        <div class="contact-container">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-section">
                    <h3>📍 Visit Our Store</h3>
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div>
                            <p><strong>CLOTHESIS Flagship Store</strong></p>
                            <p>Jl. Fashion Boulevard No. 123</p>
                            <p>Pelaihari, South Kalimantan 70114</p>
                            <p>Indonesia</p>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3>📞 Contact Information</h3>
                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div>
                            <p><strong>Phone:</strong> +62 511 123-4567</p>
                            <p><strong>WhatsApp:</strong> +62 812-3456-7890</p>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3>✉️ Email & Support</h3>
                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div>
                            <p><strong>General:</strong> info@clothesis.com</p>
                            <p><strong>Support:</strong> support@clothesis.com</p>
                            <p><strong>Orders:</strong> orders@clothesis.com</p>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3>🕒 Business Hours</h3>
                    <div class="contact-item">
                        <div class="contact-icon">🕒</div>
                        <div>
                            <p><strong>Monday - Saturday:</strong> 09:00 - 21:00</p>
                            <p><strong>Sunday:</strong> 10:00 - 20:00</p>
                            <p><strong>Online Store:</strong> 24/7</p>
                        </div>
                    </div>
                </div>

                <div class="info-section">
                    <h3>🌐 Follow Us</h3>
                    <div class="social-links">
                        <a href="#" class="social-link" title="Instagram">📷</a>
                        <a href="#" class="social-link" title="Facebook">📘</a>
                        <a href="#" class="social-link" title="Twitter">🐦</a>
                        <a href="#" class="social-link" title="TikTok">🎵</a>
                        <a href="#" class="social-link" title="YouTube">📹</a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                <h3 style="color: #764ba2; margin-bottom: 2rem; font-size: 1.8rem;">Send Us a Message</h3>
                <form id="contactForm">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Tell us how we can help you..."></textarea>
                    </div>

                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
        </main>
    </div>

    <script>
        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            
            // Simple success message
            alert(`Thank you ${name}! Your message has been sent. We'll get back to you soon!`);
            
            // Reset form
            this.reset();
        });

        // Add smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

  <?php include 'Partials/footer.php'; ?>
</body>
</html>