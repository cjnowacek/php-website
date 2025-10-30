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

    <h2>Welcome!</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p>Welcome to my digital workshop. I explore how tools, pipelines, and automation can expand the boundaries of creative expression. Every project here represents a step toward that vision: connecting art and engineering into systems built for people and possibility.</p>
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
