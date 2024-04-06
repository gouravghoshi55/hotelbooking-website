<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GP hotels - ABOUT</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">

</head>

<body>
  <style>
    .box {
      border-top-color: var(--teal) !important;
    }
  </style>

  <!----------------- Header START   ------------------------>

  <?php include 'header.php'; ?>

  <!------------- header end ------------------------->

  <div class="my-5 px-4">
    <h2 class="Fw-bold h-font text-center">ABOUT US</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores culpa<br>,
      officia quidem numquam at debitis molestiae voluptates! Pariatur,
      ipsum obcaecati!
    </p>
  </div>

  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 col-md-5 mb-4 order-lg-1 order-2">
        <h3 class="mb-3">Lorem, ipsum dolor sit amet </h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque veritatis explicabo officiis
          consequatur, reiciendis distinctio quo.
        </p>
      </div>
      <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-1">
        <img src="image/about/images.jpg" class="w-100">
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="image/about/2.webp" width="70px">
          <h4 class="mt-3">100+ ROOMS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="image/about/5.png" width="70px">
          <h4 class="mt-3">500+ CUSTOMERS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="image/about/3.png" width="70px">
          <h4 class="mt-3">150+ REVIEWS</h4>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
        <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
          <img src="image/about/4.png" width="70px">
          <h4 class="mt-3">250+ STAFFS</h4>
        </div>
      </div>
    </div>

  </div>




  <!------------------ footer --------------------------->



  <div class="container-fluid bg-white mt-5">
    <div class="row">
      <div class="col-lg-4 p-4">
        <h3 class="h-font fw-bold fs-3 mb-2">GP hotels</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum quaerat sunt,
          impedit reprehenderit perferendis mollitia pariatur nobis?
          Maiores, facere? Modi repudiandae aut iste dolorem mollitia autem unde,
          repellendus hic praesentium.</p>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">links</h5><br>
        <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">HOME</a><br>
        <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">ROOMS</a><br>
        <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">FACILITIES</a><br>
        <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">CONTACT US</a><br>
        <a href="" class="d-inline-block mb-2 text-dark text-decoration-none">ABOUT</a><br>
      </div>
      <div class="col-lg-4 p-4">
        <h5 class="mb-3">Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1">Twitter</i>
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1">instagram</i>
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1">Facebook</i>
          </span>
        </a>
      </div>
    </div>
  </div>





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      effect: "fade",
      loop: true,
      autoplay: {
        delay: 3500,
        disableOnInteraction: false,
      }
    });


    var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
  </script>

  

</body>

</html>