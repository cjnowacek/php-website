<?php
$page_title = "Page Not Found";
include 'includes/header.php';
http_response_code(404);
?>

<div class="container" style="max-width: 1300px;">
    <div class="about-content" style="text-align: center; max-width: 600px; margin: 0 auto;">
        <h2 style="font-size: 4em; margin-bottom: 20px;">404</h2>
        <h3>Page Not Found</h3>
        <div class="about-text">
            <p>Sorry, the page you're looking for doesn't exist. It might have been moved, deleted, or you entered the wrong URL.</p>
            <p>Here are some helpful links to get you back on track:</p>
        </div>
        
        <div style="margin: 40px 0;">
            <a href="index.php" class="project-link" style="margin: 10px;">← Back to Home</a>
            <a href="techart.php" class="project-link" style="margin: 10px;">Technical Art</a>
            <a href="devops.php" class="project-link" style="margin: 10px;">DevOps</a>
            <a href="about.php" class="project-link" style="margin: 10px;">About Me</a>
        </div>
        
        <div class="about-text">
            <p>If you believe this is an error, please check the URL or contact me through the about page.</p>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
