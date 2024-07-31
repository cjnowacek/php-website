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
      <span class="name">CJ Nowacek</span>
      <span class="name">Technical Artist</span>
      <!--<span style="font-size: 50%; background: inherit;">Technical Artist</span>-->
    </div>

  </div>

  <div class="container">
    <nav class="nav">
      <ul>
        <!--<li><a href="index.php">Home</a></li>-->
        <li><a href="about.php">About</a></li>
        <li><a href="">-</a></li>
        <li><a href="projects.php">Tools</a></li>
        <li><a href="">-</a></li>
        <li><a href="projects.php">Dev Log</a></li>
        <li><a href="">-</a></li>
        <li><a href="projects.php">Other</a></li>
      </ul>
    </nav>
  </div>

  <div class="container">

    <div class="video-container">
      <iframe title="vimeo-player" src="https://player.vimeo.com/video/711045781?h=582a1ac828" frameborder="0" allowfullscreen></iframe>
    </div>


    <h1 class="name">Projects</h1>

    <div class="grid">
      <div class="grid-item">
        <div class="grid-media">
          <img src="static/img/smite2_1200x900.png" alt="Placeholder">
          <img class="hover-gif" src="static/img/y7A08Y.gif" alt="GIF Placeholder">
        </div>
        <a href="about.php" style="text-decoration:none">
          <h1 class="name">Smite</h1>
        </a>
      </div>


      <div class="grid-item">
        <div class="grid-media">
          <img src="static/img/smite2_1200x900.png" alt="Runaway">
          <img class="hover-gif" src="static/img/y7A08Y.gif" alt="Runaway GIF">
        </div>
        <a href="about.php" style="text-decoration:none">
          <h1 class="name">Runaway</h1>
        </a>
      </div>
      <div class="grid-item">
        <div class="grid-media">
          <img src="static/img/TheSintern1200x900.png" alt="Placeholder">
          <img class="hover-gif" src="https://via.placeholder.com/400x300.gif" alt="GIF Placeholder">
        </div>
        <a href="about.php" style="text-decoration:none">
          <h1 class="name">The Sintern</h1>
        </a>
      </div>
    </div>
  </div>
  <hr>
  <p class="subtext">&copy; 2024 CJ Nowacek. All rights reserved.</p>


  <footer>
    <button onclick="scrollToTop()">Back to Top</button>
  </footer>
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