<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A.T. WebDeveloper</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"><img class="graficlogo" src="img/logo.png" alt="logo"></a>
        </div>
        <nav>
            <div class="topnav" id="myTopnav">
                <a href="/">HOME</a>
                <a href="/project">PROJECTS</a>
                <a href="/blog">BLOG</a>
                <a href="/contact">CONTACT</a>
                <a href="/about">ABOUT</a>
                <a href="/services">SERVICES</a>
                <a href="/location">LOCATION</a>
                <a id="menu" href="#" class="icon">&#9776;</a>
            </div>
        </nav>
    </header>
    @yield("content")
    <footer>
        <nav>
             <a href="/">HOME</a>
             <a href="/project">PROJECTS</a>
             <a href="/blog">BLOG</a>
             <a href="/contact">CONTACT</a>
             <a href="/about">ABOUT</a>
             <a href="/services">SERVICES</a>
             <a href="/location">LOCATION</a>
        </nav>
        <div class="logo">
            <a href="index.html"><img class="graficlogo" src="img/logo.png" alt="#"></a>
        </div>
        <div class="social">
            <a href="#"><img src="img/em.png" alt=""></a>
            <a href="#"><img src="img/face.png" alt=""></a>
            <a href="#"><img src="img/goo.png" alt=""></a>
            <a href="#"><img src="img/inst.png" alt=""></a>
            <a href="#"><img src="img/pint.png" alt=""></a>
        </div>
        <p>A.T. WebDeveloper. 2021</p>
    </footer>
    <script src="js/script.js"></script>
</body>
</html>