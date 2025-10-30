<?php
// includes/projects/build_pipeline.php
return [
    'id' => 'build_pipeline',
    'title' => 'Automated Build Pipeline',
    'company' => 'Enterprise DevOps',
    'category' => 'devops',
    'featured' => true,
    'order' => 1,
    'image' => 'static/img/devops-pipeline.png',
    'gif' => null, // No GIF for this one
    'description' => 'Designed and implemented a comprehensive CI/CD pipeline that reduced game build times by 60% and eliminated manual deployment errors. Features automated testing, multi-platform builds, and zero-downtime deployments.',
    'highlights' => [
        'Reduced build times from 45 minutes to 18 minutes',
        'Implemented automated testing catching 95% of issues',
        'Zero-downtime deployments with automatic rollback',
        'Multi-platform builds from single pipeline'
    ],
    'tech_tags' => ['Jenkins', 'Docker', 'Kubernetes', 'AWS', 'Python'],
    'link' => 'pages-devops/build-pipeline/',
    'meta' => [
        'duration' => '8 months',
        'role' => 'DevOps Engineer',
        'platforms' => 'PC, Console, Mobile',
        'team_size' => '25+ developers'
    ]
];
?>
