<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Mail Function

function sendmail()
{
    include 'src\PHPMailer.php';
    include 'src\Exception.php';
    include 'src\SMTP.php';
    // include 'src\OAuth.php';

    //Instantiation and passing `true` enables exceptions

    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = 2;                                       // Enable verbose debug output
        $mail->isSMTP();                                            // Set mailer to use SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'aderinsolaodusanya@gmail.com';         // SMTP username
        $mail->Password   = 'Aderinsola16';                         // SMTP password
        $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('aderinsolaodusanya@gmail.com', 'Admin');
        $mail->addAddress('aderinsolaodusanya@yahoo.com', 'User');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo('aderinsolaodusanya@gmail.com', 'Information');
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');

        // Attachments
        //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

        // Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Congratulations!!!';
        $mail->Body    = '<b>Dear customer you have been requested for</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'Request has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    return false;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Everything Fashion</title>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">

    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta Tags -->

    <!-- Style-sheets -->
    <!-- Bootstrap Css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap Css -->
    <!-- Common Css -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all" />
    <!--// Common Css -->
    <!-- Nav Css -->
    <link rel="stylesheet" href="css/style4.css">
    <!--// Nav Css -->
    <!-- Fontawesome Css -->
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/fontawesome.min.css" rel="stylesheet">
    <!--// Fontawesome Css -->
    <!--// Style-sheets -->

    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!--//web-fonts-->

    <!-- Database -->
    <?php include "config.php" ?>
    <!-- Database -->
</head>

<body>
    <div class="se-pre-con"></div>
    <div class="wrapper">
        <!-- Sidebar Holder -->


        <!-- Page Content Holder -->
        <div id="content">
            <!-- top-bar -->
            <nav class="navbar navbar-default mb-xl-5 mb-4">
                <div class="container-fluid">

                    <div class="navbar-header">

                    </div>
                    <!-- Search-from -->
                    <form action="#" method="post" class="form-inline mx-auto search-form">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" required="">
                        <button class="btn btn-style my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--// Search-from -->
                    <ul class="top-icons-agileits-w3layouts float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-"> Home</i>
                                <!-- <span class="badge">4</span> -->
                            </a>

                        </li>
                        <li class="nav-item dropdown mx-3">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-"> About Us </i>
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-"> Users</i>
                            </a>
                            <div class="dropdown-menu drop-3">

                                <a href="register.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="fas fa-link mr-3"></i>Register</h4>
                                </a>
                                <a href="login.php" class="dropdown-item mt-3">
                                    <h4>
                                        <i class="far fa-user mr-3"></i>Login</h4>
                                </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!--// top-bar -->
            <div class="container-fluid">

                <section class="cards-section">
                    <div class="card-columns">

                        <div class="card ">
                            <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Manicure & Pedicure</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#myModal">Make Request</button>
                                <!-- Modal -->
                                <div id="myModal" class="modal fade" role="dialog">
                                    <div class="modal-dialog modal-lg">

                                        <!-- Modal content-->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    <!-- <div class="main">-->
                                                    <div class="main-section agile" style=" width:100%; background:darkmagenta ">
                                                        <div class="login-form">
                                                            <form action="" method="post" id="form">
                                                                <ul>
                                                                    <li class="text-info">Full Name *</li>
                                                                    <input type="text" name="name" placeholder="" required="">
                                                                    <div class="clear"></div>
                                                                </ul>
                                                                <ul>
                                                                    <li class="text-info">Email ID *</li>
                                                                    <li><input type="text" name="email" placeholder="" required=""></li>
                                                                    <div class="clear"></div>
                                                                </ul>
                                                                <ul>
                                                                    <li class="text-info">Phone Number *</li>
                                                                    <li><input type="text" placeholder="" name="number" required=""></li>
                                                                    <div class="clear"></div>
                                                                </ul>
                                                                <ul>
                                                                    <li class="text-info">Departure Date/Time *</li>
                                                                    <li class="dat"><input class="date" id="datepicker" type="text" name="date" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=""></li>
                                                                    <li class="selec"><select class="currentTime time-dropdown form-dropdown validate[required, limitDate]" id="hour_15" name="time">
                                                                            <option> Hr </option>
                                                                            <option value="1"> 1 </option>
                                                                            <option value="2"> 2 </option>
                                                                            <option value="3"> 3 </option>
                                                                            <option value="4"> 4 </option>
                                                                            <option value="5"> 5 </option>
                                                                            <option value="6"> 6 </option>
                                                                            <option value="7"> 7 </option>
                                                                            <option value="8"> 8 </option>
                                                                            <option value="9"> 9 </option>
                                                                            <option value="10"> 10 </option>
                                                                            <option value="11"> 11 </option>
                                                                            <option value="12"> 12 </option>
                                                                        </select>
                                                                        <select class="time-dropdown form-dropdown validate[required, limitDate]" id="min_15" name="time">
                                                                            <option> Min</option>
                                                                            <option value="00"> 00 </option>
                                                                            <option value="10"> 10 </option>
                                                                            <option value="20"> 20 </option>
                                                                            <option value="30"> 30 </option>
                                                                            <option value="40"> 40 </option>
                                                                            <option value="50"> 50 </option>
                                                                        </select>
                                                                        <select class="time-dropdown form-dropdown validate[required, limitDate]" id="ampm_15" name="time">
                                                                            <option value="AM"> AM </option>
                                                                            <option value="PM"> PM </option>
                                                                        </select></li>
                                                                    <div class="clear"></div>
                                                                </ul>

                                                                <!---start-date-piker---->
                                                                <link rel="stylesheet" href="css/jquery-ui.css" />
                                                                <script src="js/jquery-ui.js"></script>
                                                                <script>
                                                                    $(function() {
                                                                        $("#datepicker,#datepicker1").datepicker();
                                                                    });
                                                                </script>
                                                                <!---/End-date-piker---->
                                                                <ul>
                                                                    <li class="text-info">Destination Address *</li>
                                                                    <li><input id="autocomplete" name="address" onFocus="geolocate()" type="text" class="form-control" required="
                                                                     "></li>
                                                                    <div class="clear"></div>
                                                                </ul>



                                                                <button type="submit" class="btn btn-default" name="enter">Submit</button>
                                                                <div class="clear"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <!--  </div> -->
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- Modal -->
                            </div>
                        </div>


                        <div class="card ">
                            <img class="card-img-top" src="images/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Manicure & Pedicure</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#exampleModal2">Make Request</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="paragraph-agileits-w3layouts my-3"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                        </div>



                        <div class="card ">
                            <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">MakeUp & Gele</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#exampleModal2">Make Request</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="paragraph-agileits-w3layouts my-3"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                        </div>

                        <div class="card ">
                            <img class="card-img-top" src="images/4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Manicure & Pedicure</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#exampleModal2">Make Request</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="paragraph-agileits-w3layouts my-3"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                        </div>

                        <div class="card ">
                            <img class="card-img-top" src="images/5.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Manicure & Pedicure</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#exampleModal2">Make Request</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="paragraph-agileits-w3layouts my-3"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                        </div>

                        <div class="card ">
                            <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">Fashion Designer</h5>
                                <p class="card-text">This is a loger card with supporting text below as a natural lead-in to additional content.
                                    This content is a little bit longer.</p>
                                <button class="btn more mt-3" data-toggle="modal" data-target="#exampleModal2">Make Request</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel3">Title goes here</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="paragraph-agileits-w3layouts my-3"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /Modal -->
                            </div>
                        </div>


                    </div>
                </section>



                <!-- Copyright -->
                <div class="copyright-w3layouts py-xl-3 py-2 mt-xl-5 mt-4 text-center">
                    <p>© 2018 Modernize . All Rights Reserved | Design by
                        <a href="http://w3layouts.com/"> W3layouts </a>
                    </p>
                </div>
                <!--// Copyright -->

            </div>


            <script>
                // This sample uses the Autocomplete widget to help the user select a
                // place, then it retrieves the address components associated with that
                // place, and then it populates the form fields with those details.
                // This sample requires the Places library. Include the libraries=places
                // parameter when you first load the API. For example:
                // <script
                // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

                var placeSearch, autocomplete;

                var componentForm = {
                    street_number: 'short_name',
                    route: 'long_name',
                    locality: 'long_name',
                    administrative_area_level_1: 'short_name',
                    country: 'long_name',
                    postal_code: 'short_name'
                };

                function initAutocomplete() {
                    // Create the autocomplete object, restricting the search predictions to
                    // geographical location types.
                    autocomplete = new google.maps.places.Autocomplete(
                        document.getElementById('autocomplete'), {
                            types: ['geocode']
                        });

                    // Avoid paying for data that you don't need by restricting the set of
                    // place fields that are returned to just the address components.
                    autocomplete.setFields('address_components');

                    // When the user selects an address from the drop-down, populate the
                    // address fields in the form.
                    autocomplete.addListener('place_changed', fillInAddress);
                }

                function fillInAddress() {
                    // Get the place details from the autocomplete object.
                    var place = autocomplete.getPlace();

                    for (var component in componentForm) {
                        document.getElementById(component).value = '';
                        document.getElementById(component).disabled = false;
                    }

                    // Get each component of the address from the place details,
                    // and then fill-in the corresponding field on the form.
                    for (var i = 0; i < place.address_components.length; i++) {
                        var addressType = place.address_components[i].types[0];
                        if (componentForm[addressType]) {
                            var val = place.address_components[i][componentForm[addressType]];
                            document.getElementById(addressType).value = val;
                        }
                    }
                }

                // Bias the autocomplete object to the user's geographical location,
                // as supplied by the browser's 'navigator.geolocation' object.
                function geolocate() {
                    if (navigator.geolocation) {
                        navigator.geolocation.getCurrentPosition(function(position) {
                            var geolocation = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude
                            };
                            var circle = new google.maps.Circle({
                                center: geolocation,
                                radius: position.coords.accuracy
                            });
                            autocomplete.setBounds(circle.getBounds());
                        });
                    }
                }
            </script>
            <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBEIBGVwxHWXQN3sngSdUeN_zmFlr3fBJU&libraries=places&callback=initAutocomplete" async defer></script>



            <!-- Required common Js -->
            <script src='js/jquery-2.2.3.min.js'></script>
            <!-- //Required common Js -->

            <!-- loading-gif Js -->
            <script src="js/modernizr.js"></script>
            <script>
                //paste this code under head tag or in a seperate js file.
                // Wait for window load
                $(window).load(function() {
                    // Animate loader off screen
                    $(".se-pre-con").fadeOut("slow");;
                });
            </script>
            <!--// loading-gif Js -->

            <!-- Sidebar-nav Js -->
            <script>
                $(document).ready(function() {
                    $('#sidebarCollapse').on('click', function() {
                        $('#sidebar').toggleClass('active');
                    });
                });
            </script>
            <!--// Sidebar-nav Js -->



            <!-- profile-widget-dropdown js-->
            <script src="js/script.js"></script>
            <!--// profile-widget-dropdown js-->

            <!-- Count-down -->
            <script src="js/simplyCountdown.js"></script>
            <link href="css/simplyCountdown.css" rel='stylesheet' type='text/css' />
            <script>
                var d = new Date();
                simplyCountdown('simply-countdown-custom', {
                    year: d.getFullYear(),
                    month: d.getMonth() + 2,
                    day: 25
                });
            </script>
            <!--// Count-down -->



            <!-- dropdown nav -->
            <script>
                $(document).ready(function() {
                    $(".dropdown").hover(
                        function() {
                            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                            $(this).toggleClass('open');
                        },
                        function() {
                            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                            $(this).toggleClass('open');
                        }
                    );
                });
            </script>
            <!-- //dropdown nav -->

            <!-- Js for bootstrap working-->
            <script src="js/bootstrap.min.js"></script>
            <!-- //Js for bootstrap working -->
            <!-- Booking Js -->
            <script src="js/jquery-1.12.0.min.js"></script>

            <!-- //Booking js -->

</body>

</html>