<?php
// includes/header.php
include_once 'config.php';

// Get page-specific title if provided
$page_title = isset($page_title) ? $page_title . ' - ' . $site_name : $site_title;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../static/css/style.css" />
    <title><?php echo htmlspecialchars($page_title); ?></title>
</head>

<body>
    <div class="title__container">
        <h1><?php echo htmlspecialchars($site_title); ?></h1>
        <nav>
            <?php foreach ($nav_items as $file => $label): ?>
                <a href="<?php echo $file; ?>" 
                   <?php echo ($current_page === $file) ? 'class="active"' : ''; ?>>
                    <?php echo htmlspecialchars($label); ?>
                </a>
            <?php endforeach; ?>
        </nav>
    </div>
