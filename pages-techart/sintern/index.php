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

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎭 Character Rigging</h3>
                <p class="project-description">Created cartoon-style character rigs with facial controls including cartoon card eyes system. Built modular rig components for consistent character animation.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📦 3D Modeling</h3>
                <p class="project-description">Responsible for creating environment assets, props, and character models. Focused on topology suitable for animation and deformation.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>💡 Lighting Design</h3>
                <p class="project-description">Developed lighting rigs and setups for consistent shot-by-shot lighting. Created reusable lighting templates for different scene moods.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Pipeline Development</h3>
                <p class="project-description">Established asset versioning workflow and rig update procedures to maintain animator productivity during production.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="text-content-wide">
        
        <!-- Character Rigging Section -->
        <div style="display: grid; grid-template-columns: 1fr 300px; gap: 30px; margin: 30px 0; align-items: start;">
            <div>
                <h3>Character Rig System (MEL/Python)</h3>
                <p>Developed modular character rigs with custom facial controls and cartoon-style deformation systems. The rig featured advanced squash and stretch capabilities while maintaining proper volume preservation for appealing cartoon animation.</p>
                
                <p>Key innovations included a card-based eye system that allowed for extreme cartoon expressions and a modular approach that made it easy to swap out components based on character requirements. The facial rig supported both blend shape-based and bone-based deformation for maximum flexibility.</p>
                
                <div style="background: var(--form-bg); padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 12px; line-height: 1.4; margin: 0;">

<code>// MEL script for cartoon eye setup
proc createCartoonEyes() {
    string $eyeCtrl = `circle -n "eye_CTRL"`;
    addAttr -ln "squash" -at double -dv 1 $eyeCtrl[0];
    addAttr -ln "stretch" -at double -dv 1 $eyeCtrl[0];
    print("Cartoon eye rig created\n");
}</code></pre>
                </div>
            </div>
            <div>
                <img src="/static/img/project-cards/sintern_1200x900.webp" 
                     alt="Character rig demonstration" 
                     style="width: 100%; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                <p style="font-size: 12px; color: var(--text-secondary); margin-top: 10px; text-align: center;">
                    Character rig with facial controls and cartoon deformation system
                </p>
            </div>
        </div>

        <!-- Lighting System Section -->
        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 30px; margin: 30px 0; align-items: start;">
            <div>
                <img src="/static/img/project-cards/runaway_1200x900.webp" 
                     alt="Lighting setup demonstration" 
                     style="width: 100%; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.3);">
                <p style="font-size: 12px; color: var(--text-secondary); margin-top: 10px; text-align: center;">
                    Three-point lighting setup for consistent scene illumination
                </p>
            </div>
            <div>
                <h3>Lighting Rig Automation (Python)</h3>
                <p>Created standardized lighting rigs that could be quickly deployed across different scenes while maintaining visual consistency. The system included presets for different narrative moods - from bright office environments to dramatic underworld sequences.</p>
                
                <p>Each lighting setup was designed to work with Maya's Arnold renderer and included automated positioning based on scene geometry. This approach saved significant time during production while ensuring professional-quality results across all shots.</p>
                
                <div style="background: var(--form-bg); padding: 15px; border-radius: 8px; margin: 15px 0;">
                    <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 12px; line-height: 1.4; margin: 0;"><code>class LightingRigManager:
    def create_lighting_setup(self, scene_type):
        key_light = cmds.directionalLight()
        fill_light = cmds.directionalLight()
        rim_light = cmds.directionalLight()
        return [key_light, fill_light, rim_light]</code></pre>
                </div>
            </div>
        </div>

        <!-- Responsive Design -->
        <style>
        @media (max-width: 768px) {
            .text-content div[style*="grid-template-columns"] {
                display: block !important;
            }
            .text-content div[style*="grid-template-columns"] > div:first-child {
                margin-bottom: 20px;
            }
        }
        </style>
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
                <h3>⏱️ Version Control</h3>
                <p class="project-description">Managing rig updates during active animation required careful coordination and backwards compatibility planning.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Cartoon Deformation</h3>
                <p class="project-description">Achieving appealing cartoon squash and stretch while maintaining volume and avoiding intersections required custom solutions.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📚 Learning Curve</h3>
                <p class="project-description">First time building production rigs meant learning Maya's rigging tools while under deadline pressure.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🤝 Team Communication</h3>
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
