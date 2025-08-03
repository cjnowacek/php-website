<?php
$page_title = "Home";
include 'includes/header.php';
?>

<div class="container">

    <h2>Professional Statement</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p>I am a passionate Technical Artist and DevOps Engineer specializing in the intersection of creativity and technology in game development. With extensive experience in shader development, pipeline automation, and infrastructure optimization, I bridge the gap between artistic vision and technical implementation.</p>
        
        <p>My expertise spans from creating visually stunning effects and optimizing rendering pipelines to building robust CI/CD systems and automating complex workflows. I thrive on solving challenging technical problems while empowering creative teams to focus on what they do best—creating amazing experiences.</p>
        
        <p>Whether developing custom shaders for next-generation games, automating asset processing workflows, or designing scalable infrastructure solutions, I bring a unique perspective that combines artistic sensibility with engineering precision.</p>
    </div>

    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Technical Art</h3>
                <p class="project-description">Shader development, VFX creation, rendering optimization, and visual problem-solving</p>
            </div>
        </div>

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

        <div class="grid-item">
            <div class="project-info">
                <h3>🛠️ Pipeline Development</h3>
                <p class="project-description">Tool creation, workflow optimization, and artist-friendly automation</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚡ Performance Optimization</h3>
                <p class="project-description">Rendering optimization, profiling, and resource management</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎮 Game Engine Expertise</h3>
                <p class="project-description">Unity, Unreal Engine, custom engine integration and modification</p>
            </div>
        </div>
    </div>

    <h2>Featured Projects</h2>
    <div class="projects-container" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin: 2rem 0;">
        <div class="project-card">
            <div class="project-media">
                <img src="static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="static/img/y7A08Y.gif" alt="Smite 2 GIF">
            </div>
            <div class="project-info-card">
                <h3>Smite 2</h3>
                <p class="project-company">Hi-Rez Studios</p>
                <p class="project-description-card">Led technical art development for the highly anticipated sequel to the popular MOBA game. Focused on creating advanced shader systems, optimizing rendering pipelines, and developing tools to streamline the art production workflow.</p>
                <div class="project-highlights">
                    <strong>Key Contributions:</strong>
                    <ul>
                        <li>Developed custom shader library for character and environment rendering</li>
                        <li>Created automated LOD generation tools reducing artist workload by 40%</li>
                        <li>Optimized rendering pipeline achieving 25% performance improvement</li>
                        <li>Implemented real-time lighting system for dynamic environments</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Unreal Engine</span>
                    <span class="tech-tag">HLSL</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">Maya</span>
                    <span class="tech-tag">Substance</span>
                </div>
                <a href="techart/smite2/" class="project-link">View Project Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
            </div>
            <div class="project-info-card">
                <h3>The Sintern</h3>
                <p class="project-company">Independent Project</p>
                <p class="project-description-card">A stylized horror game featuring innovative visual effects and atmospheric rendering. Developed custom shaders and particle systems to create unique supernatural visual experiences while maintaining optimal performance.</p>
                <div class="project-highlights">
                    <strong>Technical Achievements:</strong>
                    <ul>
                        <li>Custom ghost/spirit rendering with translucency effects</li>
                        <li>Procedural horror atmosphere system</li>
                        <li>Dynamic lighting with real-time shadows</li>
                        <li>Particle-based supernatural effects</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Unity</span>
                    <span class="tech-tag">ShaderGraph</span>
                    <span class="tech-tag">C#</span>
                    <span class="tech-tag">Blender</span>
                    <span class="tech-tag">VFX Graph</span>
                </div>
                <a href="techart/sintern/" class="project-link">View Project Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="static/img/runaway_1200x900.gif" alt="Runaway GIF">
            </div>
            <div class="project-info-card">
                <h3>Runaway</h3>
                <p class="project-company">Game Jam Project</p>
                <p class="project-description-card">Fast-paced action game developed during a 48-hour game jam. Focused on creating efficient rendering solutions and rapid prototyping tools to meet tight deadlines while maintaining visual quality.</p>
                <div class="project-highlights">
                    <strong>Rapid Development Features:</strong>
                    <ul>
                        <li>Modular shader system for quick iteration</li>
                        <li>Automated build and deployment pipeline</li>
                        <li>Real-time performance profiling tools</li>
                        <li>Streamlined asset import workflow</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Unity</span>
                    <span class="tech-tag">HLSL</span>
                    <span class="tech-tag">C#</span>
                    <span class="tech-tag">Git</span>
                    <span class="tech-tag">Jenkins</span>
                </div>
                <a href="techart/runaway/" class="project-link">View Project Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="static/img/devops-pipeline.png" alt="Automated Build Pipeline">
                <div class="project-media-overlay">
                    <div class="media-icon">🔄</div>
                </div>
            </div>
            <div class="project-info-card">
                <h3>Automated Build Pipeline</h3>
                <p class="project-company">Enterprise DevOps</p>
                <p class="project-description-card">Designed and implemented a comprehensive CI/CD pipeline that reduced game build times by 60% and eliminated manual deployment errors. Features automated testing, multi-platform builds, and zero-downtime deployments.</p>
                <div class="project-highlights">
                    <strong>Key Achievements:</strong>
                    <ul>
                        <li>Reduced build times from 45 minutes to 18 minutes</li>
                        <li>Implemented automated testing catching 95% of issues</li>
                        <li>Zero-downtime deployments with automatic rollback</li>
                        <li>Multi-platform builds from single pipeline</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Jenkins</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">Kubernetes</span>
                    <span class="tech-tag">AWS</span>
                    <span class="tech-tag">Python</span>
                </div>
                <a href="devops/build-pipeline/" class="project-link">View Project Details</a>
            </div>
        </div>
    </div>

    <style>
    @media (max-width: 600px) {
        .projects-container {
            grid-template-columns: 1fr !important;
        }
    }
    
    /* Style for DevOps project without image */
    .project-media-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, var(--header-color) 0%, var(--subheader-color) 100%);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .media-icon {
        font-size: 4em;
        color: white;
        opacity: 0.8;
    }
    </style>
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

<?php include 'includes/footer.php'; ?>
