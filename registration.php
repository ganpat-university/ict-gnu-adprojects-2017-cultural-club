<?php
session_start();
	$enroll = 	$_SESSION['enroll'];
	$mnam = 	$_SESSION['mname'];
	$emai = 	$_SESSION['email'];
	$mo=		$_SESSION['mob'];
	$sem=		$_SESSION['seme'];
	$br=		$_SESSION['bran'];
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Registration Events- Cultural Club</title>
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
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== HEADER V2 ==========-->
        <?php include("header.php");?>
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
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Event Registration</h2>
                            <form id="ajax-contact" action="logindataU.php" class="form-group" name="sentMessage" method="post" enctype="multipart/form-data">
							<div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6" >
										 <span style="font-size: 16px; padding-bottom: 15px;"
                                        >*Enrollment Number</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="enroll" value="<?php echo $enroll; ?>" placeholder="* Your Enrollment Number" required="">
                                    </div>
                                    <div class="col-sm-6" >
									 <span style="font-size: 16px; padding-bottom: 15px;"
                                        >*Name</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="mname"  value="<?php echo $mnam; ?>" placeholder="* Your Name" required="">
                                    </div>
                            </div>

                                <div class="row g-margin-b-30--xs g-margin-b-50--md">    
                                    
                                    <div class="col-sm-6" >
                                        <span style="font-size: 16px; padding-bottom: 15px;">Branch*</span>
                                        <input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="branch" placeholder="* Your Branch" value="<?php echo $br; ?>" required="">
                                    </div>
                                    <div class="col-sm-6">
                                        <span style="font-size: 16px; padding-bottom: 15px;">Semester(1 to 8)*</span>
                                        <input type="" class="form-control s-form-v4__input g-padding-l-0--xs" name="semester" placeholder="* Your Semester" value="<?php echo $sem; ?>" required="">
                                    </div>
                                </div>
									
								 <div class="row g-margin-b-30--xs g-margin-b-50--md">    
									
									<div class="col-sm-6" >
									 <span style="font-size: 16px; padding-bottom: 15px;"
                                        >*Email</span>
                                        <input type="email" class="form-control s-form-v4__input g-padding-l-0--xs" name="email" value="<?php echo $emai; ?>" placeholder="* Your Email" required="" >
                                    </div>
									<div class="col-sm-6">
									 <span style="font-size: 16px; padding-bottom: 15px;"
                                        >*Mobile Number</span>
										<input type="text" class="form-control s-form-v4__input g-padding-l-0--xs" name="no" value="<?php echo $mo; ?>" placeholder="* Your Mobile Number" required="" >
									</div>
                                </div>
                                
                                 <div class="row g-margin-b-30--xs g-margin-b-50--md">    
                                    
                                    <div class="col-sm-6" >
                                        <span style="font-size: 16px; padding-bottom: 15px;">*On Stage Events</span><br/>
                                        <select name="sevent" class="form-control s-form-v4__input g-padding-l-0--xs" required="">
											<option value="Dance(Solo)" name="e1">Dance(Solo)</option>
                                            <option value="Dance(Group)" name="e2">Dance(Group)</option>
                                            <option value="Dance(Duet)" name="e3">Dance(Duet)</option>
                                            <option value="Singing(Solo)" name="e4">Singing(Solo)</option>
                                            <option value="Singing(Group)" name="e5">Singing(Group)</option>
                                            <option value="Drama" name="e6">Drama</option>
                                            <option value="Stand Up Comedy" name="e7">Stand Up Comedy</option>
                                            <option value="Fashion Show" name="e8">Fashion Show</option>
											<option value="None" name="e13">None</option>
										</select>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <span style="font-size: 16px; padding-bottom: 15px;">*On Campus Events</span><br/>
										<select name="cevent" class="form-control s-form-v4__input g-padding-l-0--xs" required="">
											<option value="Food Chaos" name="e9">Food Chaos</option>
                                            <option value="Marketing" name="e10">Marketing</option>
                                            <option value="Bollywood Quiz" name="e11">Bollywood Quiz</option>
					<option value="1 Min Game" name="e12">1 Min Game</option>
											<option value="None" name="e13">None</option>
                						</select>
                                    </div>
                                </div>
                                <!-- <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-10 form-group">
                                
                                Nature of Business :&nbsp;&nbsp;&nbsp; 
                                <input type="checkbox" value="Whole saler" name="exp_franchisee[]" />Whole saler &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Semi Whole saler" name="exp_franchisee[]" />Semi Whole saler &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Retailer" name="exp_franchisee[]" />Retailer &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Catering Industry" name="exp_franchisee[]" />Catering Industry &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Distribution" name="exp_franchisee[]" />Distribution &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Food Industry" name="exp_franchisee[]" />Food Industry &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Ready to Eat" name="exp_franchisee[]" />Ready to Eat Industry &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Import/Export" name="exp_franchisee[]" />Import/Export &nbsp;&nbsp;&nbsp;
                                <input type="checkbox" value="Others(specify)" name="exp_franchisee[]" />Others(specify) &nbsp;&nbsp;&nbsp;
                            </div>
                            
                            </div> -->
                                <div class="row" >
                                <div class="g-text-center--xs col-sm-3" ></div>
                                <div class="g-text-center--xs col-sm-6" >
                                    <button  type="submit" name="submit4" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs" >Submit</button>
                                    
                                    <button type="reset" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Clear</button>
                                </div>
                                </div>
                                    
                            </form>
                        </div>
                   
                </div>
            </div>
        </div>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->

        <!--========== FOOTER ==========-->
        <?php include("footer.php");?>
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
