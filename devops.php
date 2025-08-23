<?php
$page_title = "DevOps";
include 'includes/header.php';
include 'includes/project-components/project_loader.php';
include 'includes/project-components/project_card.php';
// YOU control which devops projects appear and in what order
$devopsProjectIds = [
    'build_pipeline',    // Your main devops project
    // Add more devops project IDs here as you create them
    // 'asset_automation',
    // 'monitoring_dashboard',
];

// Load the specific projects you want
$devopsProjects = [];
foreach ($devopsProjectIds as $projectId) {
    $project = ProjectLoader::getProject($projectId);
    if ($project) {
        $devopsProjects[] = $project;
    }
}
?>

<div class="container" style="max-width: 1300px;">
    <h2>DevOps & Infrastructure</h2>
    
    <div class="about-text">
        <p>Specializing in building robust, scalable infrastructure and streamlined deployment pipelines for game development and technical art workflows. My DevOps expertise focuses on automating complex processes, ensuring reliable deployments, and creating efficient development environments.</p>
    </div>

    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🔄 CI/CD Pipelines</h3>
                <p class="project-description">Jenkins, GitHub Actions, automated testing and deployment workflows for game builds and asset processing</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🐍 Automation Scripting</h3>
                <p class="project-description">Python automation for infrastructure provisioning, asset processing, and build system optimization</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🐳 Containerization</h3>
                <p class="project-description">Docker containers and orchestration for consistent game development environments and deployments</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>☁️ Cloud & Infrastructure</h3>
                <p class="project-description">Scalable infrastructure design, cloud platform optimization, and performance monitoring for game services</p>
            </div>
        </div>
    </div>

    <h2>Infrastructure Projects</h2>
    <div class="projects-container">
        <?php foreach ($devopsProjects as $project): ?>
            <?php renderProjectCard($project); ?>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
