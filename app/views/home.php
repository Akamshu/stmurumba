<?php include 'layouts/header.php'; ?>

<!-- HERO SECTION -->
<section class="hero-carousel">
    <div class="slides">
        <div class="slide active" style="background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?= BASE_URL ?>/assets/images/1.jpeg')">
            <div class="slide-content">
                <span class="slide-subtitle">Welcome to St. Murumba</span>
                <h1>Nurturing Young Minds with <span class="highlight">Excellence & Values</span></h1>
                <p>A foundation built on academic rigor and strong moral character since 1998.</p>
                <div class="hero-btns">
                    <a href="<?= BASE_URL ?>/admission" class="btn-outline">Apply for Admission</a>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?= BASE_URL ?>/assets/images/2.jpeg')">
            <div class="slide-content">
                <span class="slide-subtitle">Safe & Conducive</span>
                <h1>Quality Education in a <span class="highlight">Safe Environment</span></h1>
                <p>Providing the modern tools and secure atmosphere your child needs to thrive.</p>
                <div class="hero-btns">
                    <a href="<?= BASE_URL ?>/admission" class="btn-outline">Enroll Today</a>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.3)), url('<?= BASE_URL ?>/assets/images/3.jpeg')">
            <div class="slide-content">
                <span class="slide-subtitle">The Leaders of Tomorrow</span>
                <h1>Building Tomorrow’s <span class="highlight">Global Leaders</span></h1>
                <p>Nursery & Primary education designed to spark curiosity and global thinking.</p>
                <div class="hero-btns">
                    <a href="<?= BASE_URL ?>/contact" class="btn-outline">Visit Our Campus</a>
                </div>
            </div>
        </div>
        
        <div class="slide" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?= BASE_URL ?>/assets/images/4.jpeg')">
            <div class="slide-content">
                <span class="slide-subtitle">Beyond Academics</span>
                <h1>Discovering Talents Through <span class="highlight">Creative Arts</span></h1>
                <p>From music to fine arts, we encourage pupils to express their unique creativity and develop hidden talents.</p>
                <div class="hero-btns">
                    <a href="<?= BASE_URL ?>/gallery" class="btn-outline">View Student Life</a>
                </div>
            </div>
        </div>

        <div class="slide" style="background-image:linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('<?= BASE_URL ?>/assets/images/5.jpeg')">
            <div class="slide-content">
                <span class="slide-subtitle">A Shared Journey</span>
                <h1>Building a Strong <span class="highlight">School Community</span></h1>
                <p>In partnership with parents and dedicated staff, we create a supportive family for every child.</p>
                <div class="hero-btns">
                    <a href="<?= BASE_URL ?>/contact" class="btn-outline">Join Our Community</a>
                </div>
            </div>
        </div>
    </div>

   <div class="carousel-dots">
        <span class="dot active" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
</section>

<section class="split-section">
    <div class="split-container">
        
        <div class="video-side">
            <video id="schoolVideo" class="school-video" autoplay muted loop playsinline poster="<?= BASE_URL ?>/assets/images/1.jpg">
                <source src="<?= BASE_URL ?>/assets/videos/intro_1.mp4" type="video/mp4">
            </video>
            <div class="video-overlay">
                <button id="openPlayer" class="play-circle-btn">▶</button>
                <p>Watch Our Tour</p>
            </div>
        </div>

        <div class="about-side">
            <span class="sub-title">St. Murumba Nursery & Primary School</span>
            <h2 class="about-title">Nurturing Young Minds with Excellence & Values</h2>
            <p class="about-text">
                Established with a vision for academic distinction, St. Murumba Nursery & Primary School 
                provides a serene and stimulating environment where children discover their potential. 
                We combine modern teaching techniques with strong moral foundations.
            </p>
            <ul class="about-features">
                <li><span>✓</span> Expert & Dedicated Educators</li>
                <li><span>✓</span> Standard Science & Computer Labs</li>
                <li><span>✓</span> Safe & Conducive Learning Spaces</li>
            </ul>
            <a href="<?= BASE_URL ?>/about" class="btn-primary">Learn More About Us</a>
        </div>

    </div>
</section>

<div id="videoModal" class="video-modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="video-container">
            <video id="fullPlayer" controls>
                <source src="<?= BASE_URL ?>/assets/videos/intro_1.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>

<!-- STATS -->
<section class="stats">
    <div class="stat-box">
        <h2 class="counter" data-target="450">0</h2>
        <p>Pupils Enrolled</p>
    </div>
    <div class="stat-box">
        <h2 class="counter" data-target="35">0</h2>
        <p>Qualified Teachers</p>
    </div>
    <div class="stat-box">
        <h2 class="counter" data-target="20">0</h2>
        <p>Years of Excellence</p>
    </div>
</section>

<section class="programs">
    <div class="container">
        <h2 class="section-title">Academic Excellence</h2>
        <p class="section-subtitle">A balanced curriculum designed to nurture every stage of your child's development.</p>
        
        <div class="program-grid">
            <div class="program-card">
                <div class="program-image">
                    <img src="<?= BASE_URL ?>/assets/images/7.jpeg" alt="Nursery Section">
                    <div class="program-icon">🧸</div>
                </div>
                <div class="program-content">
                    <h3>Nursery Section</h3>
                    <p>Our Early Years program focuses on play-based learning that fosters creativity, emotional intelligence, and basic literacy.</p>
                    <ul class="program-list">
                        <li>Creative Arts & Crafts</li>
                        <li>Social Skills Development</li>
                        <li>Foundational Numeracy</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/nursery" class="btn-text">View Curriculum <span>&rarr;</span></a>
                </div>
            </div>

            <div class="program-card">
                <div class="program-image">
                    <img src="<?= BASE_URL ?>/assets/images/16.jpeg" alt="Primary Section">
                    <div class="program-icon">📚</div>
                </div>
                <div class="program-content">
                    <h3>Primary Section</h3>
                    <p>A rigorous academic foundation combined with moral instruction to prepare students for secondary education and leadership.</p>
                    <ul class="program-list">
                        <li>Advanced STEM subjects</li>
                        <li>Moral & Religious Education</li>
                        <li>ICT & Digital Literacy</li>
                    </ul>
                    <a href="<?= BASE_URL ?>/primary" class="btn-text">View Curriculum <span>&rarr;</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="why-us">
    <div class="container">
        <h2 class="section-title">The St. Murumba Advantage</h2>
        <p class="section-subtitle">Providing a foundation of excellence for the next generation of leaders.</p>

        <div class="why-grid">
            <div class="why-card">
                <div class="why-image">
                    <img src="<?= BASE_URL ?>/assets/images/teachers.jpg" alt="Experienced Teachers">
                </div>
                <div class="why-content">
                    <div class="why-icon">👩‍🏫</div>
                    <h4>Experienced & Caring Teachers</h4>
                    <p>Our educators are not just qualified; they are mentors dedicated to each child's individual growth.</p>
                </div>
            </div>

            <div class="why-card">
                <div class="why-image">
                    <img src="<?= BASE_URL ?>/assets/images/eviron.jpg" alt="Safe Environment">
                </div>
                <div class="why-content">
                    <div class="why-icon">🛡️</div>
                    <h4>Safe & Friendly Environment</h4>
                    <p>We maintain a high-security campus with a warm atmosphere where every child feels at home.</p>
                </div>
            </div>

            <div class="why-card">
                <div class="why-image">
                    <img src="<?= BASE_URL ?>/assets/images/learn.jpg" alt="Modern Facilities">
                </div>
                <div class="why-content">
                    <div class="why-icon">🏫</div>
                    <h4>Modern Learning Facilities</h4>
                    <p>From digital classrooms to science labs, we provide the tools necessary for 21st-century learning.</p>
                </div>
            </div>

            <div class="why-card">
                <div class="why-image">
                    <img src="<?= BASE_URL ?>/assets/images/moral.jpg" alt="Moral Values">
                </div>
                <div class="why-content">
                    <div class="why-icon">⚖️</div>
                    <h4>Strong Moral Values</h4>
                    <p>Character building is at our core, ensuring students grow with integrity, respect, and discipline.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NEWS & EVENTS -->
<section class="news">
    <div class="container">
        <h2 class="section-title">Latest News & Updates</h2>
        
        <div class="news-grid">
            <article class="news-card">
                <div class="news-image">
                    <img src="<?= BASE_URL ?>/assets/images/7.jpeg" alt="Inter-House Sports">
                    <span class="news-date">Mar 15, 2025</span>
                </div>
                <div class="news-content">
                    <span class="news-tag">Sports</span>
                    <h4>Inter-House Sports Competition</h4>
                    <p>Relive the moments of teamwork and athletic excellence from our annual sports meet held at the main bowl.</p>
                    <a href="#" class="read-more">Read Full Story <span>&rarr;</span></a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-image">
                    <img src="<?= BASE_URL ?>/assets/images/18.jpeg" alt="Computer Lab">
                    <span class="news-date">Feb 28, 2025</span>
                </div>
                <div class="news-content">
                    <span class="news-tag">Academics</span>
                    <h4>New Computer Lab Commissioned</h4>
                    <p>Our state-of-the-art digital center is now open, featuring 40 new workstations to enhance STEM learning for pupils.</p>
                    <a href="#" class="read-more">Read Full Story <span>&rarr;</span></a>
                </div>
            </article>

            <article class="news-card">
                <div class="news-image">
                    <img src="<?= BASE_URL ?>/assets/images/4 (15).jpeg" alt="Excursion">
                    <span class="news-date">Feb 10, 2025</span>
                </div>
                <div class="news-content">
                    <span class="news-tag">Excursion</span>
                    <h4>Educational Tour to the National Museum</h4>
                    <p>Primary 5 and 6 students explored our rich cultural heritage during their recent history field trip.</p>
                    <a href="#" class="read-more">Read Full Story <span>&rarr;</span></a>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- TESTIMONIALS -->
<section class="testimonials">
    <h2 class="section-title">What Parents Say</h2>
    <div class="testimonial-box" id="testimonial">
        <p>"St. Murumba has transformed my child's confidence and academics."</p>
        <span>- Mrs. Okafor</span>
    </div>
</section>

<section class="gallery">
    <div class="container">
        <h2 class="section-title">School Life in Pictures</h2>
        <p class="section-subtitle">A glimpse into the vibrant daily activities and learning environment at St. Murumba.</p>
        
        <div class="gallery-grid">
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/1.jpeg" alt="Classroom Learning">
                <div class="gallery-overlay">
                    <span class="gallery-category">Academics</span>
                    <h4 class="gallery-caption">Interactive Learning</h4>
                </div>
            </div>

            <div class="gallery-item featured">
                <img src="<?= BASE_URL ?>/assets/images/2.jpeg" alt="School Event">
                <div class="gallery-overlay">
                    <span class="gallery-category">Events</span>
                    <h4 class="gallery-caption">Annual Inter-House Sports</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/3.jpeg" alt="Science Lab">
                <div class="gallery-overlay">
                    <span class="gallery-category">Facilities</span>
                    <h4 class="gallery-caption">Modern Science Laboratory</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/4.jpeg" alt="Music Lesson">
                <div class="gallery-overlay">
                    <span class="gallery-category">Arts</span>
                    <h4 class="gallery-caption">Cultural Dance Rehearsals</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/5.jpeg" alt="Computer Lab">
                <div class="gallery-overlay">
                    <span class="gallery-category">Technology</span>
                    <h4 class="gallery-caption">Digital Literacy Session</h4>
                </div>
            </div>

            <div class="gallery-item featured">
                <img src="<?= BASE_URL ?>/assets/images/6.jpeg" alt="Graduation Day">
                <div class="gallery-overlay">
                    <span class="gallery-category">Milestones</span>
                    <h4 class="gallery-caption">Class of 2025 Graduation</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/7.jpeg" alt="Library">
                <div class="gallery-overlay">
                    <span class="gallery-category">Facilities</span>
                    <h4 class="gallery-caption">Quiet Study Time</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/8.jpeg" alt="Football Pitch">
                <div class="gallery-overlay">
                    <span class="gallery-category">Sports</span>
                    <h4 class="gallery-caption">Football Team Practice</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/9.jpeg" alt="Playground">
                <div class="gallery-overlay">
                    <span class="gallery-category">Early Years</span>
                    <h4 class="gallery-caption">Nursery Play Area</h4>
                </div>
            </div>

            <div class="gallery-item featured">
                <img src="<?= BASE_URL ?>/assets/images/10.jpeg" alt="Staff Meeting">
                <div class="gallery-overlay">
                    <span class="gallery-category">Community</span>
                    <h4 class="gallery-caption">Our Dedicated Educators</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/11.jpeg" alt="Chemistry Lab">
                <div class="gallery-overlay">
                    <span class="gallery-category">Academics</span>
                    <h4 class="gallery-caption">Practical Science Classes</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/12.jpeg" alt="School Bus Excursion">
                <div class="gallery-overlay">
                    <span class="gallery-category">Outreach</span>
                    <h4 class="gallery-caption">Educational Field Trip</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/13.jpeg" alt="Assembly">
                <div class="gallery-overlay">
                    <span class="gallery-category">Values</span>
                    <h4 class="gallery-caption">Morning Devotion & Assembly</h4>
                </div>
            </div>
            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/14.jpeg" alt="School Dining Hall">
                <div class="gallery-overlay">
                    <span class="gallery-category">Well-being</span>
                    <h4 class="gallery-caption">Healthy Meals & Dining</h4>
                </div>
            </div>

            <div class="gallery-item featured">
                <img src="<?= BASE_URL ?>/assets/images/15.jpeg" alt="Drama Performance">
                <div class="gallery-overlay">
                    <span class="gallery-category">Arts</span>
                    <h4 class="gallery-caption">Annual Drama & Stage Play</h4>
                </div>
            </div>

            <div class="gallery-item">
                <img src="<?= BASE_URL ?>/assets/images/16.jpeg" alt="PTA Meeting">
                <div class="gallery-overlay">
                    <span class="gallery-category">Community</span>
                    <h4 class="gallery-caption">Active Parent Participation</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="cta-overlay"></div>
    <div class="cta-container">
        <div class="cta-content">
            <span class="cta-badge">Admissions Open for 2026/2027</span>
            <h2>Give Your Child the Foundation for a Lifetime of Success</h2>
            <p>Join the St. Murumba community today. Our enrollment process is simple, transparent, and designed to welcome your family into ours.</p>
            
            <div class="cta-actions">
                <a href="<?= BASE_URL ?>/admission" class="btn-enroll-large">Begin Enrollment</a>
                <a href="<?= BASE_URL ?>/contact" class="btn-outline-white">Book a School Tour</a>
            </div>
        </div>
    </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter">
    <h2>Subscribe to Our Newsletter</h2>
    <form>
        <input type="email" placeholder="Enter your email">
        <button type="submit">Subscribe</button>
    </form>
</section>

<?php include 'layouts/footer.php'; ?>
