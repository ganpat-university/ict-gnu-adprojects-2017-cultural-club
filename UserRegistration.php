<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
		<link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>New User - Cultural Club</title>
        <meta name="keywords" content="HTML5 Theme" />
        <meta name="description" content="Megakit - HTML5 Theme">
        <meta name="author" content="keenthemes.com">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER V2 ==========-->
        
        <!--========== END HEADER V2 ==========-->

        <!--========== START PAGE CONTENT ==========-->
        <!-- Form -->
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light"
        style="background-image: url('login/images/loginbg1.jpg'); padding-bottom: 25px; padding-top: 120px;">
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3">
                <div class="row">
                    <!-- Form -->
                    <!-- <div class="col-md-8 js__form-eqaul-height-v1"> -->
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">New User</h2>
                            <form id="ajax-contact" action="logindataU.php" class="form-group" name="sentMessage" method="post" enctype="multipart/form-data">
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-4" >
                                        <span style="font-size: 16px; padding-bottom: 15px;">FirstName*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="fname" placeholder="* Your FirstName" value="" required="">
                                    </div>

                                    <div class="col-sm-4">
                                        <span style="font-size: 16px; padding-bottom: 15px;">MiddleName*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="mname" placeholder="* Your MiddleName" value="" required="" >
                                    </div>

                                    <div class="col-sm-4" style="">
                                        <span style="font-size: 16px; padding-bottom: 15px;">LastName*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="lname" placeholder="* Your LastName" value="" required="" >
                                    </div>
                                </div>

                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6" >
                                        <span style="font-size: 16px; padding-bottom: 15px;">Birthdate (yyyy/mm/dd)*</span>
                                        <input type="date" class="form-control s-form-v4__input g-padding-l-0--xs" name="birthdate" placeholder="* Your Birthdate" value="" required="">
                                    </div>
									<div class="col-sm-6" >
                                        <span style="font-size: 16px; padding-bottom: 15px;">Semester(1 to 8)*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="semester" placeholder="* Your Semester" value="" required="">
                                    </div>
                                </div>
								
								
								
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">    
                                    <div class="col-sm-6">
                                        <span style="font-size: 16px; padding-bottom: 15px;">Mobile Number*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="no" placeholder="* Your Mobile Number" value="" required="" >
                                    </div>

                                    <div class="col-sm-6" style="">
                                        <span style="font-size: 16px; padding-bottom: 15px;"
                                        >Email ID*</span>
                                        <input type="email" class="form-control s-form-v4__input g-padding-l-0--xs" name="email" placeholder="* Your Email" value="" required="" >
                                    </div>
									
									<div class="col-sm-6" style="">
									<br>
                                        <span style="font-size: 16px; padding-bottom: 15px;"
                                        >Enrollment*</span>
                                        <input type="number" class="form-control s-form-v4__input g-padding-l-0--xs" name="enroll" placeholder="* Your Enrollment" value="" required="" >
                                    </div>
									
									<div class="col-sm-6" style="">
									<br>
                                       <span style="font-size: 16px; padding-bottom: 15px;"
                                        >*Branch</span>
                                        <select name="branch" class="form-control s-form-v4__input g-padding-l-0--xs" required="">
                                            <option value="cba">CBA</option>
                                            <option value="bda">BDA</option>
                                            <option value="ma">MA</option>
                                            <option value="cs">CS</option>
                                        </select>
                                    </div>
                                </div>
								
                                <div class="g-margin-b-50--xs">
                                    <span style="font-size: 16px; padding-bottom: 15px;"
                                        >Password*</span>
                                    <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="pass" placeholder="* Password" 
                                    value="" required="" >
                                </div>
                                
                                <div class="row" >
                                <div class="g-text-center--xs col-sm-3" ></div>
                                <div class="g-text-center--xs col-sm-6" >
                                    <button  type="submit" name="submit2" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs" >Insert</button>
                                    <a href="login.php" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Cancel</a>
                                </div>
                                </div>
                                    
                            </form>
                            <?php ?>
                        </div>
                   
                </div>
            </div>
        </div>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
       
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="vendor/jquery.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="vendor/masonry/jquery.masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="vendor/masonry/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.equal-height.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="js/global.min.js"></script>
        <script type="text/javascript" src="js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="js/components/swiper.min.js"></script>
        <script type="text/javascript" src="js/components/masonry.min.js"></script>
        <script type="text/javascript" src="js/components/equal-height.min.js"></script>
        <script type="text/javascript" src="js/components/parallax.min.js"></script>
        <script type="text/javascript" src="js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>