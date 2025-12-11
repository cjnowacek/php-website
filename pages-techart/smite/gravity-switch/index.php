<?php
$page_title = "Gravity Switch Rig - Technical Art";
include '../../../includes/header.php';
?>

<div class="container" style="max-width: 1300px;">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> >
        <a href="../../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> >
        <a href="../index.php" style="color: var(--header-color); text-decoration: none;">Smite</a> >
        <span>Gravity Switch Rig</span>
    </nav>

    <h2>Gravity Switch Rig</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Hi-Rez Studios | 3ds Max Rigging & Animation</strong></p>
        <p>A gravity simulation rigging system developed using orient and aim constraints in 3ds Max. This rig allows animators to dynamically change the direction of gravity affecting a character, enabling smooth transitions between different gravitational orientations for gameplay and cinematics.</p>

        <p>The Gravity Switch rig was designed to support characters that could walk on walls, ceilings, or in changing gravity environments. By using constraint-based solutions rather than scripted simulations, the system remained artist-friendly and performed efficiently in the animation pipeline.</p>
    </div>

    <h2>Key Features</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>Dynamic Gravity Direction</h3>
                <p class="project-description">Orient constraints allow smooth transitions between different gravity directions, supporting wall-walking and ceiling-walking animations.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Aim Constraint Integration</h3>
                <p class="project-description">Aim constraints keep character elements properly oriented relative to the gravity direction, maintaining believable physics.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Animator-Friendly Controls</h3>
                <p class="project-description">Simple control interface allows animators to switch gravity direction with keyframeable parameters, no scripting knowledge required.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Performance Optimized</h3>
                <p class="project-description">Constraint-based approach ensures real-time viewport performance and clean animation curves without simulation overhead.</p>
            </div>
        </div>
    </div>

    <h2>Tool Demo</h2>
    <div class="demo-reel">
        <div class="video-container">
            <iframe title="Gravity Switch Rig Demo"
                    src="https://www.youtube.com/embed/OyiUt6jIEQE"
                    frameborder="0"
                    allowfullscreen
                    loading="lazy">
            </iframe>
        </div>
    </div>

    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
    <h2>Rig Impact</h2>
    <p>Enabled new gameplay mechanics and cinematic possibilities by giving animators precise control over gravity simulation. The constraint-based approach provided predictable, keyframeable results while maintaining real-time performance in the animation workflow.</p>
    </div>

    <div class="text-content">
        <ul>
            <li><strong>Gameplay Flexibility:</strong> Supported wall-walking and gravity-defying character abilities</li>
            <li><strong>Animator Control:</strong> Keyframeable gravity direction gave animators full creative control</li>
            <li><strong>Real-Time Performance:</strong> Constraint system maintained viewport interactivity during animation</li>
            <li><strong>Clean Export:</strong> Baked animations exported cleanly to engine without simulation artifacts</li>
        </ul>

        <hr>

        <h3>Technology Stack</h3>
        <ul>
            <li><strong>3D Software:</strong> 3ds Max</li>
            <li><strong>Rigging Systems:</strong> Orient Constraints, Aim Constraints</li>
            <li><strong>Animation Tools:</strong> Custom control rigs, parameter wiring</li>
        </ul>

        <hr>

        <h3>Development Details</h3>
        <ul>
            <li><strong>Role:</strong> Technical Artist & Rigger</li>
            <li><strong>Development Type:</strong> Rigging system development</li>
            <li><strong>Context:</strong> Part of Smite character rigging pipeline</li>
            <li><strong>Platforms:</strong> PC, Console</li>
        </ul>
    </div>

    <h2>Technical Implementation</h2>
    <div class="grid competencies-grid">

        <div class="grid-item">
            <div class="project-info">
                <h3>Orient Constraint System</h3>
                <p class="project-description">Core gravity direction controlled by orient constraints targeting directional helper objects representing gravity vectors.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Aim Constraint Hierarchy</h3>
                <p class="project-description">Secondary aim constraints maintain proper orientation of dangling elements (cloth, hair, accessories) relative to gravity.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Control Interface</h3>
                <p class="project-description">Custom attribute holders provide intuitive slider and dropdown controls for gravity direction and blend weights.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Baking Pipeline</h3>
                <p class="project-description">Developed workflow for cleanly baking constraint-driven animation to standard bone hierarchy for engine export.</p>
            </div>
        </div>
    </div>

    <h2>Use Cases</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Wall-Walking Characters:</strong> Characters with abilities to walk on vertical surfaces required smooth gravity transitions. The rig allowed animators to blend between floor, wall, and ceiling orientations seamlessly.</p>

        <p><strong>Cinematic Gravity Changes:</strong> Dramatic camera angles and environmental gravity shifts in cutscenes were achieved by keyframing the gravity direction controls over time.</p>

        <p><strong>Zero-Gravity Environments:</strong> By blending gravity influence to zero or switching directions rapidly, animators could create convincing floating and tumbling motions.</p>
    </div>

    <h2>Technical Challenges</h2>
    <div class="grid competencies-grid">

        <div class="grid-item">
            <div class="project-info">
                <h3>Constraint Stability</h3>
                <p class="project-description">Maintaining stable constraint evaluation order was critical to prevent flipping or gimbal lock during gravity transitions.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Animation Blending</h3>
                <p class="project-description">Required careful setup to ensure gravity transitions could blend smoothly with existing locomotion and action animations.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Performance Optimization</h3>
                <p class="project-description">Constraint evaluation overhead required optimization to maintain real-time scrubbing in complex scenes.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>Engine Export</h3>
                <p class="project-description">Ensuring constraint-driven motion baked correctly for Unreal Engine import without losing fidelity.</p>
            </div>
        </div>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Constraints Over Simulation:</strong> For game animation, predictable constraint-based systems proved more artist-friendly than dynamic simulations. Animators valued control over automatic behavior.</p>

        <p><strong>Hierarchy Matters:</strong> Proper constraint hierarchy and evaluation order were essential. Early prototypes suffered from evaluation order issues that caused unpredictable results.</p>

        <p><strong>Test Early and Often:</strong> Testing gravity transitions with real animation cycles revealed edge cases that weren't apparent in static poses. Iterative testing with animators was invaluable.</p>

        <p><strong>Documentation Drives Adoption:</strong> Clear documentation with visual examples ensured animators could quickly understand and utilize the gravity controls without technical support.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../index.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Smite</a>
        <a href="../../../techart.php" class="project-link">View All Technical Art →</a>
    </div>
</div>

<?php include '../../../includes/footer.php'; ?>