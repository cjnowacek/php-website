<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="static/css/style.css" />
  <title>CJ Nowacek</title>
</head>

<body>
  <div class="container">
    <div class="header">
      <h1 class="name">CJ Nowacek - Technical Artist</h1>
    </div>

    <div class="title__container">
      <nav class="nav">
        <ul>
          <!--<li><a href="index.php">Home</a></li>-->
          <li><a href="about.php">About</a></li>
          <li><a href="">|</a></li>
          <li><a href="projects.php">Tools</a></li>
          <li><a href="">|</a></li>
          <li><a href="projects.php">Dev Log</a></li>
          <li><a href="">|</a></li>
          <li><a href="projects.php">Other</a></li>
        </ul>
      </nav>
    </div>


    <div class="video-container">
      <iframe title="vimeo-player" src="https://player.vimeo.com/video/711045781?h=582a1ac828" frameborder="0" allowfullscreen></iframe>
    </div>

    <div class="grid">
      <div class="grid-item">
        <div class="grid-media">
          <img src="static/img/smite2_1200x900.png" alt="Placeholder">
          <img class="hover-gif" src="static/img/y7A08Y_1.gif" alt="GIF Placeholder">
        </div>
        <a href="about.php" style="text-decoration:none">
          <p class="subtext">Smite</p>
        </a>
      </div>
      <div class="grid-item">
        <div class="grid-media">
          <img src="https://via.placeholder.com/400x300.jpg" alt="Runaway">
          <img class="hover-gif" src="static/img/y7A08Y.gif" alt="Runaway GIF">
        </div>
        <a href="about.php" style="text-decoration:none">
          <p class="subtext">Runaway</p>
        </a>
      </div>
      <div class="grid-item">
        <div class="grid-media">
          <img src="static/img/TheSintern1200x900.png" alt="Placeholder">
          <img class="hover-gif" src="https://via.placeholder.com/400x300.gif" alt="GIF Placeholder">
        </div>
        <a href="about.php" style="text-decoration:none">
          <p class="subtext">The Sintern</p>
        </a>
      </div>
    </div>
  </div>
  <footer>
    <p class="copyright">&copy; 2024 CJ Nowacek. All rights reserved.</p>
    <button onclick="scrollToTop()">Back to Top</button>
  </footer>-
  <script>
    document.querySelectorAll('.grid-item').forEach(item => {
      item.addEventListener('mouseenter', () => {
        const gif = item.querySelector('.hover-gif');
        gif.src = gif.src; // Reset the GIF to play from the beginning
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