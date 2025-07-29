<?php
// includes/config.php
$site_title = "CJ Nowacek - Technical Artist";
$site_name = "CJ Nowacek";
$current_year = date('Y');

// Navigation items
$nav_items = [
    'index.php' => 'Home',
    'projects.php' => 'Projects',
    'about.php' => 'About', 
    //'contact.php' => 'Contact'
];

// Get current page for active nav highlighting
$current_page = basename($_SERVER['PHP_SELF']);
?>
