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
              <a href="./sign in/signin.php">Sign In</a>
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
                  <div class="social-links">
                    <a style="--accent-icon:#FF0069;" href="#">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M7.0301.084c-1.2768.0602-2.1487.264-2.911.5634-.7888.3075-1.4575.72-2.1228 1.3877-.6652.6677-1.075 1.3368-1.3802 2.127-.2954.7638-.4956 1.6365-.552 2.914-.0564 1.2775-.0689 1.6882-.0626 4.947.0062 3.2586.0206 3.6671.0825 4.9473.061 1.2765.264 2.1482.5635 2.9107.308.7889.72 1.4573 1.388 2.1228.6679.6655 1.3365 1.0743 2.1285 1.38.7632.295 1.6361.4961 2.9134.552 1.2773.056 1.6884.069 4.9462.0627 3.2578-.0062 3.668-.0207 4.9478-.0814 1.28-.0607 2.147-.2652 2.9098-.5633.7889-.3086 1.4578-.72 2.1228-1.3881.665-.6682 1.0745-1.3378 1.3795-2.1284.2957-.7632.4966-1.636.552-2.9124.056-1.2809.0692-1.6898.063-4.948-.0063-3.2583-.021-3.6668-.0817-4.9465-.0607-1.2797-.264-2.1487-.5633-2.9117-.3084-.7889-.72-1.4568-1.3876-2.1228C21.2982 1.33 20.628.9208 19.8378.6165 19.074.321 18.2017.1197 16.9244.0645 15.6471.0093 15.236-.005 11.977.0014 8.718.0076 8.31.0215 7.0301.0839m.1402 21.6932c-1.17-.0509-1.8053-.2453-2.2287-.408-.5606-.216-.96-.4771-1.3819-.895-.422-.4178-.6811-.8186-.9-1.378-.1644-.4234-.3624-1.058-.4171-2.228-.0595-1.2645-.072-1.6442-.079-4.848-.007-3.2037.0053-3.583.0607-4.848.05-1.169.2456-1.805.408-2.2282.216-.5613.4762-.96.895-1.3816.4188-.4217.8184-.6814 1.3783-.9003.423-.1651 1.0575-.3614 2.227-.4171 1.2655-.06 1.6447-.072 4.848-.079 3.2033-.007 3.5835.005 4.8495.0608 1.169.0508 1.8053.2445 2.228.408.5608.216.96.4754 1.3816.895.4217.4194.6816.8176.9005 1.3787.1653.4217.3617 1.056.4169 2.2263.0602 1.2655.0739 1.645.0796 4.848.0058 3.203-.0055 3.5834-.061 4.848-.051 1.17-.245 1.8055-.408 2.2294-.216.5604-.4763.96-.8954 1.3814-.419.4215-.8181.6811-1.3783.9-.4224.1649-1.0577.3617-2.2262.4174-1.2656.0595-1.6448.072-4.8493.079-3.2045.007-3.5825-.006-4.848-.0608M16.953 5.5864A1.44 1.44 0 1 0 18.39 4.144a1.44 1.44 0 0 0-1.437 1.4424M5.8385 12.012c.0067 3.4032 2.7706 6.1557 6.173 6.1493 3.4026-.0065 6.157-2.7701 6.1506-6.1733-.0065-3.4032-2.771-6.1565-6.174-6.1498-3.403.0067-6.156 2.771-6.1496 6.1738M8 12.0077a4 4 0 1 1 4.008 3.9921A3.9996 3.9996 0 0 1 8 12.0077"/></svg>
                    </a>
                    <a style="--accent-icon:#0866FF;" href="#">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Facebook</title><path d="M9.101 23.691v-7.98H6.627v-3.667h2.474v-1.58c0-4.085 1.848-5.978 5.858-5.978.401 0 .955.042 1.468.103a8.68 8.68 0 0 1 1.141.195v3.325a8.623 8.623 0 0 0-.653-.036 26.805 26.805 0 0 0-.733-.009c-.707 0-1.259.096-1.675.309a1.686 1.686 0 0 0-.679.622c-.258.42-.374.995-.374 1.752v1.297h3.919l-.386 2.103-.287 1.564h-3.246v8.245C19.396 23.238 24 18.179 24 12.044c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.628 3.874 10.35 9.101 11.647Z"/></svg>
                    </a>
                    <a style="--accent-icon:#FF0000;" href="#">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>YouTube</title><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a style="--accent-icon:#000000;" href="#">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                    </a>
                    <a style="--accent-icon:#000000;" href="#">
                      <svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>TikTok</title><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
                    </a>
                  </div>
                </ul>
              </div>

              <div class="links-4">
                <h4>Find Us on Google Play <br>
                 & App Store </h4>
                <a href="#">
                  <img src="./assets/Google_Play_Store_badge_EN.7796d8ab.png" alt="google_play_store">
                </a>
                <a href="#">
                  <img src="./assets/Download_on_the_App_Store_Badge.svg.e25727d7.png" alt="apple_store">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


