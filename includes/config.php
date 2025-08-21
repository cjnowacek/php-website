<?php
// includes/config.php
$site_title = "CJ Nowacek";
$site_name = "CJ Nowacek";
$current_year = date('Y');

// Navigation items
$nav_items = [
    '/index.php' => 'Home',
    '/pages-techart.php' => 'Techart',  // Update this
    '/pages-devops.php' => 'Devops',    // Update this
    '/about.php' => 'About', 
    '/contact.php' => 'Contact'
];

// Get current page for active nav highlighting
$current_page = basename($_SERVER['PHP_SELF']);
$current_path = '/' . $current_page; // Add leading slash to match nav_items

// Site metadata for SEO
$site_description = "CJ Nowacek - Technical Artist and DevOps Engineer specializing in game development, shader programming, pipeline automation, and infrastructure optimization.";
$site_keywords = "technical artist, devops engineer, game development, shader programming, pipeline automation, unreal engine, unity, python automation, ci/cd";
$site_author = "CJ Nowacek";
$site_url = "https://cjnowacek.com"; // Update with your actual domain

// Social media links
$social_links = [
    'linkedin' => 'https://linkedin.com/in/cj-nowacek',
    'github' => 'https://github.com/cjnowacek',
    'vimeo' => 'https://vimeo.com/1016947852',
    'email' => 'mailto:cjnowacek@protonmail.com'
];
?>
