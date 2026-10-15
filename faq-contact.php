<!-- ========================================================
     SELF-CONTAINED FAQ & CONTACT COMPONENT: faq-contact.php
     Hotel Traditional INN - Guest Enquiries & 24x7 Concierge
     Features: Left FAQ Accordion + Right Contact & Enquiry Form
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Section Architecture - Compact Margins */
    .luxury-faq-contact-section {
        position: relative;
        padding: 4rem 1.5rem; /* Compact Section Padding */
        background-color: #FBF9F5; /* Warm Luxury Canvas */
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        overflow: hidden;
        border-top: 1px solid #EBE5DB;
    }

    .faq-contact-container {
        max-width: 1320px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
    }

    /* Section Header */
    .faq-contact-header {
        max-width: 760px;
        margin-bottom: 2.8rem;
    }

    .faq-contact-tag {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.22em;
        color: #7D6851; /* Warm Gold Tone */
        text-transform: uppercase;
        display: block;
        margin-bottom: 0.45rem;
    }

    .faq-contact-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: clamp(2.3rem, 4vw, 3.4rem);
        font-weight: 400;
        color: #171614;
        letter-spacing: -0.015em;
        line-height: 1.15;
        margin: 0 0 0.85rem 0;
    }

    .faq-contact-subtitle {
        font-size: 0.93rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #555047;
        line-height: 1.62;
        margin: 0;
    }

    /* 2-Column Split: Left FAQ (1.15fr) + Right Contact (1fr) */
    .faq-contact-grid {
        display: grid;
        grid-template-columns: 1.15fr 1fr;
        gap: 3rem; /* Compact Gap */
        align-items: flex-start;
    }

    /* ========================================================
       LEFT: ACCORDION FAQ
    ======================================================== */
    .faq-accordion-group {
        display: flex;
        flex-direction: column;
        gap: 0.85rem;
    }

    .faq-item {
        background: #FFFFFF;
        border: 1px solid #E6E0D6;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 16px -4px rgba(28, 20, 12, 0.04);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    .faq-item.is-open {
        border-color: #8C7355;
        box-shadow: 0 8px 24px -6px rgba(140, 115, 85, 0.12);
    }

    .faq-question-btn {
        width: 100%;
        text-align: left;
        background: none;
        border: none;
        outline: none;
        padding: 1.15rem 1.35rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
        cursor: pointer;
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.22rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.3;
        transition: color 0.25s ease;
    }

    .faq-question-btn:hover {
        color: #8C7355;
    }

    .faq-item.is-open .faq-question-btn {
        color: #8C7355;
    }

    .faq-icon-toggle {
        width: 26px;
        height: 26px;
        border-radius: 50%;
        background: #F5F1EB;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #7D6851;
        flex-shrink: 0;
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), background 0.3s ease, color 0.3s ease;
    }

    .faq-item.is-open .faq-icon-toggle {
        transform: rotate(180deg);
        background: #11100F;
        color: #FFFFFF;
    }

    .faq-answer-collapse {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .faq-answer-content {
        padding: 0 1.35rem 1.25rem 1.35rem;
        font-size: 0.85rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5A554D;
        line-height: 1.65;
        border-top: 1px solid #FAF7F2;
    }

    /* ========================================================
       RIGHT: CONTACT & ENQUIRY BOX
    ======================================================== */
    .contact-card-box {
        background: #FFFFFF;
        border: 1px solid #E6E0D6;
        border-radius: 12px;
        padding: 1.9rem 1.8rem;
        box-shadow: 0 12px 35px -8px rgba(28, 20, 12, 0.08);
        display: flex;
        flex-direction: column;
    }

    .contact-card-badge {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #8C7355;
        margin-bottom: 0.3rem;
        display: block;
    }

    .contact-card-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.6rem;
        font-weight: 600;
        color: #171614;
        margin: 0 0 1.2rem 0;
        line-height: 1.2;
    }

    /* Quick Info Strip (From Photo 2) */
    .contact-quick-strip {
        background: #F8F5F0;
        border-radius: 8px;
        padding: 0.85rem 1rem;
        margin-bottom: 1.3rem;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
        border: 1px solid #ECE6DB;
    }

    .quick-info-row {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        font-size: 0.82rem;
        color: #38342D;
    }

    .quick-info-icon {
        color: #8C7355;
        flex-shrink: 0;
        display: flex;
    }

    .quick-info-row a {
        color: inherit;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s ease;
    }

    .quick-info-row a:hover {
        color: #8C7355;
    }

    /* Direct Form */
    .contact-form {
        display: flex;
        flex-direction: column;
        gap: 0.85rem;
    }

    .form-row-dual {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 0.75rem;
    }

    .form-field-group {
        display: flex;
        flex-direction: column;
        gap: 0.3rem;
    }

    .form-field-label {
        font-size: 0.7rem;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #48433C;
    }

    .form-control-input,
    .form-control-select,
    .form-control-textarea {
        width: 100%;
        padding: 0.68rem 0.85rem;
        background: #FAF8F5;
        border: 1px solid #DDD6CA;
        border-radius: 5px;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-size: 0.83rem;
        color: #171614;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.25s ease, background 0.25s ease;
    }

    .form-control-input:focus,
    .form-control-select:focus,
    .form-control-textarea:focus {
        border-color: #8C7355;
        background: #FFFFFF;
    }

    .form-control-textarea {
        resize: vertical;
        min-height: 75px;
    }

    .btn-submit-contact {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: #11100F;
        color: #FFFFFF;
        border: none;
        padding: 0.82rem 1.4rem;
        border-radius: 5px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        margin-top: 0.3rem;
        box-shadow: 0 4px 14px rgba(17, 16, 15, 0.15);
    }

    .btn-submit-contact:hover {
        background: #8C7355;
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(140, 115, 85, 0.25);
    }

    .btn-submit-contact .arrow {
        transition: transform 0.3s ease;
    }

    .btn-submit-contact:hover .arrow {
        transform: translateX(4px);
    }

    /* Scroll Animation */
    .faq-reveal {
        opacity: 0;
        transform: translate3d(0, 24px, 0);
        transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1),
                    transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
        will-change: opacity, transform;
    }

    .faq-reveal.is-visible {
        opacity: 1;
        transform: translate3d(0, 0, 0);
    }

    /* Responsive Breakpoints */
    @media (max-width: 1024px) {
        .faq-contact-grid {
            grid-template-columns: 1fr;
            gap: 2.8rem;
        }
    }

    @media (max-width: 640px) {
        .luxury-faq-contact-section {
            padding: 3.2rem 1.15rem;
        }
        .faq-contact-header {
            margin-bottom: 2rem;
        }
        .form-row-dual {
            grid-template-columns: 1fr;
        }
        .contact-card-box {
            padding: 1.5rem 1.25rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<section id="faq-contact" class="luxury-faq-contact-section">
    <div class="faq-contact-container">
        
        <!-- Section Header -->
        <div class="faq-contact-header faq-reveal">
            <span class="faq-contact-tag">PATRON ASSISTANCE &amp; INQUIRIES</span>
            <h2 class="faq-contact-title">Frequently Asked &amp; Direct Contact</h2>
            <p class="faq-contact-subtitle">
                Everything you need to know about your stay at Hotel Traditional INN, alongside our 24×7 concierge desk for instant reservations and bespoke requests.
            </p>
        </div>

        <!-- 2-Column Layout: Left FAQ + Right Contact -->
        <div class="faq-contact-grid">
            
            <!-- LEFT COLUMN: ACCORDION FAQ -->
            <div class="faq-accordion-group faq-reveal">
                
                <!-- FAQ Item 1 -->
                <div class="faq-item is-open">
                    <button class="faq-question-btn" type="button" aria-expanded="true">
                        <span>What are the check-in and check-out timings?</span>
                        <div class="faq-icon-toggle">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer-collapse" style="max-height: 200px;">
                        <div class="faq-answer-content">
                            Standard check-in commences at <strong>12:00 Noon</strong>, and check-out is requested by <strong>11:00 AM / 12:00 Noon</strong>. Early arrivals or late departures can be arranged subject to availability by informing our 24×7 concierge desk in advance.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item">
                    <button class="faq-question-btn" type="button" aria-expanded="false">
                        <span>How far is the hotel from Delhi North Campus and metro?</span>
                        <div class="faq-icon-toggle">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer-collapse">
                        <div class="faq-answer-content">
                            Hotel Traditional INN is located in Ashok Vihar Phase IV, just <strong>2 Kms from Delhi University North Campus</strong> and Kamla Nagar. Kashmiri Gate Metro Station is <strong>4 Kms</strong> away, connecting seamlessly across all corners of Delhi NCR.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item">
                    <button class="faq-question-btn" type="button" aria-expanded="false">
                        <span>What are the room categories and nightly tariffs?</span>
                        <div class="faq-icon-toggle">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer-collapse">
                        <div class="faq-answer-content">
                            We offer three royal chamber categories: <strong>Heritage Single Chamber (₹1,870/night)</strong>, <strong>Royal Deluxe Double Bed (₹2,170/night)</strong>, and our premier <strong>Maharaja Family Suite (₹3,270/night)</strong>. All rooms include high-speed Wi-Fi, 4K TV, and air conditioning.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item">
                    <button class="faq-question-btn" type="button" aria-expanded="false">
                        <span>Is secure on-site parking available for guests?</span>
                        <div class="faq-icon-toggle">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer-collapse">
                        <div class="faq-answer-content">
                            Yes, we provide dedicated on-premises hotel parking (subject to availability) with valet assistance, backed by 24/7 CCTV perimeter security and trained personnel.
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item">
                    <button class="faq-question-btn" type="button" aria-expanded="false">
                        <span>How can I modify or cancel my reservation?</span>
                        <div class="faq-icon-toggle">
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg>
                        </div>
                    </button>
                    <div class="faq-answer-collapse">
                        <div class="faq-answer-content">
                            Direct reservations can be modified or cancelled without charges up to 24 hours prior to check-in. Simply call our dedicated line at <strong>+91 9999 2414 88</strong> or email <strong>traditionalhospitality@gmail.com</strong>.
                        </div>
                    </div>
                </div>

            </div>

            <!-- RIGHT COLUMN: CONTACT & ENQUIRY BOX -->
            <div class="contact-card-box faq-reveal">
                <span class="contact-card-badge">24×7 DIRECT CONCIERGE</span>
                <h3 class="contact-card-title">Send Us a Direct Message</h3>

                <!-- Quick Contact Info Strip (From Photo 2) -->
                <div class="contact-quick-strip">
                    <div class="quick-info-row">
                        <div class="quick-info-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            </svg>
                        </div>
                        <span><a href="tel:+919999241488">+91 9999 2414 88</a> &nbsp;|&nbsp; <a href="tel:+919958317128">+91 9958 3171 28</a></span>
                    </div>

                    <div class="quick-info-row">
                        <div class="quick-info-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <span><a href="mailto:traditionalhospitality@gmail.com">traditionalhospitality@gmail.com</a></span>
                    </div>

                    <div class="quick-info-row">
                        <div class="quick-info-icon">
                            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                        </div>
                        <span>A 248 Ashok Vihar Phase IV, Near PS Bharat Nagar, Delhi</span>
                    </div>
                </div>

                <!-- Interactive Form Matching Photo 2 -->
                <form class="contact-form" onsubmit="event.preventDefault(); alert('Thank you, ' + this.name.value + '! Your enquiry has been received. Our concierge will contact you shortly at ' + this.phone.value + '.'); this.reset();">
                    <div class="form-row-dual">
                        <div class="form-field-group">
                            <label class="form-field-label">Name*</label>
                            <input type="text" name="name" required class="form-control-input" placeholder="Your Full Name">
                        </div>
                        <div class="form-field-group">
                            <label class="form-field-label">Phone Number*</label>
                            <input type="tel" name="phone" required class="form-control-input" placeholder="+91 Mobile Number">
                        </div>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Purpose of Inquiry</label>
                        <select class="form-control-select">
                            <option value="reservation">Room Booking &amp; Reservation</option>
                            <option value="tariff">Rates &amp; Extended Stay Inquiry</option>
                            <option value="complaint">Suggestion or Feedback</option>
                            <option value="chauffeur">Chauffeur &amp; Airport Pickup</option>
                        </select>
                    </div>

                    <div class="form-field-group">
                        <label class="form-field-label">Your Message*</label>
                        <textarea name="message" required class="form-control-textarea" placeholder="Specify your requirements, check-in date, or query..."></textarea>
                    </div>

                    <button type="submit" class="btn-submit-contact">
                        <span>SEND US MESSAGE</span>
                        <span class="arrow">→</span>
                    </button>
                </form>

            </div>

        </div>
    </div>
</section>

<!-- 3. COMPONENT JAVASCRIPT (Smooth Accordion & Scroll Reveal) -->
<script>
    (function initLuxuryFAQContact() {
        const run = () => {
            // Smooth FAQ Accordion Toggle
            const faqItems = document.querySelectorAll('.faq-item');

            faqItems.forEach(item => {
                const btn = item.querySelector('.faq-question-btn');
                const collapse = item.querySelector('.faq-answer-collapse');

                btn.addEventListener('click', () => {
                    const isOpen = item.classList.contains('is-open');

                    // Close all other accordion items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.classList.remove('is-open');
                            const otherCollapse = otherItem.querySelector('.faq-answer-collapse');
                            const otherBtn = otherItem.querySelector('.faq-question-btn');
                            if (otherCollapse) otherCollapse.style.maxHeight = null;
                            if (otherBtn) otherBtn.setAttribute('aria-expanded', 'false');
                        }
                    });

                    // Toggle current item
                    if (isOpen) {
                        item.classList.remove('is-open');
                        collapse.style.maxHeight = null;
                        btn.setAttribute('aria-expanded', 'false');
                    } else {
                        item.classList.add('is-open');
                        collapse.style.maxHeight = collapse.scrollHeight + 'px';
                        btn.setAttribute('aria-expanded', 'true');
                    }
                });
            });

            // Staggered Scroll Reveal
            const scrollElements = document.querySelectorAll('.luxury-faq-contact-section .faq-reveal');
            if ('IntersectionObserver' in window) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry, index) => {
                        if (entry.isIntersecting) {
                            setTimeout(() => {
                                entry.target.classList.add('is-visible');
                            }, index * 80);
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.12 });

                scrollElements.forEach(el => observer.observe(el));
            } else {
                scrollElements.forEach(el => el.classList.add('is-visible'));
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', run);
        } else {
            run();
        }
    })();
</script>