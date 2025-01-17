<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

   <!-- Icons -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

   <!-- CSS -->
   <link rel="stylesheet" href="../assets/css/login.css">
   <link rel="stylesheet" href="../assets/css/styles.css">

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">

   <!-- Tailwind CDN -->
   <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

   <!-- Favicon -->
   <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicon.ico">
   <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicon.ico">

   <!-- Title -->
   <title>Hotel De Luna | Masuk</title>
</head>

<body>
   <!-- Navigation Bar -->
   <header class="header" id="header" style="font-family: 'Inter'; background: rgb(255, 255, 255);">
      <nav class="nav container">
         <b><a href="../index.html" class="nav__logo"
               style="font-family: 'Product Sans Bold'; letter-spacing: -.5px; font-size: 1.5rem; color: dodgerblue; margin-left: 30px;">
               Hotel De Luna
            </a></b>
         <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
               <li class="nav__item">
                  <a href="../index.html"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Beranda</a>
               </li>

               <li class="nav__item">
                  <a href="map.html"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Kamar</a>
               </li>
               <li class="nav__item">
                  <a href="book.html"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Pesanan</a>
               </li>
               <li class="nav__item">
                  <a href="../index.html#about"
                     class="nav__link font-medium leading-6 text-black-600 transition duration-150 ease-out hover:text-gray-600">Tentang
                     Kami</a>
               </li>
            </ul>
         </div>
         <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-grid-alt'></i>
         </div>
         <a href="daftar.html" style="margin-right: 30px;"
            class="button button__header focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Daftar</a>
      </nav>
   </header>

   <!-- Login Form -->
   <div class="session">
      <div class="left">
         <svg enable-background="new 0 0 300 302.5" version="1.1" viewBox="0 0 300 302.5" xml:space="preserve"
            xmlns="http://www.w3.org/2000/svg">
            <style type="text/css">
               .st01 {
                  fill: #fff;
               }
            </style>
            <path class="st01"
               d="m126 302.2c-2.3 0.7-5.7 0.2-7.7-1.2l-105-71.6c-2-1.3-3.7-4.4-3.9-6.7l-9.4-126.7c-0.2-2.4 1.1-5.6 2.8-7.2l93.2-86.4c1.7-1.6 5.1-2.6 7.4-2.3l125.6 18.9c2.3 0.4 5.2 2.3 6.4 4.4l63.5 110.1c1.2 2 1.4 5.5 0.6 7.7l-46.4 118.3c-0.9 2.2-3.4 4.6-5.7 5.3l-121.4 37.4zm63.4-102.7c2.3-0.7 4.8-3.1 5.7-5.3l19.9-50.8c0.9-2.2 0.6-5.7-0.6-7.7l-27.3-47.3c-1.2-2-4.1-4-6.4-4.4l-53.9-8c-2.3-0.4-5.7 0.7-7.4 2.3l-40 37.1c-1.7 1.6-3 4.9-2.8 7.2l4.1 54.4c0.2 2.4 1.9 5.4 3.9 6.7l45.1 30.8c2 1.3 5.4 1.9 7.7 1.2l52-16.2z" />
         </svg>
      </div>
      <form action="../backend/login.php" class="log-in" autocomplete="off">
         <h4><span>Masuk</span></h4>
         <p>Selamat Datang ! <br> Masuk Untuk Melakukan Reservasi
         </p>
         <div class="floating-label">
            <input placeholder="Email" type="email" name="email" id="email" autocomplete="off">
            <label for="email">Email:</label>
            <div class="icon">
               <svg enable-background="new 0 0 100 100" version="1.1" viewBox="0 0 100 100" xml:space="preserve"
                  xmlns="http://www.w3.org/2000/svg">
                  <style type="text/css">
                     .st0 {
                        fill: none;
                     }
                  </style>
                  <g transform="translate(0 -952.36)">
                     <path
                        d="m17.5 977c-1.3 0-2.4 1.1-2.4 2.4v45.9c0 1.3 1.1 2.4 2.4 2.4h64.9c1.3 0 2.4-1.1 2.4-2.4v-45.9c0-1.3-1.1-2.4-2.4-2.4h-64.9zm2.4 4.8h60.2v1.2l-30.1 22-30.1-22v-1.2zm0 7l28.7 21c0.8 0.6 2 0.6 2.8 0l28.7-21v34.1h-60.2v-34.1z" />
                  </g>
                  <rect class="st0" width="100" height="100" />
               </svg>
            </div>
         </div>
         <div class="floating-label">
            <input placeholder="Password" type="password" name="password" id="password" autocomplete="off">
            <label for="password">Password:</label>
            <div class="icon">
               <svg enable-background="new 0 0 24 24" version="1.1" viewBox="0 0 24 24" xml:space="preserve"
                  xmlns="http://www.w3.org/2000/svg">
                  <style type="text/css">
                     .st0 {
                        fill: none;
                     }

                     .st1 {
                        fill: #010101;
                     }
                  </style>
                  <rect class="st0" width="24" height="24" />
                  <path class="st1" d="M19,21H5V9h14V21z M6,20h12V10H6V20z" />
                  <path class="st1"
                     d="M16.5,10h-1V7c0-1.9-1.6-3.5-3.5-3.5S8.5,5.1,8.5,7v3h-1V7c0-2.5,2-4.5,4.5-4.5s4.5,2,4.5,4.5V10z" />
                  <path class="st1"
                     d="m12 16.5c-0.8 0-1.5-0.7-1.5-1.5s0.7-1.5 1.5-1.5 1.5 0.7 1.5 1.5-0.7 1.5-1.5 1.5zm0-2c-0.3 0-0.5 0.2-0.5 0.5s0.2 0.5 0.5 0.5 0.5-0.2 0.5-0.5-0.2-0.5-0.5-0.5z" />
               </svg>
            </div>
         </div>
         <br>
         <button type="submit" onClick="return false;" style="margin-left:auto;"
            class="button focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 ">Masuk</button>
         <a href="daftar.html" class="discrete" target="_blank">Belum Memiliki Akun? Daftar</a>
      </form>
   </div>

   <!-- Footer -->
   <div class="footer-dark" style="font-family: Inter;">
      <footer>
         <div class="bscontainer">
            <div class="bsrow">
               <!-- <div class="bscol-md-2 item">
                  <h3>Pages</h3>
                  <ul>
                     <li><a href="../index.html">Home</a></li>
                     <li><a href="map.html">Hotels</a></li>
                     <li><a href="login.html">Login</a></li>
                     <li><a href="book.html">Book Hotel</a></li>
                  </ul>
               </div>
               <div class="bscol-md-2 item">
                  <h3>Know More</h3>
                  <ul>
                     <li><a href="membership.html">Membership</a></li>
                     <li><a href="team.html">Our Team</a></li>
                     <li><a href="news.html">News</a></li>
                  </ul>
               </div>
               <div class="bscol-md-2 item">
                  <h3>Other Details</h3>
                  <ul>
                     <li><a href="#">Privacy Policy</a></li>
                     <li><a href="#">Terms of Service</a></li>
                  </ul>
               </div>
               <div class="bscol-md-6 item text">
                  <h3>De Luna Hotels</h3>
                  <p>Over the last 25 years, De Luna Hotels organisation has been known for dependably providing the
                     best Indian hospitality experience with more than 50 hotels and resorts worldwide.</p>
               </div> -->
               <div class="social_links">
                  <a href="https://www.instagram.com/">
                     <span class="fa-stack fa-lg ig combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
                  <a href="https://www.facebook.com/">
                     <span class="fa-stack fa-lg fb combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
                  <a href="https://www.youtube.com/">
                     <span class="fa-stack fa-lg yt combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-youtube-play fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
                  <a href="https://www.twitter.com/">
                     <span class="fa-stack fa-lg tw combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
                  <a href="https://codepen.io">
                     <span class="fa-stack fa-lg gt combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-codepen fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
                  <a href="https://www.linkedin.com/">
                     <span class="fa-stack fa-lg tw combo">
                        <i class="fa fa-circle fa-stack-2x circle"></i>
                        <i class="fa fa-linkedin fa-stack-1x fa-inverse icon"></i>
                     </span>
                  </a>
               </div>
            </div>
            <p class="copyright">Hotel De Luna © 2021</p>
         </div>
      </footer>
   </div>

   <!-- JS -->
   <script src="../assets/js/main.js"></script>
</body>

</html>