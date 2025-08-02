<?php
$page_title = "Technical Art";
include '../includes/header.php';
?>

<div class="container">
    <?php include '../includes/demo_reel.php'; ?>

    <h2>Featured Projects</h2>

    <div class="projects-container">
        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="../static/img/y7A08Y.gif" alt="Smite 2 GIF">
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
                <a href="#" class="project-link">View Project Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="../static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
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
                <a href="#" class="project-link">View Project Details</a>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="../static/img/runaway_1200x900.gif" alt="Runaway GIF">
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
                <a href="#" class="project-link">View Project Details</a>
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
