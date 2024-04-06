<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GP hotels - ROOMS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/common.css">

</head>

<body>

  <!------------------------------- Header ------------------------------------------------>
  <?php include 'header.php'; ?>
  <!------------------------------- header end -------------------------------------------->

  <div class="my-5 px-4">
    <h2 class="Fw-bold h-font text-center">OUR ROOMS</h2>
    <div class="h-line bg-dark"></div>
  </div>

  <!----------------------------------- FILTERs START ------------------------------------------------>

  <div class="continer">
    <div class="row">
      <div class="col-lg-3 col-md-12 mb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
          <div class="container-fluid flex-lg-column align-items-stretch">
            <h4 class="mt-2">FILTERS</h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterdropdown">
              <div class="border bg-light p-3 rounded mb-3">
                <h5 class="mb-3" style="font-size: 18px;">Check Avalibility</h5>
                <label class="form-label">Check-in</label>
                <input type="date" class="form-control shadow-none mb-3">
                <label class="form-label">Check-out</label>
                <input type="date" class="form-control shadow-none">
              </div>
            </div>
            <div class="border bg-light p-3 rounded mb-3">
              <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
              <div>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f1">Facility one</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f1">Facility Two</label>
                </div>
                <div class="mb-2">
                  <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
                  <label class="form-label" for="f1">Facility Three</label>
                </div>

                <div class="border bg-light p-3 rounded mb-3">
                  <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
                  <div class="d-flex">
                    <div class="me-3">
                      <label class="form-label">Adults</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                    <div>
                      <label class="form-label">Childern</label>
                      <input type="number" class="form-control shadow-none">
                    </div>
                  </div>

                </div>
              </div>
            </div>
        </nav>
      </div>

      <div class="col-lg-9 col-md-12 px-4 px-0">
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  2 Seater Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h5 class="mb-4">Facilities </h5>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Televison
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  A.C.
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Room Heater
                </span>
              </div>
              <div class="Guests">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
            </div>
            <div class="col-md-2 text-center">
            <h5 class="mb-4">₹500 per night </h5>
               <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
               <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  2 Seater Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h5 class="mb-4">Facilities </h5>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Televison
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  A.C.
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Room Heater
                </span>
              </div>
              <div class="Guests">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
            </div>
            <div class="col-md-2 text-center">
            <h5 class="mb-4">₹500 per night </h5>
               <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
               <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
        <div class="card mb-4 border-0 shadow">
          <div class="row g-0 p-3 align-items-center">
            <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
              <img src="image/rooms/1.jpg" class="img-fluid rounded">
            </div>
            <div class="col-md-5 px-lg-3 px-md-3 px-0">
              <h5 class="mb-3">Simple Room Name</h5>
              <div class="features mb-3">
                <h6 class="mb-1">features</h6>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  2 Seater Sofa
                </span>
              </div>
              <div class="facilities mb-3">
                <h5 class="mb-4">Facilities </h5>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Televison
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  A.C.
                </span>
                <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                  Room Heater
                </span>
              </div>
              <div class="Guests">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
            </div>
            <div class="col-md-2 text-center">
            <h5 class="mb-4">₹500 per night </h5>
               <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book Now</a>
               <a href="#" class="btn btn-sm w-100 btn-outline-dark shadow-none">More Details</a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>




  <!----------------------------------------- FILTERs END ------------------------------------->


  <!-- footer -->

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