<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="static/css/style.css" />
    <title>Projects - CJ Nowacek</title>
</head>

<body>
    <div class="title__container">
        <h1>CJ Nowacek - Technical Artist</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About</a>
            <a href="projects.php">Projects</a>
            <a href="contact.php">Contact</a>
        </nav>
    </div>

    <div class="container">
        <div class="demo-reel">
            <h3>Demo Reel</h3>
            <div class="video-container">
                <iframe title="vimeo-player" src="https://player.vimeo.com/video/711045781?h=582a1ac828" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <h2>Projects</h2>
        
        <div class="project-categories">
            <div class="category-nav">
                <button class="category-btn active" onclick="showCategory('all')">All</button>
                <button class="category-btn" onclick="showCategory('games')">Games</button>
                <button class="category-btn" onclick="showCategory('tools')">Tools</button>
                <button class="category-btn" onclick="showCategory('devlog')">Dev Log</button>
                <button class="category-btn" onclick="showCategory('other')">Other</button>
            </div>
        </div>

        <div class="grid">
            <div class="grid-item" data-category="games" id="smite">
                <div class="grid-media">
                    <img src="static/img/smite2_1200x900.png" alt="Smite 2">
                    <img class="hover-gif" src="static/img/y7A08Y.gif" alt="Smite 2 GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">Smite 2</h3>
                    <p class="project-description">Technical art work on the highly anticipated sequel to the popular MOBA game.</p>
                    <span class="project-tag">Game Development</span>
                </div>
            </div>

            <div class="grid-item" data-category="games" id="sintern">
                <div class="grid-media">
                    <img src="static/img/TheSintern1200x900.png" alt="The Sintern">
                    <img class="hover-gif" src="static/img/TheSintern1200x900.gif" alt="The Sintern GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">The Sintern</h3>
                    <p class="project-description">Independent game project featuring custom shaders and technical art solutions.</p>
                    <span class="project-tag">Indie Game</span>
                </div>
            </div>

            <div class="grid-item" data-category="games" id="runaway">
                <div class="grid-media">
                    <img src="static/img/runaway_1200x900.png" alt="Runaway">
                    <img class="hover-gif" src="static/img/runaway_1200x900.gif" alt="Runaway GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">Runaway</h3>
                    <p class="project-description">Action game with focus on visual effects and performance optimization.</p>
                    <span class="project-tag">Game Development</span>
                </div>
            </div>

            <div class="grid-item" data-category="tools">
                <div class="grid-media">
                    <img src="static/img/shader_tool_1200x900.png" alt="Shader Tool">
                    <img class="hover-gif" src="static/img/shader_tool_1200x900.gif" alt="Shader Tool GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">Shader Development Tools</h3>
                    <p class="project-description">Custom tools for streamlining shader creation and optimization workflows.</p>
                    <span class="project-tag">Pipeline Tool</span>
                </div>
            </div>

            <div class="grid-item" data-category="devlog">
                <div class="grid-media">
                    <img src="static/img/devlog_1200x900.png" alt="Development Process">
                    <img class="hover-gif" src="static/img/devlog_1200x900.gif" alt="Development Process GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">Technical Art Process</h3>
                    <p class="project-description">Behind-the-scenes look at technical art workflows and problem-solving approaches.</p>
                    <span class="project-tag">Process Documentation</span>
                </div>
            </div>

            <div class="grid-item" data-category="other">
                <div class="grid-media">
                    <img src="static/img/experiments_1200x900.png" alt="Visual Experiments">
                    <img class="hover-gif" src="static/img/experiments_1200x900.gif" alt="Visual Experiments GIF">
                </div>
                <div class="project-info">
                    <h3 class="name">Visual Experiments</h3>
                    <p class="project-description">Collection of visual effects experiments and artistic explorations.</p>
                    <span class="project-tag">R&D</span>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <p class="subtext">&copy; 2024 CJ Nowacek. All rights reserved.</p>

    <footer>
        <button onclick="scrollToTop()">Back to Top</button>
    </footer>

    <script>
        // Category filtering functionality
        function showCategory(category) {
            const items = document.querySelectorAll('.grid-item');
            const buttons = document.querySelectorAll('.category-btn');
            
            // Update active button
            buttons.forEach(btn => btn.classList.remove('active'));
            event.target.classList.add('active');
            
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // GIF hover effect
        document.querySelectorAll('.grid-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                const gif = item.querySelector('.hover-gif');
                if (gif && gif.src) {
                    gif.src = gif.src; // Reset the GIF to play from the beginning
                }
            });
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
            // Filter items
            items.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        // GIF hover effect
        document.querySelectorAll('.grid-item').forEach(item => {
            item.addEventListener('mouseenter', () => {
                const gif = item.querySelector('.hover-gif');
                if (gif && gif.src) {
                    gif.src = gif.src; // Reset the GIF to play from the beginning
                }
            });
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>

</html>
