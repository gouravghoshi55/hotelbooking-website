 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>GP hotels - HOME</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
   <link rel="stylesheet" href="css/common.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
   <style>
     .availability-form {
       margin-top: -50;
       z-index: 2;
       position: relative;
     }

     @media screen and (max-width:575px) {
       .availability-form {
         margin-top: 25px;
         padding: 0 35px;
       }
     }
   </style>
 </head>

 <body>

   <!------------------------------------ Header ------------------------------------------->
   <?php include 'header.php'; ?>
   <!------------------------------------ carosel------------------------------------------------>

   <div class="container-fluid px-lg-4 mt-4">
     <div class="swiper mySwiper">
       <div class="swiper-wrapper">
         <div class="swiper-slide">
           <img src="image/carousel/IMG_40905.png" class="w-100 d-block">
         </div>
         <div class="swiper-slide">
           <img src="image/carousel/IMG_62045.png" class="w-100 d-block">
         </div>
         <div class="swiper-slide">
           <img src="image/carousel/IMG_99736.png" class="w-100 d-block">
         </div>
         <div class="swiper-slide">
           <img src="image/carousel/IMG_55677.png" class="w-100 d-block">
         </div>
       </div>
       <div class="swiper-button-next"></div>
       <div class="swiper-button-prev"></div>
       <div class="swiper-pagination"></div>
     </div>
   </div>


   <!-------------------------------- check availability form ---------------------------------->

   
   <div class="container availability-form">
     <div class="row">
       <div class="col-lg-12 bg-white shadow p-4 rounded">
         <h5 class="ab-4">Check booking Availability</h5>
         <form>
           <div class="row align-items-end">
             <div class="col-lg-3 mb-3">
               <label class="form-label" style="font-weight: 500;">Check-in</label>
               <input type="date" class="form-control shadow-none">
             </div>
             <div class="col-lg-3 mb-3">
               <label class="form-label" style="font-weight: 500;">Check-out</label>
               <input type="date" class="form-control shadow-none">
             </div>
             <div class="col-lg-3 mb-3">
               <label class="form-label" style="font-weight: 500;">Adult</label>
               <select class="form-select shadow-none">
                 <option selected>Open this select menu</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
             </div>
             <div class="col-lg-3 mb-3">
               <label class="form-label" style="font-weight: 500;">Children</label>
               <select class="form-select shadow-none">
                 <option selected>Open this select menu</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
               </select>
             </div>
             <div class="col-lg-1 mb-lg-3 mt-2">
               <button type="submit" class="btn text-white shadow-none custom-bg ">Submit</button>
             </div>
           </div>
       </div>
       </form>
     </div>
   </div>
   </div>



   <!--------------------------------------     Rooms   ------------------------------------------------------>



   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR ROOMS</h2>

   <div class="container">
     <div class="row">
       <div class="col-lg-4 col-md-6 my-3">
         <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
           <img src="image/rooms/1.jpg" class="card-img-top" alt="...">

           <div class="card-body">
             <h5>Simple Room </h5>
             <h5 class="mb-4">₹500 per night </h5>
             <div class="features mb-4">
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
             <div class="facilities mb-4">
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
             <div class="Guests mb-4">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Ratings</h6>
               <span clss="badge rounded-pill bg-light">
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 my-3">
         <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
           <img src="image/rooms/2.jpg" class="card-img-top" alt="...">

           <div class="card-body">
             <h5>Super Room </h5>
             <h5 class="mb-4">₹700 per night </h5>
             <div class="features mb-4">
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
                 1 Soofa
               </span>
             </div>
             <div class="facilities mb-4">
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
             <div class="Guests mb-4">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Ratings</h6>
               <span clss="badge rounded-pill bg-light">
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-6 my-3">
         <div class="card border-0 shadow-none" style="max-width: 350px; margin:auto;">
           <img src="image/rooms/3.jpg" class="card-img-top" alt="...">

           <div class="card-body">
             <h5> Delux room </h5>
             <h5 class="mb-4">₹900 per night </h5>
             <div class="features mb-4">
               <h6 class="mb-1">features</h6>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 1 Master Rooms
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 1 Bathroom
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 1 Balcony
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 3 Soofa
               </span>
             </div>
             <div class="facilities mb-4">
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
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 Laundary
               </span>
             </div>
             <div class="Guests mb-4">
               <h5 class="mb-4">Guests</h5>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 5 Adults
               </span>
               <span class="badge rounded-pill bg-light text-dark mb-3 text-warp">
                 4 children
               </span>
             </div>
             <div class="rating mb-4">
               <h6 class="mb-1">Ratings</h6>
               <span clss="badge rounded-pill bg-light">
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
                 <i class="bi bi-star-fill text-warning"></i>
               </span>
             </div>
             <div class="d-flex justify-content-evenly mb-2">
               <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
               <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More Details</a>
             </div>
           </div>
         </div>
       </div>



       <div class="col-lg-12 text-center mt-5">
         <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">MORE ROOMS >>></a>
       </div>
     </div>
   </div>



   <!-------------------------------------------------our facilities----------------------------------------------------->



   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">OUR FACILITIES</h2>

   <div class="container">s
     <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
         <img src="image/features/wifi.png" width="80px">
         <h5 class="mt-3">Wifi</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
         <img src="image/features/2.png" width="80px">
         <h5 class="mt-3">Smart parking</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
         <img src="image/features/3.png" width="80px">
         <h5 class="mt-3">Cab Service </h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
         <img src="image/features/4.png" width="80px">
         <h5 class="mt-3">Room heater</h5>
       </div>
       <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3">
         <img src="image/features/5.png" width="80px">
         <h5 class="mt-3">Televison</h5>
       </div>
       <div class="col-lg-12 text-center md-5">
         <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none">MORE FACILITIES >>></a>
       </div>
     </div>
   </div>



   <!------------------------------------------      Testimonials    -------------------------------------------------->




   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">TESTIMONIALS</h2>
   <div class="container">
     <div class="swiper swiper-testimonials">
       <div class="swiper-wrapper">


         <div class="swiper-slide bg-white mb-0">
           <div class="profile d-flex align-items-center p-4">
             <img src="image/features/wifi.png" width="30px">
             <h6 class="m-0 ms-2">Random user 1</h6>
           </div>
           <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Atque minima omnis eaque rerum dolores magnam
             libero tenetur optio ab? Numquam?
           </p>
           <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </div>
         </div>
         <div class="swiper-slide bg-white mb-0">
           <div class="profile d-flex align-items-center p-4">
             <img src="image/features/wifi.png" width="30px">
             <h6 class="m-0 ms-2">Random user 1</h6>
           </div>
           <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Atque minima omnis eaque rerum dolores magnam
             libero tenetur optio ab? Numquam?
           </p>
           <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </div>
         </div>
         <div class="swiper-slide bg-white mb-0">
           <div class="profile d-flex align-items-center p-4">
             <img src="image/features/wifi.png" width="30px">
             <h6 class="m-0 ms-2">Random user 1</h6>
           </div>
           <p>
             Lorem ipsum dolor sit amet consectetur adipisicing elit.
             Atque minima omnis eaque rerum dolores magnam
             libero tenetur optio ab? Numquam?
           </p>
           <div class="rating">
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
             <i class="bi bi-star-fill text-warning"></i>
           </div>
         </div>

       </div>
       <div class="swiper-pagination"></div>
     </div>
   </div>
   <div class="col-lg-12 text-center md-5">
     <a href="#" class="btn btn-outline-dark rounded-0 fw-bold shadow-none"> KNOW MORE >>></a>
   </div>



   <!------------------------------------   Reach us    ----------------------------------------->



   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">REACH US</h2>
   <div class="container">
     <div class="row">
       <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
         <iframe class="w-100" src="https://www.google.com/maps/d/embed?mid=1CyDLpFkhj9U21GWYYjbbK6FVs6o&hl=en_US&ehbc=2E312F" height="480"></iframe>

       </div>
       <div class="col-lg-4 col-md-4 ">
         <div class="bg-white p-4 rounded mb-4">
           <h5>Call us</h5>
           <a href="tel:+917489325064" class="d-inline-block mb-2 text-decoration-none text-dark">
             <i class="bi bi-telephone-fill"></i>+917489325064</a>
           <br>
           <a href="tel:+917489325064" class="d-inline-block  text-decoration-none text-dark">
             <i class="bi bi-telephone-fill"></i>+917489325064</a>
         </div>

       </div>
     </div>
   </div>



   <!--------------------------      footer ----------------------------------------------->



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
         delay: 1000,
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