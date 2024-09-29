<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/session.css">
    <link rel="shortcut icon" href="assets/img/logofitness.png" type="image/x-icon">
    <title>Fitness</title>
</head>

<body>
    <div class="banner">
        <video src="assets/img/bg.mp4" autoplay muted loop type="mp4"></video>
    </div>

    <div class="container">
        <div class="sidebar">
            <div class="sidehand">
                <div class="dots">
                    <i class="fa-solid fa-circle"></i>
                    <i class="fa-solid fa-circle" style="color: #333;"></i>
                    <i class="fa-solid fa-circle"></i>
                </div>
                <hr style="margin: 15px; border: 1px solid #eee;">
            </div>
            <div class="sidebody" style="height: 69vh;">
                <div class="searchbar">
                    <input placeholder="Search..." id="searchBar" name="searchBar" type="text">
                    <i class="fa-solid fa-magnifying-glass glass"></i>
                </div>
                
                <style>
                    /* Add a black background color to the top navigation */
                    .topnav {
                        background-color: #333;
                        overflow: hidden;
                    }
            
                    /* Style the links inside the navigation bar */
                    .topnav a {
                        float: left;
                        display: block;
                        color: #f2f2f2;
                        text-align: center;
                        padding: 14px 16px;
                        text-decoration: none;
                        font-size: 17px;
                    }
            
                    /* Add an active class to highlight the current page */
                    .active {
                        background-color: #04AA6D;
                        color: white;
                    }
            
                    /* Hide the link that should open and close the topnav on small screens */
                    .topnav .icon {
                        display: none;
                    }
            
                    /* Dropdown container - needed to position the dropdown content */
                    .dropdown {
                        float: left;
                        overflow: hidden;
                    }
            
                    /* Style the dropdown button to fit inside the topnav */
                    .dropdown .dropbtn {
                        font-size: 17px;
                        border: none;
                        outline: none;
                        color: white;
                        padding: 14px 16px;
                        background-color: inherit;
                        font-family: inherit;
                        margin: 0;
                    }
            
                    /* Style the dropdown content (hidden by default) */
                    .dropdown-content {
                        display: none;
                        
                        background-color: transparent;
                        min-width: 60px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 1;
                    }
            
                    /* Style the links inside the dropdown */
                    .dropdown-content a {
                        float: none;
                        color: black;
                        padding: 12px 16px;
                        text-decoration: none;
                        display: block;
                        text-align: left;
                    }
            
                    /* Add a dark background on topnav links and the dropdown button on hover */
                    .topnav a:hover,
                    .dropdown:hover .dropbtn {
                        background-color: #211212;
                        color: white;
                    }
            
                    /* Add a grey background to dropdown links on hover */
                    .dropdown-content a:hover {
                        background-color: #ddd;
                        color: black;
                    }
            
                    /* Show the dropdown menu when the user moves the mouse over the dropdown button */
                    .dropdown:hover .dropdown-content {
                        display: block;
                    }
            
                    /* When the screen is less than 600 pixels wide, hide all links except for the first one ("Home").
                       Show the link that contains should open and close the topnav (.icon) */
                    @media screen and (max-width: 600px) {
                        .topnav a:not(:first-child),
                        .dropdown .dropbtn {
                            display: none;
                        }
                        .topnav a.icon {
                            float: right;
                            display: block;
                        }
                    }
                </style>
                <div class="dropdown">
                    <button class="dropbtn">Music Playlist <i class="fa fa-caret-down"></i></button>
                    <div class="dropdown-content">
                        <button id="musicButton1" onclick="toggleMusic1()">[1hour]music_playlist#1</button>
                        <script>
                            var audio1 = new Audio('assets/audio/m1.mp3'); // Replace 'your-music-file.mp3' with the actual file path
                            var isPlaying1 = false;
                    
                            function toggleMusic1() {
                                if (isPlaying1) {
                                    audio1.pause();
                                } else {
                                    audio1.play();
                                }
                                isPlaying1 = !isPlaying1;
                                document.getElementById('musicButton1').innerText = isPlaying1 ? 'Playing [1hour]music_playlist#1' : '[1hour]music_playlist#1';
                            }
                        </script>
                        <button id="musicButton2" onclick="toggleMusic2()">[1hour]music_playlist#2</button>
                        <script>
                            var audio2 = new Audio('assets/audio/m2.mp3'); // Replace 'your-music-file.mp3' with the actual file path
                            var isPlaying2 = false;
                    
                            function toggleMusic2() {
                                if (isPlaying2) {
                                    audio2.pause();
                                } else {
                                    audio2.play();
                                }
                                isPlaying2 = !isPlaying2;
                                document.getElementById('musicButton2').innerText = isPlaying2 ? 'Playing [1hour]music_playlist#2' : '[1hour]music_playlist#2';
                            }
                        </script>
                        <button id="musicButton3" onclick="toggleMusic3()">[1hour]music_playlist#3</button>
                        <script>
                            var audio3 = new Audio('assets/audio/m3.mp3'); // Replace 'your-music-file.mp3' with the actual file path
                            var isPlaying3 = false;
                    
                            function toggleMusic3() {
                                if (isPlaying3) {
                                    audio3.pause();
                                } else {
                                    audio3.play();
                                }
                                isPlaying3 = !isPlaying3;
                                document.getElementById('musicButton3').innerText = isPlaying3 ? 'Playing [1hour]music_playlist#3' : '[1hour]music_playlist#3';
                            }
                        </script>
                        <button id="musicButton4" onclick="toggleMusic4()">[1hour]music_playlist#4</button>
                        <script>
                            var audio4 = new Audio('assets/audio/m4.mp3'); // Replace 'your-music-file.mp3' with the actual file path
                            var isPlaying4 = false;
                    
                            function toggleMusic4() {
                                if (isPlaying4) {
                                    audio4.pause();
                                } else {
                                    audio4.play();
                                }
                                isPlaying4 = !isPlaying4;
                                document.getElementById('musicButton4').innerText = isPlaying4 ? 'Playing [1hour]music_playlist#4' : '[1hour]music_playlist#4';
                            }
                        </script>
                        <button id="musicButton5" onclick="toggleMusic5()">[1hour]music_playlist#5</button>
                        <script>
                            var audio5 = new Audio('assets/audio/m5.mp3'); // Replace 'your-music-file.mp3' with the actual file path
                            var isPlaying5 = false;
                    
                            function toggleMusic5() {
                                if (isPlaying5) {
                                    audio5.pause();
                                } else {
                                    audio5.play();
                                }
                                isPlaying5 = !isPlaying5;
                                document.getElementById('musicButton5').innerText = isPlaying5 ? 'Playing [1hour]music_playlist#5' : '[1hour]music_playlist#5';
                            }
                        </script>
                    </div>
                </div>
                
                
            </div>
            <div class="sidefoot">
                <hr style="margin: 15px 0; border: 1px solid #eee;">
                <div class="social-icons">
                    <i class="fa-brands fa-square-facebook"></i>
                    
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-square-instagram"></i>
                </div>
            </div>
        </div>
        <div class="data">
            <div class="top" style="justify-content: right;">
                
                    <div class="nav-menu" id="navMenu">
                        <ul>
                            <li><a href="index..php" class="link">Exit</a></li>
                            
                        </ul>
                    </div>
                    
                
            </div>
            <div class="header">
                <p>SESSIONS</p>
            </div>
            <div class="body">
                <div id="root"></div>
            </div>
        </div>
    </div>
    <script src="assets/js/session.js"></script>
</body>
</html>