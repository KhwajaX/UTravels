<?php 
$errors = '';
$myemail = 'help@gandharvholidays.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "Error: Name, Email and Message fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$subject = isset($_POST['subject']) ? $_POST['subject'] : "";
$message = $_POST['message'];
$website = isset($_POST['website']) ? $_POST['website'] : "";

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "<br />Error: Invalid email address";
}

if( empty($errors))
{
    $to = $myemail; 
    $email_subject = "Contact form submission" . (empty($subject) ? "" : ": " . $subject);
    $email_body = "You have received a new message. ".
    " Here are the details:\n\nName: $name \nEmail: $email_address " . (empty($website) ? "" : "\nWebsite: " . $website) . "\nMessage: \n\n$message"; 
    
    $headers = "From: $myemail\n"; 
    $headers .= "Reply-To: $email_address";
    
    mail($to,$email_subject,$email_body,$headers);

    $success_msg = "Your message successfully sent!";
} 
?>

<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Travelo | Responsive HTML5 Travel Template</title>
    
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Travelo | Responsive HTML5 Travel Template">
    <meta name="author" content="SoapTheme">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    
    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">
    
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">
    
    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->
    
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body>
    <div id="page-wrapper">
        <header id="header" class="navbar-static-top style7">
            
            <a href="#mobile-menu-01" data-toggle="collapse" class="mobile-menu-toggle">
                Mobile Menu Toggle
            </a>
                        
            <div class="main-navigation">
                <div class="container">
                    <h1 class="logo navbar-brand">
                        <a href="index.html" title="Gandharv Holidays - home">
                            <img src="images/logo.png" />
                        </a>
                    </h1>
                    
                    <ul class="social-icons style2 clearfix pull-right visible-lg">
                        <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                        <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                        <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                        <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                        <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                    </ul>
                    <nav id="main-menu" role="navigation">
                        <ul class="menu">
                            <li class="menu-item-has-children">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="menu-item-has-children megamenu-menu">
                                <a href="gallery.html">Domestic Tours</a>
                                <div class="megamenu-wrapper container" data-items-per-column="8">
                                    <div class="megamenu-holder">
                                        <ul class="megamenu">
                                            <li class="menu-item-has-children">
                                                <a href<="#">North India Tours</a>
                                                <ul class="clearfix">
                                                    <li><a href="nat_jp-agra-math.html">Jaipur Agra Mathura</a></li>
                                                    <li><a href="nat_dli-manali.html">Delhi & Manali</a></li>
                                                    <li><a href="nat_dli-sml.html">Delhi & Shimla</a></li>
                                                    <li><a href="nat_hw-rishik.html">Haridwar Rishikesh</a></li>
                                                    <li><a href="gallery.html">More..</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">South India Tours</a>
                                                <ul class="clearfix">
                                                    <li><a href="nat_hyb.html">Hyderabad Tour</a></li>
                                                    <li><a href="nat_sbc.html">Bangalore Tour</a></li>
                                                    <li><a href="nat_mys-ooty-conr.html">Mysoor & Ooty</a></li>
                                                    <li><a href="nat_tpati-tmala.html">Tirupati</a></li>
                                                    <li><a href="gallery.html">More..</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">East India Tours</a>
                                                <ul class="clearfix">
                                                    <li><a href="nat_maavaishno.html">Mata Vaishno Devi</a></li>
                                                    <li><a href="nat_jp-agra-math.html">Jaipur & Agra</a></li>
                                                    <li><a href="nat_jp-ajm-push.html">Ajmer & Pushkar</a></li>
                                                    <li><a href="nat_muss-rk-hd.html">Mussoorie & Rishikesh</a></li>
                                                    <li><a href="gallery.html">More..</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-has-children">
                                                <a href="#">West India Tours</a>
                                                <ul class="clearfix">
                                                    <li><a href="nat_jp-pink.html">Jaipur Pink City</a></li>
                                                    <li><a href="nat_asr-kkde.html">Amritsar-kurukshetra</a></li>
                                                    <li><a href="nat_jim-nat-park.html">Jim National Park</a></li>
                                                    <li><a href="nat_jp-ajm-push.html">Jaipur Ajmer Pushkar</a></li>
                                                    <li><a href="gallery.html">More..</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                           
                            <li class="menu-item-has-children">
                                <a href="international.html">International Tour</a>
                                <ul>
                                    <li><a href="int_aus.html">Australia</a></li>
                                    <li><a href="int_dubai.html">Dubai</a></li>
                                    <li><a href="int_europe.html">Europe</a></li>
                                    <li><a href="int_franc.html">France</a></li>
                                    <li><a href="int_hong.html">Hong Kong</a></li>
                                    <li><a href="int_malay.html">Malayasia</a></li>
                                    <li><a href="int_mald.html">Maldieves</a></li>
                                    <li><a href="int_maur.html">Mauritius</a></li>
                                    <li><a href="int_sing.html">Singapore</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="about-us.html">Our Team</a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="contact-us.html">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            
            <nav id="mobile-menu-01" class="mobile-menu collapse">
                <ul id="mobile-primary-menu" class="menu">
                    <li class="menu-item-has-children">
                        <a href="index.html">Home</a>
                        <ul>
                            <li><a href="index.html">Home Layout 1</a></li>
                            <li><a href="homepage2.html">Home Layout 2</a></li>
                            <li><a href="homepage3.html">Home Layout 3</a></li>
                            <li><a href="homepage4.html">Home Layout 4</a></li>
                            <li><a href="homepage5.html">Home Layout 5</a></li>
                            <li><a href="homepage6.html">Home Layout 6</a></li>
                            <li><a href="homepage7.html">Home Layout 7</a></li>
                            <li><a href="homepage8.html">Home Layout 8</a></li>
                            <li><a href="homepage9.html">Home Layout 9</a></li>
                            <li><a href="homepage10.html">Home Layout 10</a></li>
                            <li><a href="homepage11.html">Home Layout 11</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="hotel-index.html">Hotels</a>
                        <ul>
                            <li><a href="hotel-index.html">Home Hotels</a></li>
                            <li><a href="hotel-list-view.html">List View</a></li>
                            <li><a href="hotel-grid-view.html">Grid View</a></li>
                            <li><a href="hotel-block-view.html">Block View</a></li>
                            <li><a href="hotel-detailed.html">Detailed</a></li>
                            <li><a href="hotel-booking.html">Booking</a></li>
                            <li><a href="hotel-thankyou.html">Thank You</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="flight-index.html">Flights</a>
                        <ul>
                            <li><a href="flight-index.html">Home Flights</a></li>
                            <li><a href="flight-list-view.html">List View</a></li>
                            <li><a href="flight-grid-view.html">Grid View</a></li>
                            <li><a href="flight-block-view.html">Block View</a></li>
                            <li><a href="flight-detailed.html">Detailed</a></li>
                            <li><a href="flight-booking.html">Booking</a></li>
                            <li><a href="flight-thankyou.html">Thank You</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="car-index.html">Cars</a>
                        <ul>
                            <li><a href="car-index.html">Home Cars</a></li>
                            <li><a href="car-list-view.html">List View</a></li>
                            <li><a href="car-grid-view.html">Grid View</a></li>
                            <li><a href="car-block-view.html">Block View</a></li>
                            <li><a href="car-detailed.html">Detailed</a></li>
                            <li><a href="car-booking.html">Booking</a></li>
                            <li><a href="car-thankyou.html">Thank You</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="cruise-index.html">Cruises</a>
                        <ul>
                            <li><a href="cruise-index.html">Home Cruises</a></li>
                            <li><a href="cruise-list-view.html">List View</a></li>
                            <li><a href="cruise-grid-view.html">Grid View</a></li>
                            <li><a href="cruise-block-view.html">Block View</a></li>
                            <li><a href="cruise-detailed.html">Detailed</a></li>
                            <li><a href="cruise-booking.html">Booking</a></li>
                            <li><a href="cruise-thankyou.html">Thank You</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Pages</a>
                        <ul>
                            <li class="menu-item-has-children">
                                <a href="#">Standard Pages</a>
                                <ul>
                                    <li><a href="pages-aboutus1.html">About Us 1</a></li>
                                    <li><a href="pages-aboutus2.html">About Us 2</a></li>
                                    <li><a href="pages-services1.html">Services 1</a></li>
                                    <li><a href="pages-services2.html">Services 2</a></li>
                                    <li><a href="pages-photogallery-4column.html">Gallery 4 Column</a></li>
                                    <li><a href="pages-photogallery-3column.html">Gallery 3 Column</a></li>
                                    <li><a href="pages-photogallery-2column.html">Gallery 2 Column</a></li>
                                    <li><a href="pages-photogallery-fullview.html">Gallery Read</a></li>
                                    <li><a href="pages-blog-rightsidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="pages-blog-leftsidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="pages-blog-fullwidth.html">Blog Full Width</a></li>
                                    <li><a href="pages-blog-read.html">Blog Read</a></li>
                                    <li><a href="pages-faq1.html">Faq 1</a></li>
                                    <li><a href="pages-faq2.html">Faq 2</a></li>
                                    <li><a href="pages-layouts-leftsidebar.html">Layouts Left Sidebar</a></li>
                                    <li><a href="pages-layouts-rightsidebar.html">Layouts Right Sidebar</a></li>
                                    <li><a href="pages-layouts-twosidebar.html">Layouts Two Sidebar</a></li>
                                    <li><a href="pages-layouts-fullwidth.html">Layouts Full Width</a></li>
                                    <li><a href="pages-contactus1.html">Contact Us 1</a></li>
                                    <li><a href="pages-contactus2.html">Contact Us 2</a></li>
                                    <li><a href="pages-contactus3.html">Contact Us 3</a></li>
                                    <li><a href="pages-travelo-policies.html">Travelo Policies</a></li>
                                    <li><a href="pages-sitemap.html">Site Map</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Extra Pages</a>
                                <ul>
                                    <li><a href="extra-pages-holidays.html">Holidays</a></li>
                                    <li><a href="extra-pages-hotdeals.html">Hot Deals</a></li>
                                    <li><a href="extra-pages-before-you-fly.html">Before You Fly</a></li>
                                    <li><a href="extra-pages-inflight-experience.html">Inflight Experience</a></li>
                                    <li><a href="extra-pages-things-todo1.html">Things To Do 1</a></li>
                                    <li><a href="extra-pages-things-todo2.html">Things To Do 2</a></li>
                                    <li><a href="extra-pages-travel-essentials.html">Travel Essentials</a></li>
                                    <li><a href="extra-pages-travel-stories.html">Travel Stories</a></li>
                                    <li><a href="extra-pages-travel-guide.html">Travel Guide</a></li>
                                    <li><a href="extra-pages-travel-ideas.html">Travel Ideas</a></li>
                                    <li><a href="extra-pages-travel-insurance.html">Travel Insurance</a></li>
                                    <li><a href="extra-pages-group-booking.html">Group Bookings</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Special Pages</a>
                                <ul>
                                    <li><a href="pages-404-1.html">404 Page 1</a></li>
                                    <li><a href="pages-404-2.html">404 Page 2</a></li>
                                    <li><a href="pages-404-3.html">404 Page 3</a></li>
                                    <li><a href="pages-coming-soon1.html">Coming Soon 1</a></li>
                                    <li><a href="pages-coming-soon2.html">Coming Soon 2</a></li>
                                    <li><a href="pages-coming-soon3.html">Coming Soon 3</a></li>
                                    <li><a href="pages-loading1.html">Loading Page 1</a></li>
                                    <li><a href="pages-loading2.html">Loading Page 2</a></li>
                                    <li><a href="pages-loading3.html">Loading Page 3</a></li>
                                    <li><a href="pages-login1.html">Login Page 1</a></li>
                                    <li><a href="pages-login2.html">Login Page 2</a></li>
                                    <li><a href="pages-login3.html">Login Page 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Shortcodes</a>
                        <ul>
                            <li><a href="shortcode-accordions-toggles.html">Accordions &amp; Toggles</a></li>
                            <li><a href="shortcode-tabs.html">Tabs</a></li>
                            <li><a href="shortcode-buttons.html">Buttons</a></li>
                            <li><a href="shortcode-icon-boxes.html">Icon Boxes</a></li>
                            <li><a href="shortcode-gallery-styles.html">Image &amp; Gallery Styles</a></li>
                            <li><a href="shortcode-image-box-styles.html">Image Box Styles</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Listing Styles</a>
                                <ul>
                                    <li><a href="shortcode-listing-style1.html">Listing Style 01</a></li>
                                    <li><a href="shortcode-listing-style2.html">Listing Style 02</a></li>
                                    <li><a href="shortcode-listing-style3.html">Listing Style 03</a></li>
                                </ul>
                            </li>
                            <li><a href="shortcode-dropdowns.html">Dropdowns</a></li>
                            <li><a href="shortcode-pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="shortcode-testimonials.html">Testimonials</a></li>
                            <li><a href="shortcode-our-team.html">Our Team</a></li>
                            <li><a href="shortcode-gallery-popup.html">Gallery Popup</a></li>
                            <li><a href="shortcode-map-popup.html">Map Popup</a></li>
                            <li><a href="shortcode-style-changer.html">Style Changer</a></li>
                            <li><a href="shortcode-typography.html">Typography</a></li>
                            <li><a href="shortcode-animations.html">Animations</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="#">Bonus</a>
                        <ul>
                            <li><a href="dashboard1.html">Dashboard 1</a></li>
                            <li><a href="dashboard2.html">Dashboard 2</a></li>
                            <li><a href="dashboard3.html">Dashboard 3</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">7 Footer Styles</a>
                                <ul>
                                    <li><a href="#">Default Style</a></li>
                                    <li><a href="footer-style1.html">Footer Style 1</a></li>
                                    <li><a href="footer-style2.html">Footer Style 2</a></li>
                                    <li><a href="footer-style3.html">Footer Style 3</a></li>
                                    <li><a href="footer-style4.html">Footer Style 4</a></li>
                                    <li><a href="footer-style5.html">Footer Style 5</a></li>
                                    <li><a href="footer-style6.html">Footer Style 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">8 Header Styles</a>
                                <ul>
                                    <li><a href="#">Default Style</a></li>
                                    <li><a href="header-style1.html">Header Style 1</a></li>
                                    <li><a href="header-style2.html">Header Style 2</a></li>
                                    <li><a href="header-style3.html">Header Style 3</a></li>
                                    <li><a href="header-style4.html">Header Style 4</a></li>

                                    <li><a href="header-style5.html">Header Style 5</a></li>
                                    <li><a href="header-style6.html">Header Style 6</a></li>
                                    <li><a href="header-style7.html">Header Style 7</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">7 Inner Start Styles</a>
                                <ul>
                                    <li><a href="#">Default Style</a></li>
                                    <li><a href="inner-starts-style1.html">Inner Start Style 1</a></li>
                                    <li><a href="inner-starts-style2.html">Inner Start Style 2</a></li>
                                    <li><a href="inner-starts-style3.html">Inner Start Style 3</a></li>
                                    <li><a href="inner-starts-style4.html">Inner Start Style 4</a></li>
                                    <li><a href="inner-starts-style5.html">Inner Start Style 5</a></li>
                                    <li><a href="inner-starts-style6.html">Inner Start Style 6</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">3 Search Styles</a>
                                <ul>
                                    <li><a href="search-style1.html">Search Style 1</a></li>
                                    <li><a href="search-style2.html">Search Style 2</a></li>
                                    <li><a href="search-style3.html">Search Style 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                
                <ul class="mobile-topnav container">
                    <li><a href="#">MY ACCOUNT</a></li>
                    <li class="ribbon language menu-color-skin">
                        <a href="#" data-toggle="collapse">ENGLISH</a>
                        <ul class="menu mini">
                            <li><a href="#" title="Dansk">Dansk</a></li>
                            <li><a href="#" title="Deutsch">Deutsch</a></li>
                            <li class="active"><a href="#" title="English">English</a></li>
                            <li><a href="#" title="Español">Español</a></li>
                            <li><a href="#" title="Français">Français</a></li>
                            <li><a href="#" title="Italiano">Italiano</a></li>
                            <li><a href="#" title="Magyar">Magyar</a></li>
                            <li><a href="#" title="Nederlands">Nederlands</a></li>
                            <li><a href="#" title="Norsk">Norsk</a></li>
                            <li><a href="#" title="Polski">Polski</a></li>
                            <li><a href="#" title="Português">Português</a></li>
                            <li><a href="#" title="Suomi">Suomi</a></li>
                            <li><a href="#" title="Svenska">Svenska</a></li>
                        </ul>
                    </li>
                    <li><a href="#travelo-login" class="soap-popupbox">LOGIN</a></li>
                    <li><a href="#travelo-signup" class="soap-popupbox">SIGNUP</a></li>
                    <li class="ribbon currency menu-color-skin">
                        <a href="#">USD</a>
                        <ul class="menu mini">
                            <li><a href="#" title="AUD">AUD</a></li>
                            <li><a href="#" title="BRL">BRL</a></li>
                            <li class="active"><a href="#" title="USD">USD</a></li>
                            <li><a href="#" title="CAD">CAD</a></li>
                            <li><a href="#" title="CHF">CHF</a></li>
                            <li><a href="#" title="CNY">CNY</a></li>
                            <li><a href="#" title="CZK">CZK</a></li>
                            <li><a href="#" title="DKK">DKK</a></li>
                            <li><a href="#" title="EUR">EUR</a></li>
                            <li><a href="#" title="GBP">GBP</a></li>
                            <li><a href="#" title="HKD">HKD</a></li>
                            <li><a href="#" title="HUF">HUF</a></li>
                            <li><a href="#" title="IDR">IDR</a></li>
                        </ul>
                    </li>
                </ul>
                
            </nav>
            <div id="travelo-signup" class="travelo-signup-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <div class="simple-signup">
                    <div class="text-center signup-email-section">
                        <a href="#" class="signup-email"><i class="soap-icon-letter"></i>Sign up with Email</a>
                    </div>
                    <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund olicy, and Host Guarantee Terms.</p>
                </div>
                <div class="email-signup">
                    <form>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="first name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="last name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="input-text full-width" placeholder="email address">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="input-text full-width" placeholder="confirm password">
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Tell me about Travelo news
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <p class="description">By signing up, I agree to Travelo's Terms of Service, Privacy Policy, Guest Refund Policy, and Host Guarantee Terms.</p>
                        </div>
                        <button type="submit" class="full-width btn-medium">SIGNUP</button>
                    </form>
                </div>
                <div class="seperator"></div>
                <p>Already a Travelo member? <a href="#travelo-login" class="goto-login soap-popupbox">Login</a></p>
            </div>
            <div id="travelo-login" class="travelo-login-box travelo-box">
                <div class="login-social">
                    <a href="#" class="button login-facebook"><i class="soap-icon-facebook"></i>Login with Facebook</a>
                    <a href="#" class="button login-googleplus"><i class="soap-icon-googleplus"></i>Login with Google+</a>
                </div>
                <div class="seperator"><label>OR</label></div>
                <form>
                    <div class="form-group">
                        <input type="text" class="input-text full-width" placeholder="email address">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input-text full-width" placeholder="password">
                    </div>
                    <div class="form-group">
                        <a href="#" class="forgot-password pull-right">Forgot password?</a>
                        <div class="checkbox checkbox-inline">
                            <label>
                                <input type="checkbox"> Remember me
                            </label>
                        </div>
                    </div>
                </form>
                <div class="seperator"></div>
                <p>Don't have an account? <a href="#travelo-signup" class="goto-signup soap-popupbox">Sign up</a></p>
            </div>
        </header>

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">PAGES</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>

        <section id="content">
            <div class="container">
                <div id="main">
                    <?php if (!empty($errors)) { ?>
                        <div class="alert alert-error">
                            <?php echo $errors; ?>
                            <span class="close"></span>
                        </div>
                    <?php } else if (!empty($success_msg)) { ?>
                        <div class="alert alert-success">
                            <?php echo $success_msg; ?>
                            <span class="close"></span>
                        </div>
                    <?php }    ?>
                    <br />
                    <a class="button btn-small sky-blue1" onclick="history.go(-1);">Go Back</a>
                </div>
            </div>
        </section>
        
        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
                                <li class="col-xs-6"><a href="#">Safety</a></li>
                                <li class="col-xs-6"><a href="#">About</a></li>
                                <li class="col-xs-6"><a href="#">Travelo Picks</a></li>
                                <li class="col-xs-6"><a href="#">Latest Jobs</a></li>
                                <li class="active col-xs-6"><a href="#">Mobile</a></li>
                                <li class="col-xs-6"><a href="#">Press Releases</a></li>
                                <li class="col-xs-6"><a href="#">Why Host</a></li>
                                <li class="col-xs-6"><a href="#">Blog Posts</a></li>
                                <li class="col-xs-6"><a href="#">Social Connect</a></li>
                                <li class="col-xs-6"><a href="#">Help Topics</a></li>
                                <li class="col-xs-6"><a href="#">Site Map</a></li>
                                <li class="col-xs-6"><a href="#">Policies</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Travel News</h2>
                            <ul class="travel-news">
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Amazing Places</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">25 Sep, 2013</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="http://placehold.it/63x63" alt="" width="63" height="63" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="#">Travel Insurance</a></h5>
                                        <p>Purus ac congue arcu cursus ut vitae pulvinar massaidp.</p>
                                        <span class="date">24 Sep, 2013</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <input type="text" class="input-text full-width" placeholder="your email" />
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>About Travelo</h2>
                            <p>Nunc cursus libero purus ac congue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque.</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> 1-800-123-HELLO</span>
                                <br />
                                <a href="#" class="contact-email">help@travelo.com</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom gray-area">
                <div class="container">
                    <div class="logo pull-left">
                        <a href="index.html" title="Travelo - home">
                            <img src="images/logo.png" alt="Travelo HTML5 Template" />
                        </a>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                    <div class="copyright pull-right">
                        <p>&copy; 2014 Travelo</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>


    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.noconflict.js"></script>
    <script type="text/javascript" src="js/modernizr.2.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.placeholder.js"></script>
    <script type="text/javascript" src="js/jquery-ui.1.10.4.min.js"></script>
    
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.js"></script>
    
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
    
    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/theme-scripts.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
    
</body>
</html>

