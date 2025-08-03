<?php
$page_title = "Contact";
include 'includes/header.php';
?>

<div class="container">
    <h2>Get In Touch</h2>
    
    <div class="contact-content">
        <div class="contact-info">
            <h3>Let's Connect</h3>
            <div class="contact-details">
                <p><strong>📧 Email:</strong><br>
                <a href="mailto:cjnowacek@protonmail.com">cjnowacek@protonmail.com</a></p>
                
                <p><strong>💼 LinkedIn:</strong><br>
                <a href="https://linkedin.com/in/cj-nowacek" target="_blank" rel="noopener">linkedin.com/in/cj-nowacek</a></p>
                
                <p><strong>🐙 GitHub:</strong><br>
                <a href="https://github.com/cjnowacek" target="_blank" rel="noopener">github.com/cjnowacek</a></p>
                
                <p><strong>🎬 Demo Reel:</strong><br>
                <a href="https://vimeo.com/1016947852" target="_blank" rel="noopener">View on Vimeo</a></p>
            </div>
            
            <div class="resume-download">
                <h3>Resume</h3>
                <a href="static/files/CJ_Nowacek_Resume.pdf" class="project-link" download>
                    📄 Download Resume (PDF)
                </a>
                <p class="project-description">Technical Artist & DevOps Engineer<br>
                Updated: January 2025</p>
            </div>
            
            <div class="availability">
                <h3>Availability</h3>
                <div class="status-indicator">
                    <span class="status-dot available"></span>
                    <span>Open to new opportunities</span>
                </div>
                <p class="project-description">Currently seeking Technical Artist or DevOps Engineer positions. Open to contract, freelance, or full-time opportunities.</p>
            </div>
        </div>
        
        <div class="contact-form">
            <h3>Send a Message</h3>
            <form action="includes/contact_handler.php" method="POST" id="contactForm">
                <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" id="name" name="name" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="company">Company/Organization</label>
                    <input type="text" id="company" name="company">
                </div>
                
                <div class="form-group">
                    <label for="subject">Subject *</label>
                    <select id="subject" name="subject" required>
                        <option value="">Select a topic...</option>
                        <option value="job_opportunity">Job Opportunity</option>
                        <option value="freelance_project">Freelance Project</option>
                        <option value="collaboration">Collaboration</option>
                        <option value="technical_question">Technical Question</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="message">Message *</label>
                    <textarea id="message" name="message" rows="6" required placeholder="Tell me about your project, opportunity, or question..."></textarea>
                </div>
                
                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" id="newsletter" name="newsletter">
                        Keep me updated on your latest projects and articles
                    </label>
                </div>
                
                <button type="submit" class="submit-btn">Send Message</button>
                
                <p class="form-note">* Required fields. I typically respond within 24-48 hours.</p>
            </form>
            
            <div id="formResponse" class="form-response" style="display: none;"></div>
        </div>
    </div>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const formData = new FormData(this);
    const submitBtn = this.querySelector('.submit-btn');
    const responseDiv = document.getElementById('formResponse');
    
    // Show loading state
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;
    
    // Simulate form submission (replace with actual endpoint)
    setTimeout(() => {
        responseDiv.innerHTML = '<div class="success-message">Thank you for your message! I\'ll get back to you soon.</div>';
        responseDiv.style.display = 'block';
        this.reset();
        submitBtn.textContent = 'Send Message';
        submitBtn.disabled = false;
        
        // Hide response after 5 seconds
        setTimeout(() => {
            responseDiv.style.display = 'none';
        }, 5000);
    }, 1000);
});
</script>

<?php include 'includes/footer.php'; ?>
