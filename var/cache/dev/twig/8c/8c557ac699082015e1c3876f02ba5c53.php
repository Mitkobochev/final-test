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

/* course-category.html */
class __TwigTemplate_238b176898bfa225733a40b2725ab529 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course-category.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Course Category - Educational and Online Course HTML Website Template</title>  
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
    
    <!-- course category part here --> 
    <div id=\"content\" class=\"site-content\" bis_skin_checked=\"1\">
        <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
            <ul class=\"learn-press-breadcrumb\">
                <li>
                    <a href=\"index.html\" bis_skin_checked=\"1\"><span>Home</span></a>
                </li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i>
                </li>
                <li>
                    <span>Categories</span>
                </li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
                <li><span>Arts &amp; Humanities</span></li>
            </ul>
            <div class=\"lp-content-area\" bis_skin_checked=\"1\">
                <header class=\"learn-press-courses-header\">
                    <h1>All Courses</h1>
                </header>
                <div class=\"lp-courses-bar list\" bis_skin_checked=\"1\">
                    <form class=\"search-courses\" method=\"get\" action=\"index.html\">
                        <input type=\"hidden\" name=\"post_type\" value=\"lp_course\">
                        <input type=\"hidden\" name=\"taxonomy\" value=\"\">
                        <input type=\"hidden\" name=\"term_id\" value=\"\">
                        <input type=\"hidden\" name=\"term\" value=\"\">
                        <input type=\"text\" placeholder=\"Search courses...\" name=\"s\" value=\"\">
                        <button type=\"submit\"><i class=\"fas fa-search\"></i></button>
                    </form>
                    <div class=\"switch-layout\" bis_skin_checked=\"1\">
                        <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"grid\" id=\"lp-switch-layout-btn-grid\">
                        <label class=\"switch-btn grid\" title=\"Switch to grid\" for=\"lp-switch-layout-btn-grid\"></label>
                        <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"list\" id=\"lp-switch-layout-btn-list\" checked=\"checked\">
                        <label class=\"switch-btn list\" title=\"Switch to list\" for=\"lp-switch-layout-btn-list\"></label>
                    </div>
                </div>
                <ul class=\"learn-press-courses\" data-layout=\"list\">
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_1.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Computer Science</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Software Development</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$160.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_2.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Business</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Business Essentials</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$120.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_3.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Arts & Humanities</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">History & Philosophy</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$110.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_4.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Math & Logic</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Algebra & Calculus</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$130.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_5.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Language Learning</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">English Learning</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$140.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_6.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Business</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Business Strategy</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$160.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_7.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Arts & Humanities</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Music & Art</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$170.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_8.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Data Science</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Data Analysis</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$200.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                </ul>
                <nav class=\"learn-press-pagination navigation pagination\">
                    <ul class=\"page-numbers\">
                        <li><span aria-current=\"page\" class=\"page-numbers current\">1</span></li>
                        <li><a class=\"page-numbers\" href=\"#\" bis_skin_checked=\"1\">2</a></li>
                        <li><a class=\"next page-numbers\" href=\"#\" bis_skin_checked=\"1\"><i class=\"fas fa-angle-right\"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- course category part end --> 
    
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
    <!-- courses js -->
    <script src=\"../public/js/courses.js\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"/></script>
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "course-category.html";
    }

    public function getDebugInfo()
    {
        return array (  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Course Category - Educational and Online Course HTML Website Template</title>  
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
    
    <!-- course category part here --> 
    <div id=\"content\" class=\"site-content\" bis_skin_checked=\"1\">
        <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
            <ul class=\"learn-press-breadcrumb\">
                <li>
                    <a href=\"index.html\" bis_skin_checked=\"1\"><span>Home</span></a>
                </li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i>
                </li>
                <li>
                    <span>Categories</span>
                </li>
                <li class=\"breadcrumb-delimiter\"><i class=\"fas fa-chevron-right\"></i></li>
                <li><span>Arts &amp; Humanities</span></li>
            </ul>
            <div class=\"lp-content-area\" bis_skin_checked=\"1\">
                <header class=\"learn-press-courses-header\">
                    <h1>All Courses</h1>
                </header>
                <div class=\"lp-courses-bar list\" bis_skin_checked=\"1\">
                    <form class=\"search-courses\" method=\"get\" action=\"index.html\">
                        <input type=\"hidden\" name=\"post_type\" value=\"lp_course\">
                        <input type=\"hidden\" name=\"taxonomy\" value=\"\">
                        <input type=\"hidden\" name=\"term_id\" value=\"\">
                        <input type=\"hidden\" name=\"term\" value=\"\">
                        <input type=\"text\" placeholder=\"Search courses...\" name=\"s\" value=\"\">
                        <button type=\"submit\"><i class=\"fas fa-search\"></i></button>
                    </form>
                    <div class=\"switch-layout\" bis_skin_checked=\"1\">
                        <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"grid\" id=\"lp-switch-layout-btn-grid\">
                        <label class=\"switch-btn grid\" title=\"Switch to grid\" for=\"lp-switch-layout-btn-grid\"></label>
                        <input type=\"radio\" name=\"lp-switch-layout-btn\" value=\"list\" id=\"lp-switch-layout-btn-list\" checked=\"checked\">
                        <label class=\"switch-btn list\" title=\"Switch to list\" for=\"lp-switch-layout-btn-list\"></label>
                    </div>
                </div>
                <ul class=\"learn-press-courses\" data-layout=\"list\">
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_1.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Computer Science</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Software Development</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$160.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_2.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Business</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Business Essentials</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$120.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_3.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Arts & Humanities</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">History & Philosophy</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$110.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_4.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Math & Logic</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Algebra & Calculus</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$130.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_5.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Language Learning</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">English Learning</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$140.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_6.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Business</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Business Strategy</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$160.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_7.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Arts & Humanities</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Music & Art</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$170.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                    <li id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_8.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div><!-- START .course-content --> 
                            <div class=\"course-content\" bis_skin_checked=\"1\">
                                <div class=\"course-categories\" bis_skin_checked=\"1\">
                                    <a href=\"course-category.html\" rel=\"tag\" bis_skin_checked=\"1\">Data Science</a>    
                                </div>
                                <span class=\"course-instructor\">
                                    <a href=\"my-profile.html\" bis_skin_checked=\"1\"><span>Adam Smith</span></a>
                                </span>
                                <a href=\"course-details.html\" class=\"course-permalink\" bis_skin_checked=\"1\">          
                                    <h3 class=\"course-title\">Data Analysis</h3>
                                </a>
                                <!-- START .course-content-meta --> 
                                <div class=\"course-wrap-meta\" bis_skin_checked=\"1\">
                                    <div class=\"meta-item meta-item-duration\" bis_skin_checked=\"1\">10 weeks</div>
                                    <div class=\"meta-item meta-item-level\" bis_skin_checked=\"1\">All levels</div>
                                    <div class=\"meta-item meta-item-lesson\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">11 lessons</span>
                                    </div>
                                    <div class=\"meta-item meta-item-quiz\" bis_skin_checked=\"1\">
                                        <span class=\"meta-number\">1 quiz</span>
                                    </div>
                                    <div class=\"meta-item meta-item-student\" bis_skin_checked=\"1\">    <span class=\"meta-number\">0 students</span>
                                    </div>
                                </div> <!-- END .course-content-meta -->
                                <div class=\"separator\" bis_skin_checked=\"1\"></div>
                                <div class=\"course-info\" bis_skin_checked=\"1\">
                                    <div class=\"course-excerpt\" bis_skin_checked=\"1\">Fusi absolutam contra licentiam contenti verba tu solebat callido anteponebas positum amicos moriare praestantia disputare…</div>
                                    <div class=\"clearfix\" bis_skin_checked=\"1\"></div>
                                    <!-- START .course-content-footer --> 
                                    <div class=\"course-footer\" bis_skin_checked=\"1\">
                                        <div class=\"course-price\" bis_skin_checked=\"1\">
                                            <span class=\"price\">\$200.00</span>
                                        </div>
                                    </div> 
                                    <!-- END .course-content-footer -->      
                                    <div class=\"course-readmore\" bis_skin_checked=\"1\">
                                        <a href=\"course-details.html\" bis_skin_checked=\"1\">View More</a>
                                    </div>       
                                </div>
                            </div> 
                            <!-- END .course-content --> 
                        </div>
                    </li>
                </ul>
                <nav class=\"learn-press-pagination navigation pagination\">
                    <ul class=\"page-numbers\">
                        <li><span aria-current=\"page\" class=\"page-numbers current\">1</span></li>
                        <li><a class=\"page-numbers\" href=\"#\" bis_skin_checked=\"1\">2</a></li>
                        <li><a class=\"next page-numbers\" href=\"#\" bis_skin_checked=\"1\"><i class=\"fas fa-angle-right\"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- course category part end --> 
    
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
    <!-- courses js -->
    <script src=\"../public/js/courses.js\"></script>
    <!-- font awesome js -->
    <script src=\"https://kit.fontawesome.com/6ee3230338.js\"/></script>
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
", "course-category.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/course-category.html");
    }
}
