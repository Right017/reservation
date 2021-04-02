<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css"
        rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <title>Perticuler Restourent page</title>

    <style>
    ul {
        list-style-type: none;
    }

    .form-group {
        margin-bottom: 0px;
    }

    table {
        border: none;
    }

    tbody {
        border-bottom: none;
    }

    th {
        border-bottom: none;
    }

    tr {
        border-bottom: none;
    }
    </style>
    <style>
    html {
        scroll-behavior: smooth;
    }

    #myBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 20px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: red;
        /* Set a background color */
        color: white;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 15px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 18px;
        /* Increase font size */

    }

    #myBtn:hover {
        background-color: #555;
        /* Add a dark-grey background on hover */
    }
    </style>
</head>

<body>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4 bg-light pl-2">LOGO
            <small class="py-1">Resto name</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">

                <!-- Navbar start here -->
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://source.unsplash.com/2400x1450/?pasta,food"
                                alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://source.unsplash.com/2400x1450/?food,Desserts"
                                alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://source.unsplash.com/2400x1450/?pizza,burger"
                                alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- Navbar end here -->

                <h3 class="my-3">Restaurant Information</h3>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida
                    pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus.
                    Mauris ultricies, justo eu convallis placerat, felis enim.</p>


                <div class="row d-flex justify-content-around mx-4">

                    <div class="col-6">
                        <h3 class="my-3">Restaurant Details</h3>
                        <ul>
                            <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Desserts</i></li>
                            <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Fast Food</i></li>
                            <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Finger Food</i></li>
                            <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Italian</i></li>
                            <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Asian</i></li>
                        </ul>

                    </div>

                    <div class="col-6">
                        <h3 class="my-3">Restaurant Features</h3>
                        <ul>
                            <li><i class="icon-tag">&nbsp;&nbsp;&nbsp;Air Condition</i></li>
                            <li><i class="icon-tag">&nbsp;&nbsp;&nbsp;Nightlife</i></li>
                            <li><i class="icon-tag">&nbsp;&nbsp;&nbsp;Wheelchair Accessible</i></li>
                            <li><i class="icon-tag">&nbsp;&nbsp;&nbsp;Buffet</i></li>
                            <li><i class="icon-tag">&nbsp;&nbsp;&nbsp;Live Sports Screening</i></li>
                        </ul>

                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <h3 class="my-3 text-center">RESERVE A TABLE</h3>
                <hr>

                <!-- Form start here -->
                <form action="">
                    <?php 
                        include 'reservation_table.php';
                    ?>
                </form>
                <!-- form ends here -->
            </div>

        </div>
        <!-- /.row -->

        <div class="card my-4">
            <div class="card-header">
                <h3><i class="icon-lightbulb">&nbsp;&nbsp;Insider Tips</i></h3>
            </div>
            <div class="card-body">
                <ul>
                    <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;Reserve a table next to the window overlooking the
                            Lotus pond</i></li>
                    <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;If yopu happen to visit this place for breakfast
                            then, you must try the 'freshly-baked croissants'</i></li>
                    <li><i class="icon-hand-right">&nbsp;&nbsp;&nbsp;This is just the place to be on Sunday as you can
                            savour mouth watering preparations and a wide variety
                            of delicious dishes served during the 'Brunch'</i></li>
                </ul>
            </div>
        </div>


        <div class="row">

        </div>
    </div>
    <!-- GAllary -->




    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h3 class="my-3">GALLARY</h3>
                <hr>

            </div>
            <div class="row col-md-8">
                <div class="col-lg-4  mb-4 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain1.jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain2.jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(73).jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>

                <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />

                    <img src="https://mdbootstrap.com/img/Photos/Vertical/mountain3.jpg"
                        class="w-100 shadow-1-strong rounded mb-4" alt="" />
                </div>

            </div>
            <!-- Gallery -->

            <!-- Oppening Days -->
            <div class="col-md-4 mx-auto" style="margin-top: -82px;">
                <h3 class="my-3 text-center">OPENING DAYS</h3>
                <hr>
                <table class="table table-borderless text-center">

                    <tbody>
                        <tr>
                            <th scope="row" style="text-align: center;">DAY</th>
                            <th scope="row" style="text-align: center;">TIME</th>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Monday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Tuesday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Thursday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Friday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Saturday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">Sunday</td>
                            <td style="text-align: center;">9am-10pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- Oppenign days End-->
        </div>
    </div>


    <?php
        include 'services_card.php';
  ?>

    <br><br>
    <!-- SLider card here -->
    <div class="container mt-4">
        <h4>Similar Restaurants</h4>
        <hr>
        <div class="row ">
            <!-- Navbar start here -->
            <div id="carouselExampleControl" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="card col mx-2  rounded" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Breakfast</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Breakfast</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Launch</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Launch</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Snacks</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Snacks</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Dinner</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Dinner</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="card col mx-2  rounded" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Breakfast</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Breakfast</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Launch</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Launch</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Snacks</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Snacks</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Dinner</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Dinner</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="card col mx-2  rounded" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Breakfast</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Breakfast</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Launch</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Launch</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Snacks</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Snacks</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>

                            <div class="card col mx-2" style="width: 18rem;">
                                <img src="img/1.jpg" class="card-img-top pt-2" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Dinner</h2>
                                    <hr>
                                    <p class="card-text">
                                    <h5>Look restaurent for best Dinner</h5>
                                    </p>
                                    <a href="#" class="btn btn-primary">
                                        <h5>View</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControl" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControl" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- slider card ends here-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


    </div>
    <!-- /.container -->

    <?php
        include'foot.php';
    ?>

    <script>
    //Get the button:
    mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>