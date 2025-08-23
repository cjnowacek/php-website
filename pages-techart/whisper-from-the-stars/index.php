<?php
$page_title = "Whisper from the Stars - Technical Art";
include '../../includes/header.php';
?>

<div class="container">
    <!-- Breadcrumb Navigation -->
    <nav style="margin: 20px 0; color: var(--text-secondary); font-size: 14px;">
        <a href="../../index.php" style="color: var(--header-color); text-decoration: none;">Home</a> > 
        <a href="../../techart.php" style="color: var(--header-color); text-decoration: none;">Technical Art</a> > 
        <span>Whisper from the Stars</span>
    </nav>

    <h2>Whisper from the Stars</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Indie Game Studio | 2024 | Python & Maya</strong></p>
        <p>Technical artist for an ambitious indie space exploration game, focusing on automation pipeline development and CLI-based workflows. In just one month, I developed comprehensive scripts and automation tools that integrated seamlessly into the studio's CI/CD pipeline.</p>
        
        <p>The project required rapid development of robust, command-line driven tools that could handle rigging, animation export, and asset processing without manual intervention. This work enabled the small team to maintain consistent quality while scaling their content production efficiently.</p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🖥️ CLI-Based Rigging Tools</h3>
                <p class="project-description">Developed command-line rigging automation scripts that could generate fully functional character rigs without manual intervention.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔄 CI/CD Integration</h3>
                <p class="project-description">Integrated asset processing pipeline into continuous integration workflow, enabling automated builds and deployments.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎬 Animation Export Systems</h3>
                <p class="project-description">Created automated animation export tools that processed multiple characters and animations in batch operations.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚙️ Batch Processing Tools</h3>
                <p class="project-description">Built comprehensive command-line utilities for asset optimization, texture processing, and quality validation.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <h3>CLI Rigging Automation (Python)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>#!/usr/bin/env python3
"""Command-line rigging automation for Whisper from the Stars"""

import argparse
import maya.standalone
import maya.cmds as cmds

class CharacterRigger:
    def __init__(self, character_file, output_dir):
        self.character_file = character_file
        self.output_dir = output_dir
        
    def create_rig_from_cli(self):
        """Generate complete character rig from command line"""
        maya.standalone.initialize()
        
        # Load character mesh
        cmds.file(self.character_file, i=True)
        
        # Auto-detect rig requirements
        rig_config = self.analyze_character_geometry()
        
        # Generate bone hierarchy
        joints = self.create_joint_hierarchy(rig_config)
        
        # Setup IK/FK controls
        controls = self.setup_control_systems(joints)
        
        # Apply skinning
        self.auto_skin_character(joints)
        
        # Export rigged character
        output_file = f"{self.output_dir}/{rig_config['name']}_rigged.mb"
        cmds.file(output_file, save=True, type='mayaBinary')
        
        print(f"✓ Rig completed: {output_file}")
        
if __name__ == "__main__":
    parser = argparse.ArgumentParser()
    parser.add_argument("--input", required=True, help="Character mesh file")
    parser.add_argument("--output", required=True, help="Output directory")
    args = parser.parse_args()
    
    rigger = CharacterRigger(args.input, args.output)
    rigger.create_rig_from_cli()</code></pre>
        </div>

        <h3>CI/CD Pipeline Integration (YAML)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code># CI/CD Pipeline for Asset Processing
name: Character Asset Pipeline

on:
  push:
    paths:
      - 'assets/characters/**'

jobs:
  process-characters:
    runs-on: ubuntu-latest
    steps:
      - uses: actions/checkout@v3
      
      - name: Setup Maya Environment
        run: |
          docker pull maya-headless:latest
          
      - name: Process Character Rigs
        run: |
          for file in assets/characters/*.fbx; do
            python3 scripts/auto_rigger.py \
              --input "$file" \
              --output "build/rigged/" \
              --headless
          done
          
      - name: Export Animations
        run: |
          python3 scripts/batch_animation_export.py \
            --rig-dir "build/rigged/" \
            --anim-dir "assets/animations/" \
            --output "build/game-ready/"
            
      - name: Validate Assets
        run: |
          python3 scripts/asset_validator.py \
            --check-topology \
            --check-weights \
            --check-naming</code></pre>
        </div>
    </div>

    <h2>Project Results</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <ul>
            <li><strong>80% Time Reduction:</strong> Automated rigging process reduced manual work from hours to minutes</li>
            <li><strong>CLI-Driven Workflow:</strong> All tools accessible via command line for seamless CI/CD integration</li>
            <li><strong>Batch Processing:</strong> Processed 20+ characters and 100+ animations automatically</li>
            <li><strong>Quality Consistency:</strong> Automated validation ensured uniform asset quality across all content</li>
            <li><strong>Rapid Deployment:</strong> Enabled daily content updates through automated pipeline</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Python, Maya Python API, CLI Tools, Docker, GitHub Actions, Shell Scripting</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Technical Artist<br>
        <strong>Team Size:</strong> 8 developers<br>
        <strong>Duration:</strong> 1 month<br>
        <strong>Platform:</strong> PC</p>
    </div>

    <h2>Automation Challenges</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>⏱️ Rapid Timeline</h3>
                <p class="project-description">One-month deadline required efficient tool design and rapid iteration based on team feedback.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Headless Operation</h3>
                <p class="project-description">All tools needed to run without GUI for CI/CD integration, requiring robust error handling and logging.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📊 Quality Validation</h3>
                <p class="project-description">Automated systems needed comprehensive validation to catch issues without manual review.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎯 Cross-Platform Support</h3>
                <p class="project-description">Tools needed to work across Windows, Linux, and macOS environments in the CI pipeline.</p>
            </div>
        </div>
    </div>

    <h2>Technical Innovation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Intelligent Rig Detection:</strong> Developed algorithms that could analyze character geometry and automatically determine appropriate rig structure without manual configuration.</p>
        
        <p><strong>Headless Maya Pipeline:</strong> Created a robust system for running Maya operations in headless mode with comprehensive error handling and progress reporting.</p>
        
        <p><strong>Modular Tool Architecture:</strong> Built tools as composable CLI utilities that could be chained together for complex workflows while remaining simple to use individually.</p>
        
        <p><strong>Real-time Validation:</strong> Implemented automated quality checks that provided immediate feedback during the CI/CD process, preventing broken assets from reaching production.</p>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>CLI-First Design:</strong> Building tools with command-line interfaces from the start made CI/CD integration seamless and enabled powerful automation workflows.</p>
        
        <p><strong>Robust Error Handling:</strong> Headless operations require extensive error handling and logging since there's no user interface to provide feedback when things go wrong.</p>
        
        <p><strong>Incremental Automation:</strong> Starting with the most time-consuming manual tasks and automating them first provided immediate value while building toward full automation.</p>
        
        <p><strong>Documentation is Critical:</strong> CLI tools require excellent documentation and examples since there's no GUI to guide users through the process.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../smite/" class="project-link">Next Project: Smite →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
