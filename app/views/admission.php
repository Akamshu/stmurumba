<?php include 'layouts/header.php'; ?>
<section class="admission-hero">
    <div class="hero-overlay"></div>
    <div class="container hero-content-wrapper">
        
        <nav class="breadcrumb-nav">
            <a href="<?= BASE_URL ?>">Home</a>
            <span class="separator">/</span>
            <span class="current">Admissions</span>
        </nav>

        <div class="hero-main-text">
            <span class="top-tag pulse">Admissions Open 2026/2027</span>
            <h1>Secure Your Child's <span class="text-accent">Future</span></h1>
            <p>Providing a world-class foundation of academic excellence and moral leadership for the next generation.</p>
        </div>

        <div class="hero-stats-bar">
            <div class="stat-item">
                <i class="fas fa-calendar-check"></i>
                <div>
                    <strong>Deadline</strong>
                    <span>August 31, 2026</span>
                </div>
            </div>
            <div class="stat-item">
                <i class="fas fa-child"></i>
                <div>
                    <strong>Ages</strong>
                    <span>2 - 11 Years</span>
                </div>
            </div>
            <div class="stat-item">
                <i class="fas fa-clock"></i>
                <div>
                    <strong>Status</strong>
                    <span class="status-open">Currently Enrolling</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="admission-process">
    <div class="container">
        <div class="section-header text-center">
            <span class="sub-heading">Simple & Transparent</span>
            <h2 class="section-title">The Journey to Enrollment</h2>
            <div class="title-line"></div>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-line"></div>

            <div class="process-step">
                <div class="step-badge">
                    <span class="step-num">01</span>
                </div>
                <div class="step-body">
                    <h4>Inquiry & Tour</h4>
                    <p>Visit our campus to see our facilities and meet our world-class educators.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-badge">
                    <span class="step-num">02</span>
                </div>
                <div class="step-body">
                    <h4>Form Purchase</h4>
                    <p>Obtain the official application form for a fee of <span style="color:#2ecc71;">₦5,000 </span>at the admin office.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-badge">
                    <span class="step-num">03</span>
                </div>
                <div class="step-body">
                    <h4>Assessment</h4>
                    <p>Friendly placement tests to identify and support your child's specific learning needs.</p>
                </div>
            </div>

            <div class="process-step">
                <div class="step-badge">
                    <span class="step-num">04</span>
                </div>
                <div class="step-body">
                    <h4>Welcome!</h4>
                    <p>Submit documents, complete fees, and receive your official St. Murumba welcome pack.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="admission-main">
    <div class="container split-layout">
        
        <aside class="requirements-sidebar">
            <div class="info-card doc-requirements">
                <div class="card-header">
                    <i class="fas fa-folder-open"></i>
                    <h3>Document Checklist</h3>
                </div>
                <p>Ensure you have scanned or physical copies of these items for your visit:</p>
                <ul class="styled-list">
                    <li>Birth Certificate (Original for sighting)</li>
                    <li>2 Recent Passport Photographs</li>
                    <li>Immunization Record (Nursery Only)</li>
                    <li>Previous Academic Report Card</li>
                    <li>Transfer Certificate (If transferring)</li>
                </ul>
                
                <div class="download-section">
                    <p>Prefer a paper application?</p>
                    <a href="#" class="btn-download-pdf" style="color:#2ecc71; text-decoration: none;">
                        <i class="fas fa-file-download"></i> 
                         Download PDF Form
                    </a>
                </div>
            </div>
            
            <div class="info-card support-card">
                <h3>Need Assistance?</h3>
                <p>Our Admissions Officer is available Mon — Fri, 8:00 AM - 4:00 PM.</p>
                <div class="contact-links" style="color:#2ecc71;text-decoration:none;">
                    <a href="tel:+234800000000" class="contact-item" style="color:#2ecc71;text-decoration:none;">
                        <i class="fas fa-phone"> </i>  Phone Number: 070 5632 9088
                    </a> |
                    <a href="mailto:admissions@stmurumba.edu" class="contact-item" style="color:#2ecc71;text-decoration:none;"> 
                        <i class="fas fa-envelope"></i>  Email: admissions@stmurumba.edu
                    </a> <br>
                    <span class="contact-item" style="color:#2ecc71;text-decoration:none;">
                        <i class="fas fa-school"> </i>  Address: KM 37, Zaria Road, Jos North LGA Plateau State.
                    </span>
                </div>
            </div>
        </aside>

        <div class="form-card-wrapper">
            <div class="form-header">
                <h2>Express Interest</h2>
                <p>Fill out the details below and we will contact you within one business day to guide you through the next steps.</p>
            </div>
            
            <form action="process_admission.php" method="POST" class="standard-form">
                <div class="form-section">
                    <label class="form-label">Parent/Guardian Name</label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" name="parent_name" required placeholder="Enter full name">
                    </div>
                </div>
                
                <div class="input-grid">
                    <div class="form-section">
                        <label class="form-label">Email Address</label>
                        <div class="input-wrapper">
                            <i class="fas fa-envelope input-icon"></i>
                            <input type="email" name="email" required placeholder="name@email.com">
                        </div>
                    </div>
                    <div class="form-section">
                        <label class="form-label">Phone Number</label>
                        <div class="input-wrapper">
                            <i class="fas fa-phone-alt input-icon"></i>
                            <input type="tel" name="phone" required placeholder="080 0000 0000">
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <label class="form-label">Proposed Level of Entry</label>
                    <div class="input-wrapper">
                        <i class="fas fa-graduation-cap input-icon"></i>
                        <select name="class_level" class="form-select">
                            <option value="" disabled selected>Select a class...</option>
                            <optgroup label="Early Years">
                                <option value="nursery1">Nursery 1</option>
                                <option value="nursery2">Nursery 2</option>
                            </optgroup>
                            <optgroup label="Lower/Upper Primary">
                                <option value="primary1-3">Primary 1 - 3</option>
                                <option value="primary4-6">Primary 4 - 6</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn-submit-form">
                    Submit Inquiry <i class="fas fa-paper-plane"></i>
                </button>
                
                <p class="privacy-note">
                    <i class="fas fa-lock"></i> Your information is secure and will only be used for admission purposes.
                </p>
            </form>
        </div>

    </div>
</section>

<?php include 'layouts/footer.php'; ?>
