<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    
     <!-------------------------------------- NAVBAR START ----------------------------------------->



    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">GP hotels</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="rooms.php">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="facilities.php">Facilities</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="cabservices.php">Cab services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="contact.php">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link me-2" href="about.php">About</a>
                    </li>

                     <!------------------------------ NAVBAR END ------------------------------------>


                      <!--------------------------- LOGIN START ------------------------------------->

                </ul>
                <div class="d-flex">


                    <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodel">
                        Login
                    </button>

                    <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodel">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="loginmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title d-flex align-items-center">User Login</h5>
                        <i class="bi bi-person-circle fs-3 me-2"></i>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-4">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="password" class="form-control shadow-none">
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <button type="submit" class="btn btn-dark shadow-none">LOGIN</button>
                            <a href="javascript: void(0)"> Forgot password</a>
                        </div>
                    </div>
            </div>

            </form>
             <!---------------------------- LOGIN END ---------------------------->

        </div>
    </div>
    </div>

         <!--------------------------REGISTRATION START -------------------------->

    <div class="modal fade" id="registermodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">...</div>
        <div class="modal-content">
            <form>
                <div class="modal-header">

                    <h5 class="modal-title d-flex align-items-center">User Registration</h5>
                    <i class="bi bi-person-circle fs-3 me-2"></i>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <span class="badge rounded-pill bg-light text-dark mb-3 text-warp lh-base">
                        Note: Your details must match with your ID(Aadhar card, passport, driving license, etc)
                        that will be required during check-in.
                    </span>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="name" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Do you want parking space</label><br>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                <label for="vehicle1"> I have a bike</label><br>
                                <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                                <label for="vehicle2"> I have a car</label><br>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Phone no.</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Photo</label>
                                <input type="file" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">address</label>
                                <input type="text" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Pin code</label>
                                <input type="number" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                            <div class="col-md-6">
                                <label for="exampleInputEmail1" class="form-label">Confirm password</label>
                                <input type="password" class="form-control shadow-none">
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="text-center my-1">
            <button type="submit" class="btn btn-dark shadow-none"> REGISTER</BUTTON>
        </div>
    </div>
</body>
<!--------------------------REGISTRATION END -------------------------->

</html>