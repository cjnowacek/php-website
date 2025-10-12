<?php
$page_title = "Home";
include 'includes/header.php';
include 'includes/project-components/project_loader.php';
include 'includes/project-components/project_card.php';
// Control which projects appear and in what order
$featuredProjectIds = [
  'whisper-from-the-stars',
    'smite',
    'runaway',
    'sintern'
];

// Load the specific projects you want
$featuredProjects = [];
foreach ($featuredProjectIds as $projectId) {
    $project = ProjectLoader::getProject($projectId);
    if ($project) {
        $featuredProjects[] = $project;
    }
}
?>

<div class="container" style="max-width: 1300px;">
    <h2>Professional Statement</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p>I am a passionate Technical Artist and DevOps Developer specializing in the intersection of creativity and technology . With extensive experience in pipeline automation, and infrastructure optimization, I bridge the gap between artistic vision and technical implementation.</p>
        
        <p>My expertise spans from creating and building software tools making other people lives easier. Creating robust CI/CD systems and automating complex workflows. I thrive on solving challenging technical problems while empowering creative teams to focus on what they do best—creating amazing experiences.</p>
        
        <p>Whether developing character rigs, or automating asset processing workflows, I bring a unique perspective that combines artistic sensibility with engineering precision.</p>
    </div>

<h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3><i class="fa-solid fa-code" style="color:blue; vertical-align: middle; margin-right: 4px; font-size:1.1em;"></i>Automation Scripting</h3>
                <p class="project-description">Python automation for infrastructure provisioning and asset processing</p>
                <a href="devops.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3><i class="fa-solid fa-screwdriver-wrench" style="color:grey; vertical-align: middle; margin-right: 4px; font-size:1.1em;"></i>Pipeline Development</h3>
                <p class="project-description">Tool creation, workflow optimization, and artist-friendly automation</p>
                <a href="techart.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3><i class="fa-solid fa-gamepad" style="color:#512c96; vertical-align: middle; margin-right: 4px; font-size:1.1em;"></i>Game Engine Expertise</h3>
                <p class="project-description">Unity, Unreal Engine, custom engine integration and modification</p>
                <a href="techart.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3><i class="fa-brands fa-github" style="color:#1e3050; vertical-align: middle; margin-right: 4px; font-size:1.1em;"></i>Github</h3>
                <p class="project-description">Preview of some of my coding projects</p>
                <a href="https://github.com/cjnowacek" target="_blank" class="competency-link">Goto Github</a>
            </div>
        </div>
    </div>

    <h2>Featured Projects</h2>
    <div class="projects-container projects-container-index">
        <?php foreach ($featuredProjects as $project): ?>
            <?php renderProjectCard($project); ?>
        <?php endforeach; ?>
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

<?php include 'includes/footer.php'; ?>
