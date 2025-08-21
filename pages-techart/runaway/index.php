<?php
$page_title = "Smite - Technical Art";
include '../../includes/header.php';
?>

<div class="container">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> > 
        <a href="../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> > 
        <span>Smite</span>
    </nav>

    <h2>Smite</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Hi-Rez Studios | 2024-2025 | Unreal Engine 5</strong></p>
        <p>Led technical art development for the highly anticipated sequel to Hi-Rez Studios' popular MOBA game. This project focused on modernizing the visual pipeline while maintaining the distinctive art style that Smite is known for.</p>
        
        <p>Working closely with the art team, I developed advanced shader systems, optimized rendering pipelines, and created automated tools that significantly streamlined the art production workflow. The goal was to enhance visual fidelity while ensuring optimal performance across multiple platforms.</p>
    </div>

    <h2>Key Achievements</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Custom Shader Library</h3>
                <p class="project-description">Developed comprehensive shader library featuring advanced character rendering, dynamic weather effects, and optimized environment shaders with PBR workflows.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚙️ Automated LOD Generation</h3>
                <p class="project-description">Created intelligent LOD generation tools that automatically optimize meshes based on usage context, reducing artist workload by 40%.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚡ Performance Optimization</h3>
                <p class="project-description">Optimized rendering pipeline through custom culling systems and shader analysis, achieving 25% performance improvement.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>💡 Real-time Lighting</h3>
                <p class="project-description">Implemented dynamic lighting system supporting real-time global illumination and advanced shadow techniques.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <h3>Custom Character Shader (HLSL)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>// Enhanced PBR shader with custom rim lighting
float3 CalculateCustomLighting(float3 normal, float3 viewDir, float3 lightDir)
{
    float NdotL = saturate(dot(normal, lightDir));
    float NdotV = saturate(dot(normal, viewDir));
    
    // Custom rim lighting for character silhouettes
    float rimPower = 2.0;
    float rim = 1.0 - NdotV;
    rim = pow(rim, rimPower);
    
    float3 rimColor = _RimColor.rgb * rim * _RimIntensity;
    
    return NdotL + rimColor;
}</code></pre>
        </div>

        <h3>Python LOD Generation Tool</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code># Automated LOD generation with quality preservation
def generate_lod_chain(mesh_path, lod_levels=[0.75, 0.5, 0.25]):
    """Generate LOD chain with intelligent vertex reduction"""
    
    for i, reduction in enumerate(lod_levels):
        lod_mesh = optimize_mesh(mesh_path, reduction)
        validate_silhouette(lod_mesh, original_mesh)
        
        output_path = f"{mesh_path}_LOD{i+1}.fbx"
        export_mesh(lod_mesh, output_path)
        
        print(f"Generated LOD{i+1}: {reduction*100}% detail retained")</code></pre>
        </div>
    </div>

    <h2>Project Results</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <ul>
            <li><strong>50+ Custom Shaders:</strong> Created comprehensive shader library for all game assets</li>
            <li><strong>40% Time Savings:</strong> Automated LOD generation reduced artist workload significantly</li>
            <li><strong>25% Performance Boost:</strong> Optimized rendering pipeline improved frame rates across platforms</li>
            <li><strong>Cross-Platform Support:</strong> Ensured consistent visual quality on PC, Console, and Mobile</li>
            <li><strong>Real-time Global Illumination:</strong> Enhanced visual fidelity with dynamic lighting</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Unreal Engine 5, HLSL, Python, Maya, Substance Suite, Perforce, Houdini, Jenkins</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Senior Technical Artist<br>
        <strong>Team Size:</strong> 25+ developers<br>
        <strong>Duration:</strong> 18 months<br>
        <strong>Platforms:</strong> PC, Console, Mobile</p>
    </div>

    <h2>Development Process</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>1. Research & Analysis:</strong> Analyzed existing Smite pipeline, identified bottlenecks, and researched modern rendering techniques. Collaborated with art team to understand workflow pain points.</p>
        
        <p><strong>2. Prototype Development:</strong> Created proof-of-concept shaders and tools. Tested performance across target platforms and gathered feedback from artists and engineers.</p>
        
        <p><strong>3. Pipeline Implementation:</strong> Rolled out new systems incrementally, provided training to art team, and iteratively improved tools based on production feedback.</p>
        
        <p><strong>4. Optimization & Polish:</strong> Fine-tuned performance, created documentation, and established best practices for ongoing development. Prepared systems for live service deployment.</p>
    </div>

    <h2>Lessons Learned</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🔄 Iterative Development</h3>
                <p class="project-description">Regular feedback from artists during development was crucial. Small, frequent updates were more effective than large releases.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📊 Performance Metrics</h3>
                <p class="project-description">Establishing clear performance benchmarks early helped guide optimization decisions throughout development.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎯 Cross-Platform Design</h3>
                <p class="project-description">Designing shaders with multiple platforms in mind from the start saved significant refactoring time later.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📚 Documentation</h3>
                <p class="project-description">Comprehensive tool documentation and video tutorials dramatically reduced support requests and improved adoption.</p>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../sintern/" class="project-link">Next Project: The Sintern →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
