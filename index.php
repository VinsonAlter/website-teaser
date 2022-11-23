<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chery Oriental Group - Coming Soon</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/styles.css" />
    <!-- Link Swiper JS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
  </head>
  <body>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="container">
            <div class="logos">
              <div class="logo1">
                <img src="assets/img/Chery-logo.png" alt="chery logo" width="125px" />
              </div>
            <div class="logo2">
              <img
                src="assets/img/chery-oriental-stars.png"
                alt="chery oriental stars logo"
                width="75px"
              />
            </div>
          </div>
          <div class="wrap">
            <div class="body">Coming Soon</div>
              <div class="map-icon">
                <img src="assets/img/chery-map-edited.png"
                  alt="chery map"
                />
              </div>
            <div class = "footer">
              <p>Medan & Pekanbaru</p>
            </div>
          </div>
        </div>
        </div>
          <div class="swiper-slide">
            <div class="container-2"></div>
          </div>
          <div class="swiper-slide">
            <div class="container-3"></div>
          </div>
        <div class="swiper-slide">
          <div class="container-4"></div>
        </div>    
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- Swiper JS Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initiate Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop: true,
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>

  </body>
</html>
