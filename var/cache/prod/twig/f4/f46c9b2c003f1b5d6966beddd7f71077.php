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

/* lessons.html */
class __TwigTemplate_c8367a335b91985fc6b2a69ed1a0ba50 extends Template
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
    <title>Lessons - Educational and Online Course HTML Website Template</title>  
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
    <!-- course CSS -->
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
    
    <!-- lessons part here -->
    <div id=\"content\" class=\"site-content\" bis_skin_checked=\"1\">
        <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
            <ul class=\"learn-press-breadcrumb\">
                <li><a href=\"index.html\" bis_skin_checked=\"1\"><span>Home</span></a></li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
                <li><a href=\"course-list.html\" bis_skin_checked=\"1\"><span>All Courses</span></a></li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
                <li><a href=\"course-category.html\" bis_skin_checked=\"1\"><span>Computer Science</span></a></li><li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
                <li><span>Computer Security &amp; Network</span></li>
            </ul> 
            <div id=\"popup-course\" class=\"course-summary\" bis_skin_checked=\"1\">
                <input type=\"checkbox\" id=\"sidebar-toggle\">
                <div id=\"popup-header\" bis_skin_checked=\"1\">
                    <div class=\"popup-header__inner\" bis_skin_checked=\"1\">
                        <h2 class=\"course-title\">
                            <a href=\"course-details.html\" bis_skin_checked=\"1\">Computer Security &amp; Network</a>
                        </h2>
                    </div>
                    <a href=\"course-details.html\" class=\"back-course\" bis_skin_checked=\"1\"><i class=\"fa fa-times\"></i></a>
                </div>
                <div id=\"popup-sidebar\" bis_skin_checked=\"1\">
                    <form method=\"post\" class=\"search-course\">
                        <input type=\"text\" name=\"s\" autocomplete=\"off\" placeholder=\"Search courses content\">
                        <button name=\"submit\"></button>
                        <button type=\"button\" class=\"clear\"></button>
                    </form>
                    <div class=\"course-curriculum\" id=\"learn-press-course-curriculum\" bis_skin_checked=\"1\">
                        <div class=\"curriculum-scrollable\" bis_skin_checked=\"1\">
                            <ul class=\"curriculum-sections\">        
                                <li class=\"section\" id=\"section-section-1-1\" data-id=\"section-1-1\" data-section-id=\"1\">
                                    <div class=\"section-header\" bis_skin_checked=\"1\">
                                        <div class=\"section-left\" bis_skin_checked=\"1\">
                                            <h5 class=\"section-title\">Section 1
                                            </h5>
                                            <span class=\"section-toggle\">
                                                <i class=\"fas fa-caret-down\"></i>
                                                <i class=\"fas fa-caret-up\"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class=\"section-content\">
                                        <li class=\"course-item course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 1</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 2</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 3</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 4</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=\"section\" id=\"section-section-1-1\" data-id=\"section-1-1\" data-section-id=\"1\">
                                    <div class=\"section-header\" bis_skin_checked=\"1\">
                                        <div class=\"section-left\" bis_skin_checked=\"1\">
                                            <h5 class=\"section-title\">Section 2
                                            </h5>
                                            <span class=\"section-toggle\">
                                                <i class=\"fas fa-caret-down\"></i>
                                                <i class=\"fas fa-caret-up\"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <ul class=\"section-content\">
                                        <li class=\"course-item course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 1</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 2</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 3</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class=\"course-item item-locked course-item-lp_lesson course-item-125 item-preview has-status\" data-id=\"125\">
                                            <a class=\"section-item-link\" href=\"#\" bis_skin_checked=\"1\">           
                                                <span class=\"item-name\">Lesson 4</span>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-preview\" data-preview=\"Preview\"></span>
                                                </div>
                                                <div class=\"course-item-meta\" bis_skin_checked=\"1\">
                                                    <span class=\"item-meta course-item-status\" title=\"Unread\"></span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id=\"popup-content\" bis_skin_checked=\"1\">
                    <div id=\"learn-press-content-item\" bis_skin_checked=\"1\">
                        <div class=\"content-item-scrollable\" bis_skin_checked=\"1\">
                            <div class=\"content-item-wrap\" bis_skin_checked=\"1\">
                                <div class=\"content-item-summary\" bis_skin_checked=\"1\">
                                    <h3 class=\"course-item-title question-title\">Lesson 1</h3>
                                    <div class=\"content-item-description lesson-description\" bis_skin_checked=\"1\">
                                        <p>Istuc virtutum tantam diligimus pyrrhonem metellum estquod secundae pius quidque tubulus delectat rapior omittamus translatum cupido spectare molliorque</p>
                                        <p>Pertinere vestra vacua scientiam probandum tuique instructus cognitione poterat videbis</p>
                                        <p>Diceres mitigari vigeant beato primis conare odit vivendi quasi fuerat</p>
                                        <p>Antea ennius experiamur transmisit quadratum vacuitatem existimas habent euripidesconcludam iudicem sensuum linguam tria pleniorem suavius cernere aestimabat</p>
                                        <p>Nosmet altera delicatior infamia rogavi additis imperatoriae propterea opifices epicuro officio nominare</p>
                                        <p>Dederis negotium intellegatur breve piscis laudabile refers dederetur praecipue nam fortior petitur magnum mecum similiter datum deo</p>
                                        <p>Cetera concederem consolando nullam attendere neglegebat praesidium perveniant revocat ruinas relicta modicum summoque facilius gaudere</p>
                                        <p>Fieri multitudinis mehercule appellabant flagitiosa apparere caducum reliquit sed latinum signa aetatibus tui polemonis revertendum</p>
                                        <p>Fit contemnendam sentias inponebat cupiditatum verborumne molliorque tui praeeunte sis lingua quasi sibi duce metrodori torquate appellocommunia quam</p>
                                        <p>Levares aberrare laborum audiebant tarentum voluptatibus oratione fine tres commendationes aberramus pretiosissimis gerendarum longinquum</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id=\"popup-footer\" bis_skin_checked=\"1\">
                    <div class=\"course-item-nav\" data-nav=\"all\" bis_skin_checked=\"1\">
                        <div class=\"prev\" bis_skin_checked=\"1\">
                            <div class=\"course-item-nav__name\" bis_skin_checked=\"1\">
                            Lesson 1</div>
                            <a href=\"#\" bis_skin_checked=\"1\">Prev</a>
                        </div>
                        <div class=\"next\" bis_skin_checked=\"1\">
                            <div class=\"course-item-nav__name\" bis_skin_checked=\"1\">
                            Lesson 2</div>
                            <a href=\"#\" bis_skin_checked=\"1\">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- lessons part end -->
    
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
        return "lessons.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "lessons.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/lessons.html");
    }
}
