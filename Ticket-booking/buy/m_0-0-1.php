<?php

session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['error'] = "You need to be logged in for this page";
    header("location: ../sign in/signin.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Movie Ticket Booking</title>
    <link rel="stylesheet" href="../css/ticket.css">
    <link rel="stylesheet" href="../css/style.css">
    <script type="text/javascript" src="../js/ticket.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
</head>

<body>
    <div id="root">
        <div class="app" id="app">
            <div class="navbar">
                <div class="logo">
                    <a href="../index.php">
                        <h1>SSGB.</h1>
                    </a>
                </div>
                <ul class="nav-links">
                    <li class="nav-link"><a href="#">Offers</a></li>
                    <li class="nav-link dropdown">
                        <a href="#">Movies</a>
                        <ul class="dropdown-menu">
                            <li><a href="../index.php">Now Showing</a></li>
                            <li><a href="../comming_soon.php">Coming Soon</a></li>
                        </ul>
                    </li>
                    <li class="nav-link"><a href="#">Customer Service</a></li>
                    <li class="nav-link"><a href="../team.php">Team</a></li>

                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-link"><a href="../sign in/logout.php">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-link"><a href="./sign in/signin.php">Sign In</a></li>
                    <?php endif; ?>

                    <li id="open" onclick="openSlider()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e3e3e3">
                            <path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z" />
                        </svg></li>
                </ul>
            </div>

            <div class="sidebar">
                <ul class="side-links">
                    <li class="side-link" onclick="closeSlider()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e3e3e3">
                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                        </svg></li>
                    <li class="side-link hover"><a href="#">Cusomer Service</a></li>
                    <li class="side-link hover"><a href="#">Schedules</a></li>
                    <li class="side-link hover"><a href="#">Offers</a></li>
                    <li class="side-link hover"><a href="#">Privacy Policy</a></li>
                    <li class="side-link hover"><a href="./terms_services.html">Terms and Services</a></li>
                    <div class="login-btn">
                        <?php if (isset($_SESSION['username'])): ?>
                            <li><a href="./sign in/logout.php">Logout</a></li>
                        <?php else: ?>
                            <li><a href="./sign in/signin.php">Sign In</a></li>
                        <?php endif; ?>
                    </div>
                </ul>
            </div>

            <div class="container">
                <h1>Booking Section</h1>

                <!-- <label for="name">Your Name:</label>
                <input type="text" id="name" placeholder="Enter your name"> -->
                <div id="user-info" data-username="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>"></div>
                <div id="qrcode-container" onclick="hideQR()" style="display: none;">
                    <h2 id="qr-heading">Your Ticket QR Code:</h2>
                    <div id="qrcode"></div>
                    <div id="qr-details"></div>
                    <p>Click anywhere on the QR code to close</p>
                </div>

                <div class="movie-list">
                    <!-- Movie 1: Purna Bahadur Ko Sarangi -->
                    <div class="movie">
                        <div class="movie-img">
                            <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1.jpg" alt="Purna Bahadur Ko Sarangi">
                        </div>
                        <div class="movie-details">
                            <h2>Laaj Sharanam</h2>
                            <span>Laaj Sharanam is a Nepali movie, starring Sitaram Kattel, Bijay Baral, Arpan Thapa, Arjun, Sagar Lamsal and directed by Kumar Kattel.</span>
                            <span><strong>Date:</strong> March 20, 2025</span>
                            <span><strong>Time:</strong> 7:00 PM</span>
                            <div class="book-btn">
                                <button onclick="bookTicket('Laaj Sharanam', 'March 20, 2025', '7:00 PM')">Book Now</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="footer">
                <div class="footer-left">
                    <div class="footer-logo">
                        <h1>SSGB.</h1>
                    </div>
                </div>
                <div class="footer-right">
                    <div class="footer-links-cont">
                        <div class="links-1">
                            <h4>SRM CINEMA</h4>
                            <ul>
                                <li><a href="#">Advertise With Us</a></li>
                                <li><a href="#">Become SRM Franchise</a></li>
                                <li><a href="#">CLUB</a></li>
                                <li><a href="../index.php">Movies</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Careers</a></li>
                            </ul>
                        </div>

                        <div class="links-2">
                            <h4>What's ON</h4>
                            <ul>
                                <li><a href="../index.php">Now Showing</a></li>
                                <li><a href="../comming_soon.php">Coming Soon</a></li>
                            </ul>
                        </div>

                        <div class="links-3">
                            <h4>STAY IN TOUCH</h4>
                            <ul>
                                <li class="gorakh">
                                    <a href="mailto:suyogido@gmail.com">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                            <path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                                        </svg>
                                        <span>gorakh@gmail.com</span>
                                    </a>
                                </li>
                                <li class="gorakh">
                                    <a href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3">
                                            <path d="M478-240q21 0 35.5-14.5T528-290q0-21-14.5-35.5T478-340q-21 0-35.5 14.5T428-290q0 21 14.5 35.5T478-240Zm-36-154h74q0-33 7.5-52t42.5-52q26-26 41-49.5t15-56.5q0-56-41-86t-97-30q-57 0-92.5 30T342-618l66 26q5-18 22.5-39t53.5-21q32 0 48 17.5t16 38.5q0 20-12 37.5T506-526q-44 39-54 59t-10 73Zm38 314q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z" />
                                        </svg>
                                        <span>FAQ</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="links-4">
                            <h4>Find Us on Google Play <br>
                                & App Store </h4>
                            <a href="#">
                                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/Google_Play_Store_badge_EN.7796d8ab.png">
                            </a>
                            <a href="#">
                                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/Download_on_the_App_Store_Badge.svg.e25727d7.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>