<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* teacher.html */
class __TwigTemplate_a1a9de1a1347ec5441b4114a8a24ced3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Teacher - Educational and Online Course HTML Website Template</title> 
    <link rel=\"icon\" href=\"../public/img/favicon.png\" type=\"image/png\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/bootstrap.min.css\"/>
    <!-- animate CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/animate.css\"/>
    <!-- font awesome CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/elegant_Icon/elegent_icon.css\"/>
    <!-- nice select CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/niceselect/css/nice-select.css\"/>
    <!-- owl carousel CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/owl_carousel/css/owl.carousel.css\"/>
    <!-- magnific popup CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/magnify_popup/magnific-popup.css\"/>
    <!-- Countdown CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/countdown/css/Countdown.css\"/>
    <!-- flaticon CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/flaticon.css\"/>
    <!-- aos CSS -->
    <link rel=\"stylesheet\" href=\"../public/vendors/aos/aos.css\"/>
    <!-- courses CSS -->
    <link rel=\"stylesheet\" href=\"../public/css/courses.css\"/>
    <!-- style CSS -->
    <link rel=\"stylesheet\" href=\"style.css\"/>
</head>

<body>
    <!-- start Preloader  -->
    <div class=\"preloder_part\">
        <div class=\"spinner\">
            <div class=\"dot1\"></div>
            <div class=\"dot2\"></div>
        </div>
    </div>
    <!-- End Preloader  -->

    <!-- header part here -->
    <header class=\"header_part\">
        <div class=\"sub_header section_bg\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-6 col-lg-7 col-md-7\">
                        <div class=\"header_contact_info\">
                            <a href=\"tel:+4641468425\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:admin@example.com\"><i class=\"icon_mail_alt\"></i>admin@example.com</a>
                        </div>
                    </div>
                    <div class=\"col-xl-6 col-lg-5 col-md-5\">
                        <div class=\"header_login_info\">
                            <a href=\"teacher.html\">Become A Teacher</a>
                            <a href=\"my-profile.html\">My Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"main_nav\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-lg-12\">
                        <div class=\"header_iner d-flex justify-content-between align-items-center\">
                            <div class=\"sidebar_icon troggle_icon d-lg-none\">
                                <i class=\"icon_menu\"></i>
                            </div>
                            <div class=\"logo\">
                                <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                            </div>

                            <nav class=\"navbar_bar\">
                                <ul>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link active\" href=\"#\">Home</a>
                                        <ul>
                                            <li><a class=\"active\" href=\"index.html\">Homepage Style One</a></li>
                                            <li><a href=\"index-two.html\">Homepage Style Two</a>
                                            </li>
                                            <li><a href=\"index.html\">One Page Home</a>
                                            </li>
                                            <li><a href=\"index-four.html\">Dark Homepage</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">All Courses</a>
                                        <ul>
                                            <li><a href=\"course-list.html\">Course List</a></li>
                                            <li><a href=\"course-grid.html\">Course Grid</a></li>
                                            <li><a href=\"course-slider.html\">Course Slider</a></li>
                                            <li><a href=\"course-details.html\">Course Details</a></li>
                                            <li><a href=\"course-category.html\">Course Category</a></li>
                                            <li><a href=\"lessons.html\">Lessons</a></li>
                                            <li><a href=\"quizzes.html\">Quizzes</a></li>
                                            <li><a href=\"checkout.html\">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Blog Classic</a>
                                        <ul>
                                            <li><a href=\"blog-grid.html\">Blog Grid</a></li>
                                            <li><a href=\"blog-slider.html\">Blog Slider</a></li>
                                            <li><a href=\"blog-left-sidebar.html\">Blog Left Sidebar</a></li>
                                            <li><a href=\"blog-right-sidebar.html\">Blog Right Sidebar</a></li>
                                            <li><a href=\"blog-details-no-sidebar.html\">Blog Details No Sidebar</a></li>
                                            <li><a href=\"blog-details-left-sidebar.html\">Blog Details Left Sidebar</a></li>
                                            <li><a href=\"blog-details-right-sidebar.html\">Blog Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class=\"mega_menu_dropdown\">
                                        <a class=\"mega_menu_dropdown-toggle nav-link\" href=\"#\">Pages</a>
                                        <ul>
                                            <li><a href=\"about.html\">About Us</a></li>
                                            <li><a href=\"events.html\">Events</a></li>
                                            <li><a href=\"instructor.html\">Instructor</a></li>
                                            <li><a href=\"testimonial.html\">Testimonial</a></li>
                                            <li><a href=\"sample-page.html\">Sample Page</a></li>
                                            <li><a href=\"page-left-sidebar.html\">Page Left Sidebar</a></li>
                                            <li><a href=\"page-right-sidebar.html\">Page Right Sidebar</a></li>
                                            <li><a href=\"404.html\">404 Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href=\"contact.html\">Contact Us</a></li>
                                </ul>
                            </nav>
                            <div class=\"navbar_btn\">
                                <a href=\"live-class.html\" class=\"btn_1\">Join Live Class</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </header>
    <!-- header part end -->

    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_grid_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div class=\"breadcrumb_iner\">
                        <h2>Become A Teacher</h2>
                        <div class=\"breadcrumb_iner_link\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"arrow_carrot-right\"></i>
                            <span>Become A Teacher</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    
    <!-- become a teacher part here -->
    <div id=\"primary\" class=\"content-area section_padding\">
        <main id=\"main\" class=\"site-main\">
            <div class=\"container\">
                <div class=\"learnpress\">
                    <div id=\"learn-press-become-teacher-form\" class=\"become-teacher-form learn-press-form\">
                        <form name=\"become-teacher-form\" method=\"post\" enctype=\"multipart/form-data\" action=\"\">
                            <div class=\"learn-press-message success\">
                                <i class=\"fa\"></i>Please <a href=\"my-profile.html\">login</a> to send your request!         
                            </div>  
                        </form>
                    </div>
                </div><br/>         
                <article id=\"post-47\" class=\"post-47 page type-page status-publish hentry\">
                    <div class=\"entry-content\">
                        <div class=\"learnpress\">
                            <div id=\"learn-press-profile\" class=\"lp-user-profile guest\">
                                <div class=\"main-content-area row\">
                                    <div class=\"learn-press-form-login learn-press-form\">
                                        <h3>Login</h3>
                                        <form name=\"learn-press-login\" method=\"post\" action=\"\">
                                            <ul class=\"form-fields\">
                                                <li class=\"form-field\">
                                                    <label for=\"username\">Username or email&nbsp;<span class=\"required\">*</span></label>
                                                    <input type=\"text\" name=\"username\" id=\"username\" placeholder=\"Email or username\" autocomplete=\"username\">
                                                </li>
                                                <li class=\"form-field\">
                                                    <label for=\"password\">Password&nbsp;<span class=\"required\">*</span></label>
                                                    <span class=\"lp-password-input\"><input type=\"password\" name=\"password\" id=\"password\" placeholder=\"Password\" autocomplete=\"current-password\"><span class=\"lp-show-password-input\"></span></span>
                                                </li>
                                            </ul>
                                            <p>
                                                <label>
                                                    <input type=\"checkbox\" name=\"rememberme\">
                                                    Remember me
                                                </label>
                                            </p>
                                            <p>
                                                <input type=\"hidden\" name=\"learn-press-login-nonce\" value=\"f346c119af\">
                                                <button type=\"submit\">Login</button>
                                            </p>
                                            <p>
                                                <a href=\"#\">Lost your password?</a>
                                            </p>
                                        </form>
                                    </div>
                                    <div class=\"learn-press-form-register learn-press-form\">
                                        <h3>Register</h3>
                                        <form name=\"learn-press-register\" method=\"post\" action=\"\">
                                            <ul class=\"form-fields\"> 
                                                <li class=\"form-field\">
                                                    <label for=\"reg_email\">Email address&nbsp;<span class=\"required\">*</span></label>
                                                    <input id=\"reg_email\" name=\"reg_email\" type=\"text\" placeholder=\"Email\" autocomplete=\"email\" value=\"\">
                                                </li>
                                                <li class=\"form-field\">
                                                    <label for=\"reg_username\">Username&nbsp;<span class=\"required\">*</span></label>
                                                    <input id=\"reg_username\" name=\"reg_username\" type=\"text\" placeholder=\"Username\" autocomplete=\"username\" value=\"\">
                                                </li>
                                                <li class=\"form-field\">
                                                    <label for=\"reg_password\">Password&nbsp;<span class=\"required\">*</span></label>
                                                    <span class=\"lp-password-input\"><input id=\"reg_password\" name=\"reg_password\" type=\"password\" placeholder=\"Password\" autocomplete=\"new-password\"><span class=\"lp-show-password-input\"></span></span>
                                                </li>
                                                <li class=\"form-field\">
                                                    <label for=\"reg_password2\">Confirm Password&nbsp;<span class=\"required\">*</span></label>
                                                    <span class=\"lp-password-input\"><input id=\"reg_password2\" name=\"reg_password2\" type=\"password\" placeholder=\"Password\" autocomplete=\"off\"><span class=\"lp-show-password-input\"></span></span>
                                                </li>
                                            </ul>
                                            <p>
                                                <input type=\"hidden\" id=\"learn-press-register-nonce\" name=\"learn-press-register-nonce\" value=\"d9160cea03\"><input type=\"hidden\" name=\"_wp_http_referer\" value=\"/lp-profile/\"><button type=\"submit\">Register</button>
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .entry-content -->
                </article>
            </div>
        </main><!-- #main -->
    </div>
    <!-- become a teacher part end -->
    
    <!-- Start LTR & RTL Button -->
\t<div class=\"ltr-rtl-button\">
\t\t<a class=\"default-btn active ltr\">
\t\t    LTR
\t\t</a>
\t\t<a class=\"default-btn rtl\">
\t\t    RTL
\t\t</a>
\t</div>
\t<!-- End LTR & RTL Button -->
\t\t
\t<!-- footer part here -->
    <footer class=\"footer_section\">
        <div class=\"container\">
            <div class=\"row justify-content-between\">
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer\">
                        <a href=\"index.html\"><img src=\"../public/img/logo.png\" alt=\"#\"></a>
                        <p>Loo faff about cockup Harry baking cakes hunky dory mush happy 
                        days on your bike mate.</p>
                        <div class=\"footer_contact_info\">
                            <a href=\"tel:+464145684325\"><i class=\"icon_phone\"></i>+464 145 684 325</a>
                            <a href=\"mailto:education@example.com\"><i class=\"icon_mail_alt\"></i>education@example.com</a>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Popular Courses</h4>
                        <ul>
                            <li><a href=\"course-details.html\">Algebra & Calculus</a></li>
                            <li><a href=\"course-details.html\">Business Strategy</a></li>
                            <li><a href=\"course-details.html\">Computer Security & Network</a></li>
                            <li><a href=\"course-details.html\">Data Analysis</a></li>
                            <li><a href=\"course-details.html\">English Learning</a></li>
                            <li><a href=\"course-details.html\">Music & Art</a></li>
                        </ul>
                    </div>
                </div>         
                <div class=\"col-lg-3 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>COURSE CATEGORIES</h4>
                        <ul>
                            <li><a href=\"course-category.html\">Arts & Humanities</a></li>
                            <li><a href=\"course-category.html\">Business</a></li>
                            <li><a href=\"course-category.html\">Computer Science</a></li>
                            <li><a href=\"course-category.html\">Data Science</a></li>
                            <li><a href=\"course-category.html\">Language Learning</a></li>
                            <li><a href=\"course-category.html\">Math & Logic</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-2 col-sm-6\">
                    <div class=\"single_feature_footer footer_nav\">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href=\"#\">Live Class</a></li>
                            <li><a href=\"#\">Tuition Fees</a></li>
                            <li><a href=\"#\">Terms & Conditions</a></li>
                            <li><a href=\"#\">Privacy Policy</a></li>
                            <li><a href=\"#\">Support</a></li>
                            <li><a href=\"#\">Career</a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"copyright_part\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-6 col-md-8\">
                                <p>© Copyright 2023 Design by <a href=\"#\" class=\"text_underline\">MhrTheme.</a> All rights reserved.</p>
                            </div> 
                            <div class=\"col-lg-6 col-md-4\">
                                <div class=\"social_icon\">
                                    <a href=\"#\"><i class=\"social_facebook\"></i></a>
                                    <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                    <a href=\"#\"><i class=\"social_youtube\"></i></a>
                                    <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                    <a href=\"#\"><i class=\"social_skype\"></i></a>
                                    <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                    <a href=\"#\"><i class=\"social_pinterest\"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src=\"../public/img/icon/shape_01.png\" alt=\"#\" class=\"footer_sharp_1\">
        <img src=\"../public/img/icon/about_shape_02.png\" alt=\"#\" class=\"footer_sharp_2 custom-animation2\">
        <img src=\"../public/img/icon/about_shape_03.png\" alt=\"#\" class=\"footer_sharp_3 custom-animation3\">
    </footer>
    <!-- footer part end -->

    <!-- jquery slim -->
    <script src=\"../public/js/jquery-3.4.1.min.js\"></script>
    <!-- popper js -->
    <script src=\"../public/js/popper.min.js\"></script>
    <!-- bootstarp js -->
    <script src=\"../public/js/bootstrap.min.js\"></script>
    <!-- nice select -->
    <script src=\"../public/vendors/niceselect/js/jquery.nice-select.min.js\"></script>
    <!-- owl carousel js -->
    <script src=\"../public/vendors/owl_carousel/js/owl.carousel.min.js\"></script>
    <!-- magnify popup js -->
    <script src=\"../public/vendors/magnify_popup/jquery.magnific-popup.js\"></script>
    <!-- simplyCountdown js -->
    <script src=\"../public/vendors/countdown/js/simplyCountdown.min.js\"></script>
    <!-- counter js -->
    <script src=\"../public/vendors/counter/jquery.countTo.js\"></script>
    <!-- aos js -->
    <script src=\"../public/vendors/aos/aos.js\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"/></script>
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "teacher.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "teacher.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/teacher.html");
    }
}
