<?php
$page_title = "DevOps";
include '../includes/header.php';
?>

<div class="container">
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
        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/devops-pipeline.png" alt="Game Build Pipeline" />
            </div>
            <div class="project-info-card">
                <h3>Automated Game Build Pipeline</h3>
                <p class="project-company">Scalable CI/CD Infrastructure</p>
                <p class="project-description-card">Designed and implemented a comprehensive build pipeline that reduced game build times by 60% and eliminated manual deployment errors. The system automatically handles asset processing, code compilation, testing, and multi-platform deployment.</p>
                <div class="project-highlights">
                    <strong>Key Achievements:</strong>
                    <ul>
                        <li>Reduced build times from 45 minutes to 18 minutes through parallel processing</li>
                        <li>Implemented automated testing that catches 95% of integration issues</li>
                        <li>Zero-downtime deployments with automatic rollback capabilities</li>
                        <li>Multi-platform builds (PC, Console, Mobile) from single pipeline</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Jenkins</span>
                    <span class="tech-tag">Docker</span>
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">AWS</span>
                    <span class="tech-tag">Kubernetes</span>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/asset-automation.png" alt="Asset Processing Automation" />
            </div>
            <div class="project-info-card">
                <h3>Asset Processing Automation</h3>
                <p class="project-company">Technical Art Pipeline</p>
                <p class="project-description-card">Created an intelligent asset processing system that automatically optimizes textures, meshes, and animations based on target platform requirements. The system integrates with version control to process only changed assets.</p>
                <div class="project-highlights">
                    <strong>Key Features:</strong>
                    <ul>
                        <li>Automatic texture compression and format conversion</li>
                        <li>Mesh optimization and LOD generation</li>
                        <li>Batch processing with progress tracking</li>
                        <li>Quality validation and error reporting</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Python</span>
                    <span class="tech-tag">Blender API</span>
                    <span class="tech-tag">ImageMagick</span>
                    <span class="tech-tag">Git Hooks</span>
                    <span class="tech-tag">MongoDB</span>
                </div>
            </div>
        </div>

        <div class="project-card">
            <div class="project-media">
                <img src="../static/img/monitoring-dashboard.png" alt="Infrastructure Monitoring" />
            </div>
            <div class="project-info-card">
                <h3>Infrastructure Monitoring & Analytics</h3>
                <p class="project-company">Performance Optimization</p>
                <p class="project-description-card">Developed a comprehensive monitoring solution that tracks build performance, resource usage, and team productivity metrics. Provides real-time alerts and predictive analysis for infrastructure optimization.</p>
                <div class="project-highlights">
                    <strong>Monitoring Capabilities:</strong>
                    <ul>
                        <li>Real-time build performance tracking</li>
                        <li>Resource utilization and cost optimization</li>
                        <li>Team productivity and bottleneck analysis</li>
                        <li>Predictive scaling and maintenance alerts</li>
                    </ul>
                </div>
                <div class="tech-tags">
                    <span class="tech-tag">Grafana</span>
                    <span class="tech-tag">Prometheus</span>
                    <span class="tech-tag">ELK Stack</span>
                    <span class="tech-tag">Node.js</span>
                    <span class="tech-tag">Redis</span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>
