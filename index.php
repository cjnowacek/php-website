<?php
$page_title = "Home";
include 'includes/header.php';
include 'includes/project-data/project_loader.php';
include 'includes/project-data/project_card.php';
// YOU control which projects appear and in what order
$featuredProjectIds = [
    'smite',           // First card
    'build_pipeline',   // Second card
    'runaway',           // Third card
    'sintern'          //Fourth card
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

<div class="container">
    <h2>Professional Statement</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p>I am a passionate Technical Artist and DevOps Engineer specializing in the intersection of creativity and technology . With extensive experience in pipeline automation, and infrastructure optimization, I bridge the gap between artistic vision and technical implementation.</p>
        
        <p>My expertise spans from creating and building software tools making other people lives easier. Creating robust CI/CD systems and automating complex workflows. I thrive on solving challenging technical problems while empowering creative teams to focus on what they do best—creating amazing experiences.</p>
        
        <p>Whether developing character rigs, or automating asset processing workflows, I bring a unique perspective that combines artistic sensibility with engineering precision.</p>
    </div>

    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Technical Art</h3>
                <p class="project-description">Shader development, VFX creation, and visual problem-solving</p>
                <a href="techart.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🐍 Automation Scripting</h3>
                <p class="project-description">Python automation for infrastructure provisioning and asset processing</p>
                <a href="devops.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🛠️ Pipeline Development</h3>
                <p class="project-description">Tool creation, workflow optimization, and artist-friendly automation</p>
                <a href="techart.php" class="competency-link">View Projects</a>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎮 Game Engine Expertise</h3>
                <p class="project-description">Unity, Unreal Engine, custom engine integration and modification</p>
                <a href="techart.php" class="competency-link">View Projects</a>
            </div>
        </div>
    </div>

    <h2>Featured Projects</h2>
    <div class="projects-container" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 2rem; margin: 2rem 0;">
        <?php foreach ($featuredProjects as $project): ?>
            <?php renderProjectCard($project); ?>
        <?php endforeach; ?>
    </div>

    <style>
    @media (max-width: 600px) {
        .projects-container {
            grid-template-columns: 1fr !important;
        }
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
