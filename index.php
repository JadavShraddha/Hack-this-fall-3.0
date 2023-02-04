<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hackthisfall</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- css stylesheet -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="logo">Guide Spike</div>
        <nav class="navbar" id="navbar">
            <ul>
                <li><a href="#logo">Home</a></li>
                <li><a href="login.php">Login/Registration</a></li>
                <li><a href="#aboutUs">About Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- slideshow -->
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="photos/lotus-temple.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <img src="photos/taj-mahal.png" style="width:100%">
        </div>
        
        <div class="mySlides fade">
            <img src="photos/kutub-minar.png" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="photos/somnath.png" style="width:100%">
        </div>
    </div>
        
    <div style="text-align:center">
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span> 
        <span class="dot"></span>
    </div>

    <script src="slide.js"></script>

    <!-- information -->
    <p id="places">About Places</p>
    <div class="zone blue grid-wrapper">
        <div class="box zone">
            <img src="photos/taj-mahal.png">
            <button class="about"><a href="info.html#taj-mahal">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/kutub-minar.png">
            <button class="about" id="kutub-minar"><a href="info.html#kutub-minar">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/lotus-temple.png">
            <button class="about" id="lotus-temple"><a href="info.html#lotus-temple">About Place</a></button>
        </div>
        
        <div class="box zone">
            <img src="photos/dwarka.png">
            <button class="about" id="dwarka"><a href="info.html#dwarka">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/somnath.png">
            <button class="about" id="somnath"><a href="info.html#somnath">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/white-ran.png">
            <button class="about" id="white-ran"><a href="info.html#white-ran">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/kargil-wall.png">
            <button class="about" id="kargil-wall"><a href="info.html#kargil-wall">About Place</a></button>
        </div>

        <div class="box zone">
            <img src="photos/golden-temple.png">
            <button class="about" id="golden-temple"><a href="">About Place</a></button>
        </div>
    </div>

    <!-- footer -->
    <footer>
        <div class="footer-content" id="aboutUs">
            <h3>Guide Spike</h3>
            <p>Heyy guys welcome to Guide Spike!!</p>
            <p>Here guide spike aim to give you the best and most up-to-date information on the major travel destinations around the world.</p>
            <p>Here you will find things to see and do, and where to eat.</p>
            <p>No matter what type of vacation you are going on — a cruise, backpacking trip, island getaway, two-week holiday, round-the-world trip, or family vacation — these Guide Spike will give you all the information you need so you can travel better, longer, and cheaper.</p>
            <p>we know how bad it is to get outdated information in print guidebooks. We’ve been the victim of it too many times. We update this section twice a year to keep the content fresh!</p>
            <p>Wish you happy and safe travelling!!</p>
        </div>
    </footer>
</body>
</html>