<?php include 'layouts/header.php'; ?>

<section class="contact-hero">
    <div class="hero-parallax-bg"></div>
    <div class="hero-gradient-overlay"></div>
    
    <div class="container hero-inner">
        <div class="hero-content-left">
            <nav class="breadcrumb-nav">
                <a href="<?= BASE_URL ?>">Home</a> 
                <span class="sep"><i class="fas fa-angle-right"></i></span> 
                <span class="current">Contact Us</span>
            </nav>
            
            <div class="hero-headline">
                <span class="contact-badge">Support & Inquiries</span>
                <h1>We're Here to <span class="text-accent">Connect</span></h1>
                <p>Have a question about enrollment or school life? Our dedicated team is ready to provide the answers you need.</p>
            </div>
        </div>

        <div class="hero-quick-card">
            <div class="quick-item">
                <div class="q-icon"><i class="fas fa-headset"></i></div>
                <div class="q-text">
                    <strong>Direct Hotline</strong>
                    <span>+234 800 000 0000</span>
                </div>
            </div>
            <div class="quick-item">
                <div class="q-icon"><i class="fas fa-envelope-open"></i></div>
                <div class="q-text">
                    <strong>Official Email</strong>
                    <span>info@stmurumba.edu</span>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="contact-grid-section">
    <div class="container">
        <div class="contact-layout">
            
            <div class="contact-info-panel">
                <div class="info-card-modern">
                    <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
                    <div class="info-text">
                        <h3>Our Campus</h3>
                        <p>KM 37, Zaria Road, Jos North LGA Plateau State.</p>
                    </div>
                </div>

                <div class="info-card-modern">
                    <div class="icon-box"><i class="fas fa-phone-alt"></i></div>
                    <div class="info-text">
                        <h3>Phone & WhatsApp</h3>
                        <p>Admissions: +234 800 000 0000</p>
                        <p>Admin Office: +234 900 000 0000</p>
                    </div>
                </div>

                <div class="info-card-modern">
                    <div class="icon-box"><i class="fas fa-envelope-open-text"></i></div>
                    <div class="info-text">
                        <h3>Email Inquiries</h3>
                        <p>info@stmurumba.edu</p>
                        <p>admissions@stmurumba.edu</p>
                    </div>
                </div>

                <div class="info-card-modern">
                    <div class="icon-box"><i class="fas fa-clock"></i></div>
                    <div class="info-text">
                        <h3>Office Hours</h3>
                        <p>Monday — Friday: 8:00 AM - 4:00 PM</p>
                        <p>Closed on Weekends & Public Holidays</p>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <div class="form-header">
                    <h2>Send us a Message</h2>
                    <p>Have a specific question? Fill out the form below.</p>
                </div>
                <form action="send_mail.php" method="POST" class="modern-contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" name="email" placeholder="email@example.com" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Subject</label>
                        <select name="subject" class="styled-select">
                            <option value="general">General Inquiry</option>
                            <option value="admission">Admissions</option>
                            <option value="employment">Job Opportunities</option>
                            <option value="feedback">Feedback/Suggestions</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" rows="5" placeholder="How can we help you?" required></textarea>
                    </div>
                    <button type="submit" class="btn-send">
                        Send Message <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<section class="map-section">
    <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18..." width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

<?php include 'layouts/footer.php'; ?>