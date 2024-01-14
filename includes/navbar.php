<body>
    <header>
        <div class="logo">
            <a href="index.php"><img src="images/gbswhite.png" alt=""></a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <nav class="nav-bar">
            <ul>
                <li><a href="index.php" class="active">Home</a></li>
                <li><a href="#services" >Services</a></li>
                <!-- <li><a href="track.php" >Track</a></li> -->
                <li><a href="about.php" >About</a></li>
                <li><a href="contact.php" >Contact</a></li>
            </ul>
        </nav>
    </header>

    <script>
        hamburger = document.querySelector(".hamburger");
        hamburger.onclick = function() {
            navBar = document.querySelector(".nav-bar");
            navBar.classList.toggle("active");
        }
    </script>