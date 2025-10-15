<?php
$page_title = "DevOps";
include 'includes/header.php';
include 'includes/project-components/project_loader.php';
include 'includes/project-components/project_card.php';
// YOU control which devops projects appear and in what order
$devopsProjectIds = [
    'build_pipeline',
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
    
    <div style="text-align: center; margin: 40px 0;">
        <a href="/static/files/CJ-Nowacek-IT-Resume.pdf" class="competency-link" target="_blank" rel="noopener">Download Resume (PDF)</a>
    </div>   

    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">

        <div class="grid-item">
            <div class="project-info">
                <h3>Automation Scripting</h3>
                <p class="project-description">Python/bash automation for infrastructure provisioning, asset processing, and build system optimization</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Containerization</h3>
                <p class="project-description">Docker containers and orchestration for consistent environments and deployments</p>
            </div>
        </div>

    </div>

    <h2>Infrastructure Projects</h2>
<!--
    <div class="projects-container">
        % <?php foreach ($devopsProjects as $project): ?>
         %   <?php renderProjectCard($project); ?>
        % <?php endforeach; ?>
    </div>
-->
<p>coming soon!<p/>
</div>

<?php include 'includes/footer.php'; ?>
