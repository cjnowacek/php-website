<?php
$page_title = "Home";
include '../includes/header.php';
?>

<div class="container">

    <h2>Professional Statement</h2>

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
    <div class="grid">
        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="../static/img/y7A08Y.gif" alt="Smite 2 GIF">
            </div>
            <a href="projects.php#smite" style="text-decoration:none">
                <h1 class="name">Smite 2</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="../static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
            </div>
            <a href="projects.php#sintern" style="text-decoration:none">
                <h1 class="name">The Sintern</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="../static/img/runaway_1200x900.gif" alt="Runaway GIF">
            </div>
            <a href="projects.php#runaway" style="text-decoration:none">
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

<?php include '../includes/footer.php'; ?>
