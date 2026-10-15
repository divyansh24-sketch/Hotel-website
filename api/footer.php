<!-- ========================================================
     SELF-CONTAINED FOOTER COMPONENT: footer.php
     Hotel Traditional INN - Royal Heritage & Concierge Footer
     Features: Honors Badges + Contact Details (Photo 2) + 
               Location Highlights (Photo 3) + Interactive Enquiry Form
     (Compact Margins & Spacing Optimized for Easy Copy-Paste)
======================================================== -->

<!-- 1. COMPONENT STYLING (CSS) -->
<style>
    /* Footer Section Architecture - Compact Margins */
    .luxury-footer-section {
        background-color: #F7F4EE; /* Warm Italian & Heritage Canvas Matching Photo 1 */
        color: #1A1815;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        position: relative;
        overflow: hidden;
        border-top: 1px solid #E5DFD5;
    }

    .footer-container {
        max-width: 1320px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    /* 1. TOP AWARDS & HONORS BAR (Photo 1) */
    .footer-honors-bar {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        gap: 1.5rem;
        padding: 2.2rem 0; /* Compact Vertical Padding */
        border-bottom: 1px solid #E6E0D6;
    }

    .honor-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 0.35rem;
        transition: transform 0.35s ease;
    }

    .honor-item:hover {
        transform: translateY(-3px);
    }

    .honor-icon {
        color: #8C7355;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 0.2rem;
    }

    .honor-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.12rem;
        font-weight: 600;
        color: #171614;
        margin: 0;
        line-height: 1.2;
    }

    .honor-desc {
        font-size: 0.74rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #6C665D;
        line-height: 1.35;
        margin: 0;
    }

    /* 2. MAIN FOOTER 4-COLUMN GRID (Photo 1 + Photo 2 + Photo 3) */
    .footer-main-grid {
        display: grid;
        grid-template-columns: 1.4fr 0.9fr 1.1fr 1.3fr;
        gap: 2.2rem; /* Compact Gap */
        padding: 3.2rem 0 2.8rem 0; /* Compact Padding */
    }

    /* Column 1: Brand & Newsletter */
    .footer-col-brand {
        display: flex;
        flex-direction: column;
    }

    .footer-brand-header {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        margin-bottom: 0.9rem;
    }

    .footer-crest {
        width: 36px;
        height: 36px;
        border: 1px solid #C5A880;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-weight: 700;
        font-size: 0.95rem;
        color: #8C7355;
        background: #FFFFFF;
    }

    .footer-brand-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.45rem;
        font-weight: 600;
        color: #171614;
        line-height: 1.1;
        letter-spacing: -0.01em;
    }

    .footer-brand-tag {
        font-size: 0.62rem;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #8C7355;
        font-weight: 700;
        display: block;
        margin-top: 2px;
    }

    .footer-about-text {
        font-size: 0.83rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #5A554D;
        line-height: 1.6;
        margin-bottom: 1.4rem;
    }

    /* Newsletter Box (Photo 1) */
    .footer-newsletter-wrap {
        display: flex;
        align-items: center;
        max-width: 360px;
        background: #FFFFFF;
        border: 1px solid #DCD5C9;
        border-radius: 4px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(28, 20, 12, 0.04);
        transition: border-color 0.3s ease;
    }

    .footer-newsletter-wrap:focus-within {
        border-color: #8C7355;
    }

    .footer-input-email {
        flex: 1;
        border: none;
        outline: none;
        padding: 0.75rem 0.95rem;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-size: 0.82rem;
        color: #171614;
        background: transparent;
    }

    .footer-input-email::placeholder {
        color: #9A9489;
    }

    .footer-btn-subscribe {
        background: #11100F;
        color: #FFFFFF;
        border: none;
        padding: 0.75rem 1.15rem;
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    .footer-btn-subscribe:hover {
        background: #8C7355;
    }

    /* Column Typography & Links */
    .footer-col-title {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.2em;
        text-transform: uppercase;
        color: #26231F;
        margin-bottom: 1.1rem;
    }

    .footer-links-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.65rem;
    }

    .footer-link-item a {
        font-size: 0.84rem;
        font-weight: 400; /* Spline Sans Regular */
        color: #555047;
        text-decoration: none;
        transition: color 0.25s ease, transform 0.25s ease;
        display: inline-block;
    }

    .footer-link-item a:hover {
        color: #8C7355;
        transform: translateX(3px);
    }

    /* Column 3: Strategic Location (From Photo 3) */
    .footer-proximity-list {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        flex-direction: column;
        gap: 0.55rem;
    }

    .proximity-item {
        display: flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.8rem;
        color: #555047;
        font-weight: 400;
    }

    .proximity-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background-color: #8C7355;
        flex-shrink: 0;
    }

    .checkin-badge-box {
        margin-top: 1rem;
        background: rgba(255, 255, 255, 0.7);
        border: 1px solid #E2DCCF;
        border-radius: 6px;
        padding: 0.65rem 0.85rem;
        font-size: 0.78rem;
        color: #443F37;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .checkin-badge-box strong {
        color: #171614;
    }

    /* Column 4: Contact Concierge (Exact Details from Photo 2) */
    .footer-contact-group {
        display: flex;
        flex-direction: column;
        gap: 0.95rem;
    }

    .contact-item-row {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .contact-label {
        font-size: 0.65rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        color: #8C7355;
    }

    .contact-value {
        font-size: 0.83rem;
        color: #38342D;
        line-height: 1.45;
        font-weight: 400;
        text-decoration: none;
    }

    .contact-value a {
        color: inherit;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .contact-value a:hover {
        color: #8C7355;
    }

    /* Interactive Enquiry Action Button (Photo 2) */
    .btn-open-enquiry {
        margin-top: 0.5rem;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        background: #11100F;
        color: #FFFFFF;
        border: none;
        padding: 0.68rem 1.1rem;
        border-radius: 4px;
        font-size: 0.72rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        cursor: pointer;
        transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        box-shadow: 0 4px 12px rgba(17, 16, 15, 0.15);
    }

    .btn-open-enquiry:hover {
        background: #8C7355;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(140, 115, 85, 0.25);
    }

    /* 3. BOTTOM COPYRIGHT & LEGAL BAR (Photo 1) */
    .footer-bottom-bar {
        border-top: 1px solid #E6E0D6;
        padding: 1.4rem 0 1.6rem 0; /* Compact Padding */
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .copyright-text {
        font-size: 0.78rem;
        color: #6C665D;
        font-weight: 400;
    }

    .footer-legal-links {
        display: flex;
        gap: 1.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .footer-legal-links a {
        font-size: 0.7rem;
        font-weight: 700;
        letter-spacing: 0.14em;
        text-transform: uppercase;
        color: #4A463F;
        text-decoration: none;
        transition: color 0.25s ease;
    }

    .footer-legal-links a:hover {
        color: #8C7355;
    }

    /* 4. MODAL ENQUIRY / COMPLAINT FORM (From Photo 2) */
    .enquiry-modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(17, 16, 14, 0.65);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        z-index: 2000;
        display: none;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
        opacity: 0;
        transition: opacity 0.35s ease;
    }

    .enquiry-modal-backdrop.is-active {
        display: flex;
        opacity: 1;
    }

    .enquiry-modal-box {
        background: #FFFFFF;
        border-radius: 12px;
        max-width: 480px;
        width: 100%;
        padding: 2.2rem;
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.25);
        position: relative;
        transform: translateY(20px) scale(0.96);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .enquiry-modal-backdrop.is-active .enquiry-modal-box {
        transform: translateY(0) scale(1);
    }

    .btn-close-modal {
        position: absolute;
        top: 1.2rem;
        right: 1.2rem;
        background: none;
        border: none;
        font-size: 1.4rem;
        cursor: pointer;
        color: #7A746B;
        transition: color 0.2s ease;
    }

    .btn-close-modal:hover {
        color: #171614;
    }

    .modal-tag {
        font-size: 0.68rem;
        font-weight: 700;
        letter-spacing: 0.18em;
        text-transform: uppercase;
        color: #8C7355;
        margin-bottom: 0.4rem;
        display: block;
    }

    .modal-title {
        font-family: var(--font-serif, 'Cormorant Garamond', serif);
        font-size: 1.65rem;
        font-weight: 600;
        color: #171614;
        margin: 0 0 1.2rem 0;
        line-height: 1.2;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        display: block;
        font-size: 0.72rem;
        font-weight: 600;
        letter-spacing: 0.05em;
        color: #48433C;
        margin-bottom: 0.35rem;
    }

    .form-input, .form-textarea {
        width: 100%;
        padding: 0.72rem 0.95rem;
        background: #FAF8F5;
        border: 1px solid #E0D9CE;
        border-radius: 6px;
        font-family: var(--font-sans, 'Spline Sans', sans-serif);
        font-size: 0.85rem;
        color: #171614;
        box-sizing: border-box;
        outline: none;
        transition: border-color 0.25s ease, background 0.25s ease;
    }

    .form-input:focus, .form-textarea:focus {
        border-color: #8C7355;
        background: #FFFFFF;
    }

    .form-textarea {
        resize: vertical;
        min-height: 80px;
    }

    .btn-submit-enquiry {
        width: 100%;
        background: #11100F;
        color: #FFFFFF;
        border: none;
        padding: 0.85rem;
        border-radius: 6px;
        font-size: 0.75rem;
        font-weight: 700;
        letter-spacing: 0.16em;
        text-transform: uppercase;
        cursor: pointer;
        transition: background 0.3s ease;
        margin-top: 0.5rem;
    }

    .btn-submit-enquiry:hover {
        background: #8C7355;
    }

    /* Responsive Breakpoints */
    @media (max-width: 1080px) {
        .footer-honors-bar {
            grid-template-columns: repeat(2, 1fr);
            row-gap: 1.6rem;
        }
        .footer-main-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 2.2rem;
        }
    }

    @media (max-width: 640px) {
        .footer-honors-bar {
            grid-template-columns: 1fr;
            row-gap: 1.4rem;
            padding: 1.8rem 0;
        }
        .footer-main-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 2rem;
            padding: 2.4rem 0 2rem 0;
        }
        .footer-col-brand,
        .footer-col-contact {
            grid-column: 1 / -1;
        }
        .footer-bottom-bar {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.85rem;
        }
        .footer-legal-links {
            flex-wrap: wrap;
            gap: 1rem;
        }
        .enquiry-modal-box {
            padding: 1.6rem;
        }
    }
</style>

<!-- 2. COMPONENT HTML MARKUP -->
<footer id="footer" class="luxury-footer-section">
    <div class="footer-container">
        
        <!-- 1. TOP AWARDS & HONORS BAR (Exact Style of Photo 1) -->
        <div class="footer-honors-bar">
            
            <!-- Honor 1: Forbes 5-Star Equivalent -->
            <div class="honor-item">
                <div class="honor-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                    </svg>
                </div>
                <h4 class="honor-title">Forbes 5-Star 2024</h4>
                <p class="honor-desc">Flawless Hospitality Standard</p>
            </div>

            <!-- Honor 2: Condé Nast Gold List -->
            <div class="honor-item">
                <div class="honor-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="6"></circle>
                        <path d="M15.477 12.89L17 22l-5-3-5 3 1.523-9.11"></path>
                    </svg>
                </div>
                <h4 class="honor-title">Condé Nast Gold List</h4>
                <p class="honor-desc">Top Heritage &amp; Reserve Stays</p>
            </div>

            <!-- Honor 3: Michelin Key Honors -->
            <div class="honor-item">
                <div class="honor-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M6 3h12l4 6-10 12L2 9l4-6z"></path>
                        <path d="M11 3L8 9l4 12 4-12-3-6"></path>
                        <path d="M2 9h20"></path>
                    </svg>
                </div>
                <h4 class="honor-title">Michelin Key Honors</h4>
                <p class="honor-desc">Exceptional Stay &amp; Comfort</p>
            </div>

            <!-- Honor 4: Historic Trust / Certified Heritage -->
            <div class="honor-item">
                <div class="honor-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                    </svg>
                </div>
                <h4 class="honor-title">Historic Trust Heritage</h4>
                <p class="honor-desc">Certified Hospitality Reserve</p>
            </div>

        </div>

        <!-- 2. MAIN 4-COLUMN FOOTER GRID -->
        <div class="footer-main-grid">
            
            <!-- Col 1: Brand Identity & Newsletter (Photo 1) -->
            <div class="footer-col-brand">
                <div class="footer-brand-header">
                    <div class="footer-crest">TI</div>
                    <div>
                        <div class="footer-brand-title">Hotel Traditional INN</div>
                        <span class="footer-brand-tag">PALACE &amp; HERITAGE HAVELI</span>
                    </div>
                </div>
                <p class="footer-about-text">
                    A sanctuary of classical Indian grandeur, peaceful residential hospitality, and refined comfort situated in the heart of Delhi North.
                </p>
                
                <!-- Correspondence Newsletter Input (Matches Photo 1) -->
                <form class="footer-newsletter-wrap" onsubmit="event.preventDefault(); alert('Thank you for subscribing to Hotel Traditional INN newsletter.');">
                    <input type="email" required class="footer-input-email" placeholder="Your correspondence email">
                    <button type="submit" class="footer-btn-subscribe">SUBSCRIBE</button>
                </form>
            </div>

            <!-- Col 2: Navigation Links (Photo 1) -->
            <div class="footer-col-explore">
                <h5 class="footer-col-title">EXPLORE</h5>
                <ul class="footer-links-list">
                    <li class="footer-link-item"><a href="#hero">Home</a></li>
                    <li class="footer-link-item"><a href="#about">About </a></li>
                    <li class="footer-link-item"><a href="#rooms">Rooms </a></li>
                    <li class="footer-link-item"><a href="#amenities">Hotel Amenities</a></li>
                    <li class="footer-link-item"><a href="#gallery">Photos Gallery</a></li>
                    <li class="footer-link-item"><a href="#etiquette">Residence Rules</a></li>
                </ul>
            </div>

            <!-- Col 3: Strategic Proximity & Transit (From Photo 3) -->
            <div class="footer-col-connectivity">
                <h5 class="footer-col-title">CONNECTIVITY</h5>
                <ul class="footer-proximity-list">
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>North Campus Delhi — 2 Kms</span></li>
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>Kamla Nagar &amp; Shalimar Bagh</span></li>
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>Kashmiri Gate Metro — 4 Kms</span></li>
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>New Delhi Rly Station — 9 Kms</span></li>
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>Old Delhi Rly Station — 10 Kms</span></li>
                    <li class="proximity-item"><span class="proximity-dot"></span> <span>IGI Airport, Delhi — 20 Kms</span></li>
                </ul>

                <div class="checkin-badge-box">
                    <span>🕒</span>
                    <span>Check-in: <strong>12:00 Noon</strong> • 24×7 Concierge</span>
                </div>
            </div>

            <!-- Col 4: Contact Concierge & Enquiry Form (Exact from Photo 2) -->
            <div class="footer-col-contact">
                <h5 class="footer-col-title">CONTACT CONCIERGE</h5>
                <div class="footer-contact-group">
                    
                    <div class="contact-item-row">
                        <span class="contact-label">PROPERTY ADDRESS</span>
                        <span class="contact-value">
                            A 248 Ashok Vihar Phase IV,<br>
                            Near Police Station Bharat Nagar,<br>
                            Delhi - 110052, India
                        </span>
                    </div>

                    <div class="contact-item-row">
                        <span class="contact-label">TELEPHONE (24×7 DIRECT)</span>
                        <span class="contact-value">
                            <a href="tel:+919999241488">+91 9999 2414 88</a><br>
                            <a href="tel:+919958317128">+91 9958 3171 28</a>
                        </span>
                    </div>

                    <div class="contact-item-row">
                        <span class="contact-label">ELECTRONIC DESK</span>
                        <span class="contact-value">
                            <a href="mailto:traditionalhospitality@gmail.com">traditionalhospitality@gmail.com</a>
                        </span>
                    </div>

                    <!-- Trigger for Enquiry / Complaint & Suggestion Modal (Photo 2) -->
                    <button type="button" class="btn-open-enquiry" id="openEnquiryModalBtn">
                        <span>✉️ ENQUIRY &amp; FEEDBACK</span>
                    </button>
                </div>
            </div>

        </div>

        <!-- 3. BOTTOM COPYRIGHT & LEGAL BAR (Photo 1) -->
        <div class="footer-bottom-bar">
            <div class="copyright-text">
                &copy; 2026 Hotel Traditional INN. All rights reserved. Registered Heritage Residence.
            </div>
            <ul class="footer-legal-links">
                <li><a href="#etiquette">HOTEL RULES</a></li>
                <li><a href="#rules">PRIVACY POLICY</a></li>
                <li><a href="#rules">GUEST CHARTER</a></li>
                <li><a href="#about">LOCATION</a></li>
            </ul>
        </div>

    </div>

    <!-- 4. ENQUIRY / COMPLAINT & SUGGESTION MODAL (From Photo 2) -->
    <div class="enquiry-modal-backdrop" id="enquiryModal">
        <div class="enquiry-modal-box">
            <button type="button" class="btn-close-modal" id="closeEnquiryModalBtn">&times;</button>
            <span class="modal-tag">DIRECT CONCIERGE ASSISTANCE</span>
            <h3 class="modal-title">Enquiry / Complaint &amp; Suggestion</h3>
            
            <form id="footerEnquiryForm" onsubmit="event.preventDefault(); alert('Thank you! Your message has been sent to Hotel Traditional INN concierge. We will respond shortly at +91 9999 2414 88.'); document.getElementById('enquiryModal').classList.remove('is-active'); this.reset();">
                <div class="form-group">
                    <label class="form-label">Name*</label>
                    <input type="text" required class="form-input" placeholder="Enter your full name">
                </div>
                <div class="form-group">
                    <label class="form-label">Phone Number*</label>
                    <input type="tel" required class="form-input" placeholder="+91 Your 10-digit mobile number">
                </div>
                <div class="form-group">
                    <label class="form-label">Your Message*</label>
                    <textarea required class="form-textarea" placeholder="Write your enquiry, room requirement, or feedback..."></textarea>
                </div>
                <button type="submit" class="btn-submit-enquiry">SEND US MESSAGE</button>
            </form>
        </div>
    </div>
</footer>

<!-- 3. COMPONENT JAVASCRIPT (Interactive Modal & Subscription) -->
<script>
    (function initLuxuryFooter() {
        const run = () => {
            const openBtn = document.getElementById('openEnquiryModalBtn');
            const closeBtn = document.getElementById('closeEnquiryModalBtn');
            const modal = document.getElementById('enquiryModal');

            if (openBtn && modal) {
                openBtn.addEventListener('click', () => {
                    modal.classList.add('is-active');
                    document.body.style.overflow = 'hidden';
                });
            }

            if (closeBtn && modal) {
                closeBtn.addEventListener('click', () => {
                    modal.classList.remove('is-active');
                    document.body.style.overflow = '';
                });
            }

            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        modal.classList.remove('is-active');
                        document.body.style.overflow = '';
                    }
                });
            }
        };

        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', run);
        } else {
            run();
        }
    })();
</script>