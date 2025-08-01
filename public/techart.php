<?php
$page_title = "Home"; // Optional: sets custom page title
include '../includes/header.php';  // Go up one level to find includes
?>

<div class="container">
    <?php include '../includes/demo_reel.php'; ?>

    <h2>Featured Projects</h2>

    <div class="grid">
        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/smite2_1200x900.png" alt="Smite 2">
                <img class="hover-gif" src="../static/img/y7A08Y.gif" alt="Smite 2 GIF">
            </div>
            <a href="projects.php#smite" style="text-decoration:none">
                <h1 class="name">Smite 2</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/TheSintern1200x900.png" alt="The Sintern">
                <img class="hover-gif" src="../static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
            </div>
            <a href="projects.php#sintern" style="text-decoration:none">
                <h1 class="name">The Sintern</h1>
            </a>
        </div>

        <div class="grid-item">
            <div class="grid-media">
                <img src="../static/img/runaway_1200x900.png" alt="Runaway">
                <img class="hover-gif" src="../static/img/runaway_1200x900.gif" alt="Runaway GIF">
            </div>
            <a href="projects.php#runaway" style="text-decoration:none">
                <h1 class="name">Runaway</h1>
            </a>
        </div>
    </div>
</div>

<script>
    document.querySelectorAll('.grid-item').forEach(item => {
        item.addEventListener('mouseenter', () => {
            const gif = item.querySelector('.hover-gif');
            if (gif && gif.src) {
                gif.src = gif.src; // Reset the GIF to play from the beginning
            }
        });
    });
</script>

<?php include '../includes/footer.php'; ?>
