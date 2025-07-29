<?php
// includes/footer.php
?>
    <hr>
    <p class="subtext">&copy; <?php echo $current_year; ?> <?php echo htmlspecialchars($site_name); ?>. All rights reserved.</p>

    <footer>
        <button onclick="scrollToTop()">Back to Top</button>
    </footer>

    <script>
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>
</body>
</html>
