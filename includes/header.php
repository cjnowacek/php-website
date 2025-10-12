<?php
// includes/header.php
include_once 'config.php';

// Get page-specific title if provided
$page_title = isset($page_title) ? $page_title . ' - ' . $site_name : $site_title;

// Better navigation highlighting logic
$current_page = basename($_SERVER['PHP_SELF']);
$current_dir = dirname($_SERVER['REQUEST_URI']);
$full_path = $_SERVER['REQUEST_URI'];

// Determine which nav item should be active
$active_nav = '/index.php'; // default to home

// Only highlight home if we're actually at the root index.php
if ($current_page === 'index.php' && $current_dir === '/') {
    $active_nav = '/index.php';
} elseif ($current_page === 'techart.php' || strpos($full_path, '/pages-techart') !== false) {
    $active_nav = '/techart.php';
} elseif ($current_page === 'devops.php' || strpos($full_path, '/pages-devops') !== false) {
    $active_nav = '/devops.php';
} elseif ($current_page === 'about.php') {
    $active_nav = '/about.php';
} elseif ($current_page === 'contact.php') {
    $active_nav = '/contact.php';
} else {
    // If we're not on any of the main pages, don't highlight home
    $active_nav = null;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/static/css/main.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    <title><?php echo htmlspecialchars($page_title); ?></title>
</head>

<body>
    <div class="title__container">
        <h1><?php echo htmlspecialchars($site_title); ?></h1>
        <nav>
            <?php foreach ($nav_items as $file => $label): ?>
                <a href="<?php echo $file; ?>" 
                   <?php echo ($active_nav === $file) ? 'class="active"' : ''; ?>>
                    <?php echo htmlspecialchars($label); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
