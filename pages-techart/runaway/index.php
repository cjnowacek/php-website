<?php
$page_title = "Runaway - Technical Art";
include '../../includes/header.php';
?>

<div class="container">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> > 
        <a href="../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> > 
        <span>Runaway</span>
    </nav>

    <h2>Runaway</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Senior Thesis | 2024 | Unreal Engine</strong></p>
        <p>Final BFA school project exploring narrative-driven gameplay and technical innovation. Runaway is a story-rich adventure game focusing on childhood trauma and the courage to face your past, developed as part of my senior thesis project.</p>
        
        <p>Working as the sole technical artist on a small team, I was responsible for the entire technical pipeline - from character rigging and animation systems to asset optimization and deployment automation. The project challenged me to create efficient workflows that could support rapid iteration while maintaining high visual quality.</p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎭 Character Rigging & Animation</h3>
                <p class="project-description">Developed complete character rigging system with facial animation support, IK/FK blending, and optimized bone hierarchy for performance.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Automated Build Pipeline</h3>
                <p class="project-description">Created automated build and deployment system reducing manual tasks and ensuring consistent builds across team members.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎬 Cinematic Systems</h3>
                <p class="project-description">Programmed cinematic camera system and character locomotion for seamless narrative sequences and responsive gameplay.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📦 Asset Import Workflow</h3>
                <p class="project-description">Streamlined asset import process with automatic texture optimization, LOD generation, and metadata preservation.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <h3>Character Rigging System (Python/Maya)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code># Automated character rig generation
def create_character_rig(character_mesh):
    """Generate complete character rig with IK/FK systems"""
    
    # Create joint hierarchy
    spine_joints = create_spine_chain(character_mesh)
    arm_joints = create_limb_chain(character_mesh, 'arm')
    leg_joints = create_limb_chain(character_mesh, 'leg')
    
    # Setup IK/FK controls
    setup_ikfk_switch(arm_joints, 'arm')
    setup_ikfk_switch(leg_joints, 'leg')
    
    # Facial rig with blend shapes
    create_facial_controls(character_mesh)
    
    return finalize_rig(character_mesh)</code></pre>
        </div>

        <h3>Cinematic Camera System (Blueprint/C++)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>// Dynamic camera system for narrative sequences
class ACinematicCamera : public ACameraActor
{
    UFUNCTION(BlueprintCallable)
    void StartCinematicSequence(FString SequenceName)
    {
        // Load sequence data
        CinematicData = LoadSequenceData(SequenceName);
        
        // Setup camera movement
        SetupCameraPath(CinematicData.CameraPoints);
        
        // Begin smooth interpolation
        GetWorld()->GetTimerManager().SetTimer(
            CameraTimerHandle, 
            this, 
            &ACinematicCamera::UpdateCameraPosition, 
            0.016f, 
            true
        );
    }
};</code></pre>
        </div>
    </div>

    <h2>Project Results</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <ul>
            <li><strong>Complete Character Pipeline:</strong> Delivered fully-rigged characters from Maya to Unreal Engine with animation retargeting</li>
            <li><strong>Automated Workflows:</strong> Reduced manual asset processing time by 70% through Python automation</li>
            <li><strong>Seamless Cinematics:</strong> Integrated narrative sequences with gameplay using custom camera systems</li>
            <li><strong>Optimized Performance:</strong> Maintained 60+ FPS on target hardware through LOD systems and texture streaming</li>
            <li><strong>Rapid Iteration:</strong> Enabled daily builds and quick content updates for team feedback</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Unreal Engine 4, Maya, Blender, Python, Blueprint Visual Scripting, Perforce, Jenkins</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Technical Artist<br>
        <strong>Team Size:</strong> 4 developers<br>
        <strong>Duration:</strong> 8 months (academic year)<br>
        <strong>Platform:</strong> PC</p>
    </div>

    <h2>Development Challenges</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>⏰ Time Constraints</h3>
                <p class="project-description">Academic deadlines required efficient planning and prioritization. Focused on core features first, then polish.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>👥 Small Team</h3>
                <p class="project-description">Wore multiple hats as technical artist, pipeline engineer, and build master. Created clear documentation for handoffs.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎯 Scope Management</h3>
                <p class="project-description">Balanced ambitious narrative goals with technical constraints. Developed modular systems for flexible content creation.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Tool Development</h3>
                <p class="project-description">Built custom tools for team workflow while learning new technologies. Iterative approach with frequent team feedback.</p>
            </div>
        </div>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Pipeline First:</strong> Investing time early in pipeline development paid dividends throughout production. Automated systems allowed the team to focus on creative work instead of technical bottlenecks.</p>
        
        <p><strong>Communication is Key:</strong> Regular check-ins and clear documentation were essential for team coordination. Technical systems need to be artist-friendly and well-documented.</p>
        
        <p><strong>Iterative Development:</strong> Small, frequent iterations were more effective than large milestone deliveries. This approach allowed for course corrections and improved team morale.</p>
        
        <p><strong>Performance Considerations:</strong> Optimization from the start, not as an afterthought. Building performance considerations into the pipeline saved significant time later.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../sintern/" class="project-link">Next Project: The Sintern →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
