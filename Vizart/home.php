<?php
session_start();
if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];

}else{
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualize art</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<header class="navbar">
    <div class="logo">
        <div class="circle"></div>
        <span>Visualize Art</span>
    </div>

    <!-- Hamburger menu (hidden by default) -->
    <div class="hamburger-menu" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="nav-and-search">
        <nav class="nav-links">
            <a href="home.php">Home</a>
            <a href="#about">About</a>
            <a href="exhibitions.html">Exhibitions</a>
            <a href="#request">Request Service</a>



            <form action="logout.php" method="post" style="display:inline;">
                <button type="submit" class="logout-button" style="
                    background-color: #00adb5; 
                    color: white; 
                    border: none; 
                    padding: 5px 15px; 
                    cursor: pointer; 
                    border-radius: 5px;
                    font-size: 14px;
                    margin-left: 10px;
                ">
                    Logout
                </button>
            </form>
        </nav>
        <!-- <button id="logoutButton" class="logout-button">Logout</button> -->
    </div>
</header>

<script>
    function toggleMenu() {
        const navLinks = document.querySelector('.nav-links');
        navLinks.classList.toggle('show');
    }
</script>

<main>
        <section class="hero">
            <h2>Welcome to Visual Art Gallery!</h2>
            <h3>Explore Your <span>Imagine.</span></h3>
            <p>"Visualize Art is a virtual exhibition platform designed to showcase artwork in the form of digital
                posters. Our aim is to broaden access to art for everyone through digital media."</p>
            <button id="viewExhibitions" href="exhibitions.html">View All Exhibitions</button>
            <script>
                // tombol all exhibitions
                const viewExhibitionsBtn = document.getElementById("viewExhibitions");

                // Tambahkan event listener untuk klik tombol
                viewExhibitionsBtn.addEventListener("click", function () {
                 // Pindah ke halaman exhibitions.html
                window.location.href = "exhibitions.html";
            });
            </script>
        </section>
       
    <section class="intro">
        <div class="intro-text">
            <h1 id="about">About Us</h1>
            <p id="visualize">
                "Visualize Art" is an innovative platform that empowers artists and organizations to showcase their
                creativity through
                virtual exhibitions. By combining aesthetics with cutting-edge technology, we offer a seamless experience
                for exploring
                and creating immersive art galleries online. Whether you're an artist showcasing your talent or an
                enthusiast exploring
                vibrant works, Virtualize Art bridges the gap between creators and admirers. Our mission is to make art
                accessible to
                everyone, anywhere.
            </p>
        </div>
        <div class="intro-image">
            <img src="images/about.png" alt="Artwork">
        </div>
    </section>

<section class="featured-posters">
    <h2>Featured Posters</h2>
    <p>Browse through our curated collection of artworks</p>
    <div class="posters-container">
        <div class="poster-card">
            <div class="tag">Limited Edition</div>
            <img src="images/poster1.png" alt="Retro Fusion Poster">
            <div class="poster-info">
                <p>Pleasure of Chaos</p>
                <h3>Artist: Heri Dono</h3>
            </div>
        </div>
        <div class="poster-card">
            <div class="tag">New Arrival</div>
            <img src="images/poster2.png" alt="Dreamscape Poster">
            <div class="poster-info">
                <p>The injured Diponegoro</p>
                <h3>Artist: Hendra Gunawan</h3>
            </div>
        </div>
        <div class="poster-card">
            <div class="tag">Bestseller</div>
            <img src="images/poster3.png" alt="Urban Elegance Poster">
            <div class="poster-info">
                <p>Discussion</p>
                <h3>Artist: Alvian Anta Putra</h3>
            </div>
        </div>
        <div class="poster-card">
            <div class="tag">Trending</div>
            <img src="images/poster4.png" alt="Modern Pop Poster">
            <div class="poster-info">
            <p>Cat</p>
            <h3>Artist: Popo Iskandar</h3>
            </div>
        </div>
    </div>
</section>




        <section class="gallery-highlights">
            <h2>Art Gallery Highlights</h2>
            <p>Discover the latest social media buzz around our posters</p>
            <div class="highlight-card">
                <div class="user-info">
                    <!-- <div class="avatar"></div> -->
                    <div>
                        <h4>Raden Saleh</h4>
                        <p>1857, Indonesia</p>
                    </div>
                    <button class="menu-button">...</button>
                </div>
                <div class="post-content">
                    <img src="images/ArtGalery.png" alt="">
                </div>
                <div class="post-footer">
                    <p>The arrest of prince diponegoro.</p>
                    <div class="hashtags">
                        <span>#ArtisticInspiration</span>
                        <span>#VirtualizeArt</span>
                    </div>
                </div>
            </div>
        </section>
        
<div id="request" class="request-service-container">
    <!-- Form Area -->
    <div class="form-container">
        <h1>Request Service</h1>
        <p>Have a question or feedback? Contact us!</p>
        <form id="art">
            <label for="fullName">Full Name</label>
            <input type="text" id="fullName" name="fullName" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Type your message here"></textarea>

            <button type="submit" class="submit-button">Send Message</button>
            <div id="loadingSpinner" class="loading-spinner"></div>
            <div id="loadingText" class="loading-text">Sending...</div>
        </form>

    </div>

    <!-- Gambar Area -->
    <div class="image-container"> <img src="images/requestservice.png" alt=""></div>
</div>
    </main>

    <footer>
        <p>Email: visualizeart@gmail.com</p>
        <p>&copy; 2024 Visualize Art. All Rights Reserved.</p>
        <a href="privacy.html">Privacy Policy</a>
    </footer>

    <script src="message.js"></script>
    
    <!-- <div class="user-details">
        <a href="logout.php">Logout</a>

    </div> -->

    <!-- <form action="logout.php" method="post">
    <button type="submit" style="
        background-color: #ff4d4d; 
        color: white; 
        border: none; 
        padding: 10px 20px; 
        cursor: pointer; 
        border-radius: 5px;
        font-size: 16px;
    ">
        Logout
    </button>
</form> -->


    <!-- <button type="submit" class="submit-button">Send Message</button> -->

</body>

</html>