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
        <p><strong>Hi-Rez Studios | 2023-2024 | Unreal Engine 5 & 3DS Max</strong></p>
        <p>Technical artist for Hi-Rez Studios' popular MOBA game, focusing on character rigging pipeline optimization and tool development. Working on a live-service game with millions of players required robust, scalable solutions that could handle frequent content updates while maintaining high quality standards.</p>
        
        <p>My primary focus was streamlining the character production workflow, particularly the transition from the original Smite to its sequel. This involved creating automated tools for rig building, optimizing character port processes, and ensuring consistency across a large library of character assets.</p>
    </div>

    <h2>Key Contributions</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>🔧 Automatic Rig Tools</h3>
                <p class="project-description">Created automated build tools for modular rig components, reducing manual setup time and ensuring consistency across character assets.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>⚡ Character Port Optimization</h3>
                <p class="project-description">Reduced character port time from Smite to its sequel by 25% through automated conversion scripts and standardized workflows.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>📝 Pipeline Documentation</h3>
                <p class="project-description">Developed comprehensive documentation and training materials for character production pipeline, reducing onboarding time for new team members.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎮 Live-Service Support</h3>
                <p class="project-description">Maintained and updated existing character assets while supporting ongoing content releases and seasonal updates.</p>
            </div>
        </div>
    </div>

    <h2>Technical Implementation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <h3>Automated Rig Building (MaxScript)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 0;"><code>-- Automated character rig module builder
fn buildCharacterRig characterMesh = (
    -- Clear selection and validate input
    clearSelection()
    if characterMesh == undefined then (
        messageBox "Please select a character mesh"
        return false
    )
    
    -- Create bone hierarchy
    spineChain = createSpineChain characterMesh
    armChains = createArmChains characterMesh
    legChains = createLegChains characterMesh
    
    -- Setup control systems
    createSpineControls spineChain
    createIKFKSwitches armChains
    createIKFKSwitches legChains
    
    -- Apply skin modifier with automatic weights
    applySkinModifier characterMesh (spineChain + armChains + legChains)
    
    -- Finalize rig
    createRigInterface characterMesh
    return true
)</code></pre>
        </div>

        <h3>Character Port Automation (Python)</h3>
        <div style="background: var(--form-bg); padding: 20px; border-radius: 8px; margin: 20px 0;">
            <pre style="color: var(--text-secondary); font-family: 'Courier New', monospace; font-size: 14px; line-height: 1.6; margin: 20px 0;"><code>#!/usr/bin/env python3
"""Character porting automation for Smite sequel"""

import os
import json
from pathlib import Path

class CharacterPorter:
    def __init__(self, source_path, target_path):
        self.source_path = Path(source_path)
        self.target_path = Path(target_path)
        self.conversion_log = []
    
    def port_character(self, character_name):
        """Port character from original Smite to sequel"""
        print(f"Starting port for {character_name}...")
        
        # Load character data
        char_data = self.load_character_data(character_name)
        
        # Convert mesh and textures
        self.convert_mesh_assets(char_data)
        self.convert_texture_assets(char_data)
        
        # Update rig for new skeleton
        self.update_rig_hierarchy(char_data)
        
        # Generate optimized LODs
        self.generate_lod_chain(char_data)
        
        # Validate and export
        if self.validate_character(char_data):
            self.export_character(char_data)
            print(f"Successfully ported {character_name}")
            return True
        
        return False</code></pre>
        </div>
    </div>

    <h2>Project Impact</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <ul>
            <li><strong>25% Faster Character Ports:</strong> Automated conversion reduced manual work from days to hours</li>
            <li><strong>200+ Characters Supported:</strong> Tools scaled to handle the entire Smite character roster</li>
            <li><strong>Consistent Quality:</strong> Standardized pipeline ensured uniform quality across all character assets</li>
            <li><strong>Team Productivity:</strong> Freed up artist time for creative work instead of technical setup</li>
            <li><strong>Live Service Support:</strong> Enabled rapid deployment of character updates and new content</li>
        </ul>

        <h3>Technology Stack</h3>
        <p><strong>Tools & Technologies:</strong> Unreal Engine 5, 3DS Max, MaxScript, Python, Perforce, Jenkins</p>
        
        <h3>Team & Duration</h3>
        <p><strong>Role:</strong> Technical Artist<br>
        <strong>Team Size:</strong> 200+ developers<br>
        <strong>Duration:</strong> 18 months<br>
        <strong>Platforms:</strong> PC, Console</p>
    </div>

    <h2>Production Challenges</h2>
    <div class="grid competencies-grid">
        <div class="grid-item">
            <div class="project-info">
                <h3>📈 Scale Management</h3>
                <p class="project-description">Managing tools for 100+ characters required robust error handling and batch processing capabilities.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🔄 Live Service Constraints</h3>
                <p class="project-description">Tools needed to work with existing content while supporting ongoing development and player-facing updates.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>👥 Team Coordination</h3>
                <p class="project-description">Large team required clear communication and documentation. Created training materials and workflow guides.</p>
            </div>
        </div>

        <div class="grid-item">
            <div class="project-info">
                <h3>🎯 Quality Assurance</h3>
                <p class="project-description">Automated validation systems ensured exported characters met quality standards before integration.</p>
            </div>
        </div>
    </div>

    <h2>Technical Innovation</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Modular Rig System:</strong> Developed a component-based rigging approach that allowed for flexible character variations while maintaining consistency. Rigs could be assembled from pre-built modules for different character types.</p>
        
        <p><strong>Batch Processing Pipeline:</strong> Created tools that could process multiple characters simultaneously, with progress tracking and error reporting. Essential for handling the large character roster efficiently.</p>
        
        <p><strong>Version Control Integration:</strong> Built Perforce integration directly into tools, allowing automatic check-in/check-out of processed assets with detailed change logs.</p>
        
        <p><strong>Quality Metrics Dashboard:</strong> Implemented automated quality checking with visual dashboards showing rig health, performance metrics, and compliance with studio standards.</p>
    </div>

    <h2>Lessons Learned</h2>
    <div class="about-text" style="max-width: 800px; margin: 0 auto 40px auto; text-align: left;">
        <p><strong>Automation Saves Time and Reduces Errors:</strong> Investing in robust automation tools paid dividends across the large character roster. Manual processes that seemed quick for one character became bottlenecks at scale.</p>
        
        <p><strong>Documentation is Critical:</strong> In a large team environment, clear documentation and training materials were essential for tool adoption and maintenance.</p>
        
        <p><strong>Error Handling Matters:</strong> Production tools need robust error handling and recovery systems. What works in testing may fail unexpectedly with real content.</p>
        
        <p><strong>Iterative Improvement:</strong> Tools evolved based on team feedback and production needs. Regular updates and improvements were necessary to maintain efficiency.</p>
    </div>

    <!-- Navigation -->
    <div style="display: flex; justify-content: space-between; margin: 60px 0 40px 0; gap: 20px;">
        <a href="../../techart.php" class="project-link" style="background: var(--form-bg); color: var(--text-color);">← Back to Technical Art</a>
        <a href="../runaway/" class="project-link">Next Project: Runaway →</a>
    </div>
</div>

<?php include '../../includes/footer.php'; ?>
