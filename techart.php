<?php
$page_title = "Technical Art";
include 'includes/header.php';
include 'includes/project-data/project_loader.php';
include 'includes/project-data/project_card.php';
// YOU control which tech art projects appear and in what order
$techartProjectIds = [
    'smite',    // Most important first
    'runaway',    // Third
    'sintern',   // Second
];

// Load the specific projects you want
$techartProjects = [];
foreach ($techartProjectIds as $projectId) {
    $project = ProjectLoader::getProject($projectId);
    if ($project) {
        $techartProjects[] = $project;
    }
}
?>

<style>
.projects-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 2rem;
    margin-bottom: 2rem;
}
@media (max-width: 900px) {
    .projects-container {
        grid-template-columns: 1fr 1fr;
        min-width: auto;
    }
}
@media (max-width: 600px) {
    .projects-container {
        grid-template-columns: 1fr;
    }
}
</style>

<div class="container" style="max-width: 1300px;">
 
    <h2>Techart</h2>
    
    <div class="about-text">
        <p>Specializing in building character rigging solutions for game development and technical art workflows. I've spent a considerable ammount of time automating complex processes, and creating high polish game assets.</p>
    </div>

   <?php include 'includes/demo_reel.php'; ?>

    <h2>Featured Projects</h2>

    <div class="projects-container">
        <?php foreach ($techartProjects as $project): ?>
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
