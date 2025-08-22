<?php
$page_title = "The Sintern - Technical Art";
include '../../includes/header.php';
?>

<div class="container">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> > 
        <a href="../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> > 
        <span>The Sintern</span>
    </nav>

    <h2>The Sintern</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Junior Film Project | 2023 | Unity Engine</strong></p>
        <p>A stylized horror game featuring innovative visual effects and atmospheric rendering. The Sintern challenged me to create unique supernatural visual experiences while maintaining optimal performance on a limited development timeline.</p>
        
        <p>As the technical artist and developer, I focused on creating custom shaders and particle systems that would bring the supernatural elements to life. The project required balancing visual impact with performance constraints, leading to creative solutions for rendering ghostly apparitions and atmospheric effects.</p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>👻 Ghost/Spirit Rendering</h3>
                <p class="project-description">Developed custom translucency effects with rim lighting and distortion for supernatural character rendering with ethereal appearance.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🌫️ Procedural Atmosphere</h3>
                <p class="project-description">Created dynamic horror atmosphere system with procedural fog, particle effects, and environmental storytelling elements.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>💡 Dynamic Lighting</h3>
                <p class="project-description">Implemented real-time lighting system with flickering effects, shadow manipulation, and atmospheric light scattering.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>✨ Supernatural VFX</h3>
                <p class="project-description">Designed particle-based supernatural effects using Unity's VFX Graph for poltergeist activities and spirit manifestations.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <h3>Ghost Shader (ShaderGraph/HLSL)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>// Custom ghost rendering with translucency and distortion
Shader "Custom/GhostSpirit"
{
    Properties
    {
        _MainTex ("Texture", 2D) = "white" {}
        _Opacity ("Opacity", Range(0,1)) = 0.5
        _RimPower ("Rim Power", Range(0.5,8)) = 3
        _DistortionStrength ("Distortion", Range(0,0.1)) = 0.05
        _FlickerSpeed ("Flicker Speed", Range(0,10)) = 2
    }
    
    SubShader
    {
        Tags {"Queue"="Transparent" "RenderType"="Transparent"}
        Blend SrcAlpha OneMinusSrcAlpha
        ZWrite Off
        
        Pass
        {
            CGPROGRAM
            #pragma vertex vert
            #pragma fragment frag
            
            float4 frag (v2f i) : SV_Target
            {
                // Rim lighting for ethereal glow
                float3 viewDir = normalize(_WorldSpaceCameraPos - i.worldPos);
                float rim = 1.0 - saturate(dot(normalize(i.normal), viewDir));
                rim = pow(rim, _RimPower);
                
                // Time-based flickering
                float flicker = sin(_Time.y * _FlickerSpeed) * 0.5 + 0.5;
                float opacity = _Opacity * rim * flicker;
                
                return float4(i.color.rgb, opacity);
            }
            ENDCG
        }
    }
}</code></pre>
        </div>

        <h3>Atmospheric Horror System (C#)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>public class AtmosphereController : MonoBehaviour
{
    [Header("Horror Atmosphere")]
    public ParticleSystem fogSystem;
    public Light[] flickeringLights;
    public AudioSource ambientAudio;
    
    private float tensionLevel = 0f;
    
    void Update()
    {
        // Procedural tension building
        tensionLevel = CalculateTensionLevel();
        
        // Adjust atmosphere based on tension
        UpdateFogDensity(tensionLevel);
        UpdateLightFlicker(tensionLevel);
        UpdateAmbientAudio(tensionLevel);
    }
    
    private void UpdateFogDensity(float tension)
    {
        var main = fogSystem.main;
        main.startLifetime = Mathf.Lerp(5f, 15f, tension);
        
        var emission = fogSystem.emission;
        emission.rateOverTime = Mathf.Lerp(10f, 50f, tension);
    }
}</code></pre>
        </div>
    </div>

    <h2>Project Results</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <ul>
            <li><strong>Unique Visual Identity:</strong> Created distinctive supernatural aesthetic that enhanced narrative immersion</li>
            <li><strong>Performance Optimized:</strong> Maintained 30+ FPS on low-end hardware through efficient shader design</li>
            <li><strong>Atmospheric Immersion:</strong> Dynamic lighting and particle effects created compelling horror atmosphere</li>
            <li><strong>Modular VFX System:</strong> Reusable effects components enabled rapid content creation for level designers</li>
            <li><strong>Shader Library:</strong> Developed 12+ custom shaders for different supernatural phenomena</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Unity 2022.3, ShaderGraph, VFX Graph, C#, Blender, Photoshop, Git</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Technical Artist & Developer<br>
        <strong>Team Size:</strong> 3 developers<br>
        <strong>Duration:</strong> 6 months<br>
        <strong>Platform:</strong> PC</p>
    </div>

    <h2>Creative Challenges</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>👁️ Visual Clarity</h3>
                <p class="project-description">Balancing atmospheric effects with gameplay visibility. Used selective fog placement and contrast management.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚡ Performance vs Quality</h3>
                <p class="project-description">Heavy particle effects demanded optimization. Implemented LOD systems and dynamic quality scaling.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎨 Art Direction</h3>
                <p class="project-description">Translating horror concepts into technical solutions. Collaborated closely with artists to realize vision.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Tool Integration</h3>
                <p class="project-description">Learning Unity's VFX Graph while in production. Created documentation and workflows for team adoption.</p>
            </div>
        </div>
    </div>

    <h2>Technical Innovation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Layered Transparency System:</strong> Developed a multi-pass rendering approach for overlapping transparent effects. This allowed complex ghost materializations without sorting issues or performance penalties.</p>
        
        <p><strong>Procedural Horror Events:</strong> Created a system that dynamically adjusts visual intensity based on player actions and story progression. The atmosphere responds to player behavior, creating a more immersive horror experience.</p>
        
        <p><strong>Efficient Particle Pooling:</strong> Implemented custom particle pooling system to handle frequent VFX spawning without garbage collection spikes. Critical for maintaining smooth performance during intense supernatural sequences.</p>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Atmosphere Over Complexity:</strong> Simple effects executed well were more effective than complex systems. The key was consistency and thoughtful placement rather than technical complexity.</p>
        
        <p><strong>Performance Testing Early:</strong> Regular testing on target hardware revealed bottlenecks early. What looked great in the editor didn't always perform well on lower-end systems.</p>
        
        <p><strong>Collaborative Iteration:</strong> Close collaboration with level designers and artists led to better integration of effects with gameplay. Technical solutions needed to serve the narrative.</p>
        
        <p><strong>Documentation Matters:</strong> Creating clear documentation for custom shaders and effects helped team members understand and modify systems when needed.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../smite/" class="project-link">Next Project: Smite →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
