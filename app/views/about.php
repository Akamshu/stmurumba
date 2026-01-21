<?php include 'layouts/header.php'; ?>

<section class="about-hero">
    <div class="hero-bg-parallax"></div>
    <div class="hero-overlay-gradient"></div>
    
    <div class="container hero-inner">
        <nav class="breadcrumb-nav">
            <a href="<?= BASE_URL ?>">Home</a> 
            <span class="sep"><i class="fas fa-chevron-right"></i></span> 
            <span class="current">About St. Murumba</span>
        </nav>
        
        <div class="hero-text-content">
            <span class="hero-tag">Established 1974</span>
            <h1>Legacy of <span class="text-highlight">Excellence</span> & Moral Integrity</h1>
            <p>Discover the history, the people, and the shared vision that makes St. Murumba a premier center for early childhood and primary education.</p>
        </div>
    </div>

    <div class="hero-shape">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V120H0V0C0,0,10.12,31.42,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</section>

<section class="about-intro">
    <div class="container split-layout">
        <div class="intro-image">
            <img src="<?= BASE_URL ?>/assets/images/7.jpeg" alt="St. Murumba Campus">
            <div class="experience-badge">
                <span class="years">25+</span>
                <span class="text">Years of Excellence</span>
            </div>
        </div>
        <div class="intro-text">
            <span class="sub-heading">Welcome to St. Murumba</span>
            <h2>Nurturing the Leaders of <span class="text-accent">Tomorrow</span></h2>
            <p>At St. Murumba Nursery & Primary School, we believe that every child is a unique gift with boundless potential. Our approach to education goes beyond the classroom, focusing on the "Total Child" — intellectually, spiritually, and socially.</p>
            <p>Founded on the principles of integrity and academic rigor, we provide a safe, supportive, and stimulating environment where pupils are encouraged to explore their interests and develop a lifelong love for learning.</p>
        </div>
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="mission-grid">
            <div class="mission-card">
                <div class="card-icon"><i class="fas fa-eye"></i></div>
                <h3>Our Vision</h3>
                <p>To be a leading educational institution recognized for producing God-fearing, disciplined, and academically outstanding future leaders.</p>
            </div>
            <div class="mission-card featured">
                <div class="card-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Our Mission</h3>
                <p>To provide a balanced and high-quality education that integrates modern technology with core moral values, ensuring every child thrives in a global society.</p>
            </div>
            <div class="mission-card">
                <div class="card-icon"><i class="fas fa-heart"></i></div>
                <h3>Core Values</h3>
                <ul class="value-list">
                    <li>Integrity & Honesty</li>
                    <li>Academic Excellence</li>
                    <li>Discipline & Respect</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="leadership">
    <div class="container">
        <div class="section-header text-center">
            <h2 class="section-title">Message from the Headmistress</h2>
            <div class="title-line"></div>
        </div>
        <div class="headmistress-message">
            <div class="headmistress-photo" style="max-height:550px;">
                <img src="<?= BASE_URL ?>/assets/images/headmistress.jpg" alt="Headmistress Name">
            </div>
            <div class="message-content" style="max-width: 650px;">
                <i class="fas fa-quote-left quote-icon"></i> <br>
                <p>"Education is the most powerful tool we can give a child. Here at St. Murumba, we don't just teach subjects; we mold characters. We invite you to be part of our success story as we partner together to give your child the best start in life."</p>
                <h4>Mrs. Veronica Garba</h4>
                <span>Head of School / Founder</span>
            </div>
        </div>
    </div>
</section>


<?php include 'layouts/footer.php'; ?>