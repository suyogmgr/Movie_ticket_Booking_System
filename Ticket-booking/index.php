<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Online Ticket Booking System</title>
    <link rel="stylesheet" href="./css/style.css" />
    <script type="text/javascript" src="./js/app.js" defer></script>
  </head>
  <body>
    <div id="root">
      <div class="app" id="app">
        <div class="navbar">
          <div class="logo">
            <a href="index.php">
              <h1>SSGB.</h1>
            </a>
          </div>
          <ul class="nav-links">
            <li class="nav-link"><a href="#">Offers</a></li>
            <li class="nav-link dropdown">
              <a href="#">Movies</a>
              <ul class="dropdown-menu">
                <li><a href="index.php">Now Showing</a></li>
                <li><a href="comming_soon.php">Coming Soon</a></li>
              </ul>
            </li>
            <li class="nav-link"><a href="./service.html">Customer Service</a></li>
            <li class="nav-link"><a href="./team.php">Team</a></li>

            <?php if (isset($_SESSION['username'])): ?>
              <li class="nav-link"><a href="./sign in/logout.php">Logout</a></li>
            <?php else: ?>
            <li class="nav-link"><a href="./sign in/signin.php">Sign In</a></li>
            <?php endif; ?>

            <li id="open" onclick="openSlider()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e3e3e3"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></li>
          </ul>
        </div>

        <div class="sidebar">
          <ul class="side-links">
            <li class="side-link" onclick="closeSlider()"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -960 960 960" fill="#e3e3e3"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></li>
            <li class="side-link hover"><a href="./service.html">Cusomer Service</a></li>
            <li class="side-link hover"><a href="#">Schedules</a></li>
            <li class="side-link hover"><a href="#">Offers</a></li>
            <li class="side-link hover"><a href="#">Privacy Policy</a></li>
            <li class="side-link hover"><a href="#">Terms and Services</a></li>
            <div class="login-btn">
            <?php if (isset($_SESSION['username'])): ?>
            <li><a href="./sign in/logout.php">Logout</a></li>
            <?php else: ?>
            <li><a href="./sign in/signin.php">Sign In</a></li>
            <?php endif; ?>
            </div>
          </ul>
        </div>

        <div class="home">
          <div class="slider-container">
            <div class="slide">
              <div class="slider">
                <img
                  src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1741675901266-rajagunjbanner.jpg"
                  alt="banner"
                />
                <div class="banner-text">
                  <h6>Now Showing</h6>
                  <h1>Rajagunj</h1>
                  <button><a href="./buy/m_0-0-7.php">Buy Now</a></button>
                </div>
              </div>
    
              <div class="slider">
                <img
                  src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1741675747371-anjilabanner.jpg"
                  alt="#"
                />
                <div class="banner-text">
                  <h6>Now Showing</h6>
                  <h1>Anjila</h1>
                  <button><a href="./buy/m_0-0-2.php">Buy Now</a></button>
                </div>
              </div>
    
              <div class="slider">
                <img
                  src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1741675829315-outlawbanner.jpg"
                  alt="banner"
                />
                <div class="banner-text">
                  <h6>Now Showing</h6>
                  <h1>Outlaw-Dafa 219</h1>
                  <button><a href="./buy/m_0-0-8.php">Buy Now</a></button>
                </div>
              </div>
    
              <div class="slider">
                <img
                  src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1741675901266-rajagunjbanner.jpg"
                  alt="banner"
                />
                <div class="banner-text">
                  <h6>Now Showing</h6>
                  <h1>Rajagunj</h1>
                  <button><a href="./buy/m_0-0-7.php">Buy Now</a></button>
                </div>
              </div>
    
              <div class="slider">
                <img
                  src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1741675829315-outlawbanner.jpg"
                  alt="#"
                />
                <div class="banner-text">
                  <h6>Now Showing</h6>
                  <h1>Outlaw- Dafa 219</h1>
                  <button><a href="./buy/m_0-0-8.php">Buy Now</a></button>
                </div>
              </div>
            </div>
            <div class="controls">
              <div class="left" onclick="prevSlide()">&#10094</div>
              <div class="right" onclick="nextSlide()">&#10095</div>
            </div>
          </div>

          <div class="movies-container">
            <div class="title">
              <ul>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="m160-800 80 160h120l-80-160h80l80 160h120l-80-160h80l80 160h120l-80-160h120q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800Zm0 240v320h640v-320H160Zm0 0v320-320Z"/></svg>
                  <span>Now Showing</span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M360-840v-80h240v80H360Zm80 440h80v-240h-80v240Zm40 320q-74 0-139.5-28.5T226-186q-49-49-77.5-114.5T120-440q0-74 28.5-139.5T226-694q49-49 114.5-77.5T480-800q62 0 119 20t107 58l56-56 56 56-56 56q38 50 58 107t20 119q0 74-28.5 139.5T734-186q-49 49-114.5 77.5T480-80Zm0-80q116 0 198-82t82-198q0-116-82-198t-198-82q-116 0-198 82t-82 198q0 116 82 198t198 82Zm0-280Z"/></svg>
                  <span>Comming Soon</span>
                </li>
              </ul>
            </div>
            <div class="movies">
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/1.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Laaj Sharanam</h2>
                  <span>Nepali | Social,Drama</span>
                  <a href="./buy/m_0-0-1.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/2.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Anjila</h2>
                  <span>Nepali | Biography,Drama</span>
                  <a href="./buy/m_0-0-2.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/3.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Chhaava</h2>
                  <span>Nepali | Drama,Action,History</span>
                  <a href="./buy/m_0-0-3.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/4.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Purna Bahadurko Sarangi</h2>
                  <span>Nepali | Drama,Family</span>
                  <a href="./buy/m_0-0-4.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/5.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Mikey 17</h2>
                  <span>Nepali | Adventure,Drama,Fantasy</span>
                  <a href="./buy/m_0-0-5.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/6.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Hostel 3</h2>
                  <span>Nepali | Drama</span>
                  <a href="./buy/m_0-0-6.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/7.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Rajagunj</h2>
                  <span>Nepali | Drama</span>
                  <a href="./buy/m_0-0-7.php" id="buy-now">Buy Now</a>
                </div>
              </div>
              <div data-socials="Buy Now" class="movie-card">
                <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/8.jpg" alt="movie-poster" loading="lazy">
                <div class="movie-info">
                  <h2>Outlaw-Dafa 2019</h2>
                  <span>Nepali | Action,Drama</span>
                  <a href="./buy/m_0-0-8.php" id="buy-now">Buy Now</a>
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
                  <li><a href="index.php">Movies</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </div>
              
              <div class="links-2">
                <h4>What's ON</h4>
                <ul>
                  <li><a href="index.php">Now Showing</a></li>
                  <li><a href="comming_soon.php">Coming Soon</a></li>
                </ul>
              </div>

              <div class="links-3">
                <h4>STAY IN TOUCH</h4>
                <ul>
                  <li class="gorakh">
                    <a href="mailto:suyogido@gmail.com">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                    <span>gorakh@gmail.com</span>
                    </a>
                  </li>
                  <li class="gorakh">
                    <a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#e3e3e3"><path d="M478-240q21 0 35.5-14.5T528-290q0-21-14.5-35.5T478-340q-21 0-35.5 14.5T428-290q0 21 14.5 35.5T478-240Zm-36-154h74q0-33 7.5-52t42.5-52q26-26 41-49.5t15-56.5q0-56-41-86t-97-30q-57 0-92.5 30T342-618l66 26q5-18 22.5-39t53.5-21q32 0 48 17.5t16 38.5q0 20-12 37.5T506-526q-44 39-54 59t-10 73Zm38 314q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
                    <span>FAQ</span>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="links-4">
                <h4>Find Us on Google Play <br>
                 & App Store </h4>
                <a href="#">
                  <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/Google_Play_Store_badge_EN.7796d8ab.png" alt="google_play_store">
                </a>
                <a href="#">
                  <img src="https://raw.githubusercontent.com/suyogmgr/Movie_ticket_Booking_System/refs/heads/main/Ticket-booking/assets/Download_on_the_App_Store_Badge.svg.e25727d7.png" alt="apple_store">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


