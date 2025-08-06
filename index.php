<?php
// Updated index.php
$page_title = "Home";
include 'includes/header.php';
include 'includes/project_loader.php';
include 'includes/project_card.php';

// Get featured projects
$featuredProjects = ProjectLoader::getFeaturedProjects(4);
?>

<div class="container">
    <h2>Professional Statement</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p>I am a passionate Technical Artist and DevOps Engineer specializing in the intersection of creativity and technology in game development. With extensive experience in shader development, pipeline automation, and infrastructure optimization, I bridge the gap between artistic vision and technical implementation.</p>
        
        <p>My expertise spans from creating visually stunning effects and optimizing rendering pipelines to building robust CI/CD systems and automating complex workflows. I thrive on solving challenging technical problems while empowering creative teams to focus on what they do best—creating amazing experiences.</p>
        
        <p>Whether developing custom shaders for next-generation games, automating asset processing workflows, or designing scalable infrastructure solutions, I bring a unique perspective that combines artistic sensibility with engineering precision.</p>
    </div>

    <!-- Core Competencies section stays the same -->
    <h2>Core Competencies</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Technical Art</h3>
                <p class="project-description">Shader development, VFX creation, rendering optimization, and visual problem-solving</p>
            </div>
        </div>
        <!-- ... other competencies ... -->
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
