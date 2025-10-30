<?php
$page_title = "Smite - Technical Art";
include '../../includes/header.php';
?>

<div class="container" style="max-width: 1300px;">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> > 
        <a href="../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> > 
        <span>Smite</span>
    </nav>

    <h2>Smite</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Hi-Rez Studios | 2023-2024 | Unreal Engine 5 & 3ds Max</strong></p>
        <p>Technical Artist for Hi-Rez Studios’ popular MOBA game, focusing on character skinning/rigging and tool development. Working on a live-service game with millions of players required robust, scalable solutions that could handle frequent content updates while maintaining high-quality standards..</p>
        
        <p>My primary focus was streamlining the character production workflow, particularly the transition from the original Smite to its sequel. This involved creating automated tools for rig building, optimizing character porting processes, and ensuring consistency across a large library of character assets.</p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>Automatic Rig Tools</h3>
                <p class="project-description">Created automated build tools for modular rig components, reducing manual setup time and ensuring consistency across character assets.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Character Port Optimization</h3>
                <p class="project-description">Reduced character port time from Smite to its sequel by 25% through automated conversion scripts and standardized workflows.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Pipeline Documentation</h3>
                <p class="project-description">Developed comprehensive documentation and training materials for character production pipelines.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Live-Service Support</h3>
                <p class="project-description">Maintained and updated existing character assets while supporting ongoing content releases and seasonal updates.</p>
            </div>
        </div>
    </div>

    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
    <h2>Project Impact</h2>
    <p>Streamlined the character production pipeline across a large, multi-platform project. Implemented automation and standardization that significantly improved quality control, iteration speed, and team efficiency.</p>
    </div>

    <div class="text-content">
        <ul>
            <li><strong>25% Faster Character Ports:</strong> Automated conversion reduced manual work from days to hours</li>
            <li><strong>Consistent Quality:</strong> Standardized pipeline ensured uniform quality across multiple character assets</li>
            <li><strong>Team Productivity:</strong> Freed up artist time for creative work instead of technical setup</li>
            <li><strong>Live Service Support:</strong> Enabled rapid deployment of character updates and new content</li>
        </ul>

        <hr>

        <h3>Technology Stack</h3>
        <ul>
            <li><strong>Engine:</strong> Unreal Engine 5</li>
            <li><strong>3D & Animation:</strong> 3ds Max</li>
            <li><strong>Scripting & Tools:</strong> MaxScript, Python</li>
            <li><strong>Version Control & CI/CD:</strong> Perforce, Jenkins</li>
        </ul>

        <hr>

        <h3>Team & Duration</h3>
        <ul>
            <li><strong>Role:</strong> Technical Artist</li>
            <li><strong>Team Size:</strong> 200+ developers</li>
            <li><strong>Duration:</strong> 28 months</li>
            <li><strong>Platforms:</strong> PC, Console</li>
        </ul>
    </div>

    <h2>Production Challenges</h2>
    <div class="grid competencies-grid">

        <div class="grid-item">
            <div class="project-info">
                <h3>Live Service Constraints</h3>
                <p class="project-description">Tools needed to work with existing content while supporting ongoing development and player-facing updates.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Team Coordination</h3>
                <p class="project-description">Large team required clear communication and documentation. Created training materials and workflow guides.</p>
            </div>
        </div>
    </div>

    <h2>Technical Innovation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Modular Rig System:</strong> Developed a component-based rigging approach that allowed for flexible character variations while maintaining consistency. Rigs could be assembled from pre-built modules for different character types.</p>
        
        <p><strong>Batch Processing Pipeline:</strong> Created tools that could process multiple character animations simultaneously. Essential for handling the large character roster efficiently.</p>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Automation Saves Time and Reduces Errors:</strong> Investing in robust automation tools paid dividends across the large character roster. Manual processes that seemed quick for one character became bottlenecks at scale.</p>
        
        <p><strong>Documentation is Critical:</strong> In a large team environment, clear documentation and training materials were essential for tool adoption and maintenance.</p>
        
        <p><strong>Iterative Improvement:</strong> Tools evolved based on team feedback and production needs. Regular updates and improvements were necessary to maintain efficiency.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../runaway/" class="project-link">Next Project: Runaway →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
