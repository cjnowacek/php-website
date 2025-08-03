<?php
$page_title = "Automated Game Build Pipeline - DevOps";
$meta_description = "Scalable CI/CD infrastructure for game development - Automated build pipeline reducing build times by 60% with zero-downtime deployments.";
include '../../includes/header.php';
?>

<div class="container">
    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb">
        <a href="../../index.php">Home</a> > 
        <a href="../../devops.php">DevOps</a> > 
        <span>Build Pipeline</span>
    </div>

    <!-- Hero Section -->
    <div class="project-hero">
        <div class="hero-media">
            <img src="images/pipeline-hero.jpg" alt="CI/CD Pipeline Dashboard" class="hero-image">
            <div class="hero-overlay">
                <h1>Automated Game Build Pipeline</h1>
                <p class="hero-subtitle">Scalable CI/CD Infrastructure for Game Development</p>
                <div class="hero-tags">
                    <span class="hero-tag">Enterprise</span>
                    <span class="hero-tag">2023-2024</span>
                    <span class="hero-tag">Jenkins & Docker</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Problem Statement -->
    <div class="project-section">
        <h2>The Challenge</h2>
        <div class="problem-statement">
            <div class="problem-content">
                <p>The game development team was struggling with a legacy build system that took 45+ minutes per build, frequent deployment failures, and manual processes that were prone to human error. With multiple platform targets and a growing team, the inefficiencies were becoming a major bottleneck.</p>
                
                <div class="problem-metrics">
                    <div class="problem-metric">
                        <span class="metric-value">45+ min</span>
                        <span class="metric-label">Build Time</span>
                    </div>
                    <div class="problem-metric">
                        <span class="metric-value">30%</span>
                        <span class="metric-label">Failure Rate</span>
                    </div>
                    <div class="problem-metric">
                        <span class="metric-value">Manual</span>
                        <span class="metric-label">Deployment</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Solution Overview -->
    <div class="project-section">
        <h2>Solution Architecture</h2>
        <div class="two-column-layout">
            <div class="content-column">
                <p>Designed and implemented a comprehensive CI/CD pipeline that automated the entire build, test, and deployment process. The solution leveraged containerization, parallel processing, and intelligent caching to dramatically reduce build times while improving reliability.</p>
                
                <h3>Key Components</h3>
                <ul>
                    <li><strong>Jenkins Pipeline:</strong> Orchestrated multi-stage builds with parallel execution</li>
                    <li><strong>Docker Containers:</strong> Ensured consistent build environments</li>
                    <li><strong>Kubernetes Orchestration:</strong> Managed scalable build agents</li>
                    <li><strong>Artifact Management:</strong> Automated asset processing and versioning</li>
                    <li><strong>Automated Testing:</strong> Unit, integration, and performance tests</li>
                </ul>

                <h3>Results Achieved</h3>
                <div class="results-grid">
                    <div class="result-item">
                        <span class="result-value">60%</span>
                        <span class="result-label">Faster Builds</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">95%</span>
                        <span class="result-label">Success Rate</span>
                    </div>
                    <div class="result-item">
                        <span class="result-value">Zero</span>
                        <span class="result-label">Downtime</span>
                    </div>
                </div>
            </div>
            <div class="info-sidebar">
                <div class="project-info-box">
                    <h3>Project Details</h3>
                    <div class="info-item">
                        <strong>Role:</strong> DevOps Engineer
                    </div>
                    <div class="info-item">
                        <strong>Industry:</strong> Game Development
                    </div>
                    <div class="info-item">
                        <strong>Duration:</strong> 8 months
                    </div>
                    <div class="info-item">
                        <strong>Team Impact:</strong> 25+ developers
                    </div>
                    <div class="info-item">
                        <strong>Platforms:</strong> PC, Console, Mobile
                    </div>
                </div>
                
                <div class="tech-stack-box">
                    <h3>Technology Stack</h3>
                    <div class="tech-grid">
                        <span class="tech-item">Jenkins</span>
                        <span class="tech-item">Docker</span>
                        <span class="tech-item">Kubernetes</span>
                        <span class="tech-item">Python</span>
                        <span class="tech-item">AWS</span>
                        <span class="tech-item">Terraform</span>
                        <span class="tech-item">Grafana</span>
                        <span class="tech-item">Git</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Architecture Diagram -->
    <div class="project-section">
        <h2>Pipeline Architecture</h2>
        <div class="architecture-diagram">
            <div class="arch-stage">
                <div class="stage-header">Source Control</div>
                <div class="stage-content">
                    <div class="arch-component">Git Repository</div>
                    <div class="arch-component">Branch Protection</div>
                    <div class="arch-component">Webhook Triggers</div>
                </div>
            </div>
            <div class="arch-arrow">→</div>
            <div class="arch-stage">
                <div class="stage-header">Build Stage</div>
                <div class="stage-content">
                    <div class="arch-component">Parallel Builds</div>
                    <div class="arch-component">Asset Processing</div>
                    <div class="arch-component">Code Compilation</div>
                </div>
            </div>
            <div class="arch-arrow">→</div>
            <div class="arch-stage">
                <div class="stage-header">Testing</div>
                <div class="stage-content">
                    <div class="arch-component">Unit Tests</div>
                    <div class="arch-component">Integration Tests</div>
                    <div class="arch-component">Performance Tests</div>
                </div>
            </div>
            <div class="arch-arrow">→</div>
            <div class="arch-stage">
                <div class="stage-header">Deployment</div>
                <div class="stage-content">
                    <div class="arch-component">Staging Deploy</div>
                    <div class="arch-component">Production Deploy</div>
                    <div class="arch-component">Rollback Ready</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Implementation Details -->
    <div class="project-section">
        <h2>Technical Implementation</h2>
        
        <div class="implementation-tabs">
            <div class="tab-content">
                <h3>Jenkins Pipeline Configuration</h3>
                <div class="code-example">
                    <pre><code>pipeline {
    agent none
    
    stages {
        stage('Parallel Build') {
            parallel {
                stage('Windows Build') {
                    agent { label 'windows-build' }
                    steps {
                        script { buildGame('windows') }
                    }
                }
                stage('Console Build') {
                    agent { label 'console-build' }
                    steps {
                        script { buildGame('console') }
                    }
                }
                stage('Mobile Build') {
                    agent { label 'mobile-build' }
                    steps {
                        script { buildGame('mobile') }
                    }
                }
            }
        }
        
        stage('Testing') {
            parallel {
                stage('Unit Tests') {
                    steps { runTests('unit') }
                }
                stage('Integration Tests') {
                    steps { runTests('integration') }
                }
            }
        }
    }
}
                    </code></pre>
                </div>
            </div>

            <div class="tab-content">
                <h3>Docker Build Environment</h3>
                <div class="code-example">
                    <pre><code># Multi-stage build for game compilation
FROM ubuntu:20.04 as build-base
RUN apt-get update && apt-get install -y \
    build-essential \
    cmake \
    python3 \
    python3-pip

FROM build-base as game-builder
COPY requirements.txt .
RUN pip3 install -r requirements.txt

WORKDIR /app
COPY . .
RUN cmake --build . --config Release

FROM build-base as final
COPY --from=game-builder /app/build/release ./
ENTRYPOINT ["./game-executable"]
                    </code></pre>
                </div>
            </div>

            <div class="tab-content">
                <h3>Asset Processing Automation</h3>
                <div class="code-example">
                    <pre><code>#!/usr/bin/env python3
"""Automated asset processing pipeline"""

import asyncio
from pathlib import Path
from typing import List

class AssetProcessor:
    def __init__(self, source_dir: Path, output_dir: Path):
