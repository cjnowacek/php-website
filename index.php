<?php
$page_title = "Home";
include '../includes/header.php';
?>
<div class="container">
    <?php include '../includes/demo_reel.php'; ?>
    
    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🔄 CI/CD Pipelines</h3>
                <p class="project-description">Jenkins, GitHub Actions, automated testing and deployment workflows</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="project-info">
                <h3>🐍 Automation Scripting</h3>
                <p class="project-description">Python automation for infrastructure provisioning and asset processing</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="project-info">
                <h3>🐳 Containerization</h3>
                <p class="project-description">Docker containers and orchestration for consistent deployments</p>
            </div>
        </div>
        <div class="grid-item">
            <div class="project-info">
                <h3>☁️ Cloud & Infrastructure</h3>
                <p class="project-description">Scalable infrastructure design and cloud platform optimization</p>
            </div>
        </div>
    </div>

    <h2>Featured Projects</h2>
    <div class="projects-container">
        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="../static/img/y7A08Y.gif" alt="Smite 2 Animation">
            </div>
            <div class="project-info-card">
                <h3>Smite 2</h3>
                <p class="project-company">Hi-Rez Studios</p>
                <p class="project-description-card">
                    Led the technical art for character migration from UE3 to UE5, 
                    developing automated rigging tools and optimizing asset pipelines for AAA production.
                </p>
                <div class="project-highlights">
                    <ul>
                        <li>100+ character assets successfully migrated</li>
                        <li>60% reduction in manual rig conversion work</li>
                        <li>Custom Python tools for batch processing</li>
                        <li>Cross-platform optimization and testing</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Maya</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">UE5</span>
                    <span class="tech-tag">Character Rigging</span>
                </div>
                <a href="projects.php#smite" class="project-link">View Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="../static/img/TheSintern1200x900.gif" alt="The Sintern Animation">
            </div>
            <div class="project-info-card">
                <h3>The Sintern</h3>
                <p class="project-company">Collaborative Project</p>
                <p class="project-description-card">
                    Technical art support for animated short, developing rigging solutions and 
                    automation tools to support the production pipeline.
                </p>
                <div class="project-highlights">
                    <ul>
                        <li>Multi-character rigging system</li>
                        <li>Automated weight painting tools</li>
                        <li>Quality assurance workflows</li>
                        <li>Team collaboration tools</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Maya</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">Animation</span>
                </div>
                <a href="projects.php#sintern" class="project-link">View Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="../static/img/runaway_1200x900.gif" alt="Runaway Animation">
            </div>
            <div class="project-info-card">
                <h3>Runaway</h3>
                <p class="project-company">Student Project</p>
                <p class="project-description-card">
                    Character rigging and animation pipeline development for animated short film, 
                    focusing on expressive facial animation and efficient workflow creation.
                </p>
                <div class="project-highlights">
                    <ul>
                        <li>Advanced facial rigging system</li>
                        <li>Custom animation controls</li>
                        <li>Efficient skinning workflow</li>
                        <li>Performance-optimized deformation</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Maya</span>
                    <span class="tech-tag">Character Animation</span>
                    <span class="tech-tag">Facial Rigging</span>
                </div>
                <a href="projects.php#runaway" class="project-link">View Details</a>
            </div>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.project-card').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const gif = item.querySelector('.hover-gif');
            if (gif && gif.src) {
                gif.src = gif.src; // Reset the GIF to play from the beginning
            }
        });
    });
</script>

<?php include '../includes/footer.php'; ?>
