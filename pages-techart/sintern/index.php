<?php
$page_title = "The Sintern - Technical Art";
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/components/breadcrumb.php';

// Define breadcrumb navigation
$breadcrumbs = [
    ['title' => 'Home', 'url' => '/index.php'],
    ['title' => 'Technical Art', 'url' => '/techart.php'],
    ['title' => 'The Sintern', 'url' => ''] // Current page, no URL
];
?>

<div class="container">
    <?php renderBreadcrumb($breadcrumbs); ?>

    <h2>The Sintern</h2>
    <div class="text-content">
        <p><strong>Junior Film Project | 2021-2022 | Maya</strong></p>
        <p>A story about an intern from hell and her demon dog. The Sintern challenged me to create character rigs for the first time in a production environment. Given our limited development timeline, coordinating rig updates with animation proved to be a real challenge while maintaining production momentum.</p>
        
        <p>This project served as my introduction to production rigging workflows, version control for character assets, and the critical importance of communication between technical artists and animators in a fast-paced creative environment.</p>
    </div>

    <!-- Embedded YouTube Video -->
    <div class="demo-reel" style="margin: 40px 0;">
        <div class="video-container">
            <iframe title="The Sintern | Junior Film 2021-2022" 
                    src="https://www.youtube.com/embed/Itg7pS30iiQ" 
                    frameborder="0" 
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                    allowfullscreen
                    loading="lazy">
            </iframe>
        </div>
        <p class="image-caption" style="text-align: center; margin-top: 10px;">
            The Sintern - Full Short Film
        </p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>Character Rigging</h3>
                <p class="project-description">Created cartoon-style character rigs with facial controls including cartoon card eyes system.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>3D Modeling</h3>
                <p class="project-description">Responsible for creating environment assets, props, and character models. Focused on topology suitable for animation and deformation.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Lighting Design</h3>
                <p class="project-description">Developed lighting rigs and setups for consistent shot-by-shot lighting. Created reusable lighting templates for different scene moods.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Pipeline Development</h3>
                <p class="project-description">Established asset versioning workflow and rig update procedures to maintain animator productivity during production.</p>
            </div>
        </div>
    </div>

        
        <!-- Character Rigging Section -->
    <h2>Technical Implementation</h2>
    <div class="text-content-wide">
        
        <!-- Character Rigging Section with larger video -->
        <div class="two-column-section" style="grid-template-columns: 1fr 1.5fr;">
            <div>
                <h3>Character Rigging</h3>
                <p>The Bruce rig was the first character I ever rigged. This rig supported with custom facial controls and cartoon-style expression controls. </p>
                <p>A spline ik was used for his spine to allow better squash and stretch of his body.</p>
                <p>A key innovations included a card-based eye system that allowed for cartoon expressions.</p>
            </div>
            <div>
                <div class="demo-reel">
                    <div class="video-container">
                        <iframe title="Bruce Rig Showcase" 
                          src="https://www.youtube.com/embed/_5qnnNh4ymU?autohide=1&modestbranding=1&rel=0" 
                          frameborder="0" 
                          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                          allowfullscreen
                          loading="lazy">
                        </iframe>
                    </div>
                </div>
                <p class="image-caption">Bruce rig showcase</p>
            </div>
        </div>

    <!-- Lighting System Section -->
    <div class="two-column-section two-column-reverse">
        <div>
            <img src="/static/img/pages/sintern/20221210-sintern-lighting-teset-4.jpg" 
                alt="Lighting setup example 1" 
                class="column-image"
                style="margin-bottom: 20px;">
            
            <img src="/static/img/pages/sintern/20221210-sintern-lighting-teset-5.jpg" 
                alt="Lighting setup example 2" 
                class="column-image">
            
            <p class="image-caption" style="text-align: center; margin-top: 10px;">
               Work in progress lighting tests 
            </p>
        </div>
        <div>
            <h3>Environment lighting tests</h3>
            <p>Developed standardized lighting rigs through systematic experimentation and refinement. The process required testing numerous configurations to find the optimal balance between artistic vision and technical constraints - adjusting light intensities, positions, and color temperatures until each preset achieved the desired mood.</p>


            <p>Through trial and error, discovered efficient workflows for Maya's Arnold renderer that could handle complex lighting scenarios. Multiple test renders and iterations refined each setup, ultimately creating a library of reliable presets that saved significant production time while ensuring professional-quality results.</p>
        </div>
    </div>

    <h2>Project Results</h2>
    <div class="text-content">
        <ul>
            <li><strong>First Production Rig:</strong> Successfully delivered character rigs for animated film production</li>
            <li><strong>Cartoon Aesthetic:</strong> Achieved stylized character deformation with cartoon eye system and facial controls</li>
            <li><strong>Production Pipeline:</strong> Established version control workflow that kept animation team productive</li>
            <li><strong>Lighting Consistency:</strong> Created reusable lighting setups ensuring visual consistency across scenes</li>
            <li><strong>Asset Library:</strong> Built modular prop rigs and environment assets for rapid scene assembly</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Maya, MEL, Python, Arnold Renderer, After Effects, Premiere Pro</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Technical Artist & 3D Generalist<br>
        <strong>Team Size:</strong> 4 developers<br>
        <strong>Duration:</strong> 8 months<br>
        <strong>Platform:</strong> Animated Film</p>
    </div>

    <h2>Production Challenges</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>Version Control</h3>
                <p class="project-description">Managing rig updates during active animation required careful coordination and backwards compatibility planning.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Cartoon Deformation</h3>
                <p class="project-description">Achieving appealing cartoon squash and stretch while maintaining volume and avoiding intersections required custom solutions.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Learning Curve</h3>
                <p class="project-description">First time building production rigs meant learning Maya's rigging tools while under deadline pressure.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Team Communication</h3>
                <p class="project-description">Establishing feedback loops with animators to iterate on rig functionality and usability.</p>
            </div>
        </div>
    </div>

    <h2>Lessons Learned</h2>
    <div class="text-content">
        <p><strong>Plan for Iteration:</strong> Rigs will need updates during production. Building with modularity and backwards compatibility in mind saves significant time later.</p>
        
        <p><strong>Animator Feedback is Critical:</strong> Regular communication with animators revealed usability issues that weren't apparent during rig testing. User feedback drives better tools.</p>
        
        <p><strong>Documentation Saves Time:</strong> Clear documentation on rig controls and update procedures helped the team stay productive during rig revisions.</p>
        
        <p><strong>Version Control Everything:</strong> Establishing asset versioning from day one prevented lost work and made collaboration much smoother.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="/techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="/pages-techart/smite/" class="project-link">Next Project: Smite →</a>
    </div>
</div>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
