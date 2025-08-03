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
    <div class="grid">
        <div class="grid-item">
            <div class="grid-media">
                <img src="static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="static/img/y7A08Y.gif" alt="Smite 2 GIF">
            </div>
            <a href="techart.php#smite" style="text-decoration:none">
                <h1 class="name">Smite 2</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
            </div>
            <a href="techart.php#sintern" style="text-decoration:none">
                <h1 class="name">The Sintern</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="static/img/runaway_1200x900.gif" alt="Runaway GIF">
            </div>
            <a href="techart.php#runaway" style="text-decoration:none">
                <h1 class="name">Runaway</h1>
            </a>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.grid-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const gif = item.querySelector('.hover-gif');
            if (gif && gif.src) {
                gif.src = gif.src; // Reset the GIF to play from the beginning
            }
        });
    });
</script>

<?php include 'includes/footer.php'; ?>
