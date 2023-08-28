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

/* index-four.html */
class __TwigTemplate_f3208c94aa8e8f6f812bd990d0b8e08c extends Template
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
    <title>Varsity - Educational and Online Course HTML Website Template</title>   
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

<body class=\"dark-homepage\">
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

    <!-- banner area start -->
    <div class=\"banner-wrapper-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div data-aos=\"fade-up\"
                    data-aos-duration=\"1600\" class=\"col-lg-6 col-md-12\">
                    <div class=\"banner-wrapper-content\">
                        <h1>We are Experts Learning Institution</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <div class=\"btn-box\">
                            <a href=\"about.html\" class=\"btn_1\">Discover More</a>
                        </div>
                    </div>
                </div>

                <div data-aos=\"fade-up\"
                    data-aos-duration=\"2400\" class=\"col-lg-6 col-md-12\">
                    <div class=\"banner-wrapper-image\">
                        <img src=\"../public/img/about/about-3.png\" alt=\"image\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner area end -->

    <!-- courses part here --> 
    <div id=\"content\" class=\"site-content section_padding\" bis_skin_checked=\"1\">
        <div class=\"lp-archive-courses\" bis_skin_checked=\"1\">
            <div class=\"main-content-area container\" bis_skin_checked=\"1\">
                <div class=\"row justify-content-center\">
                    <div class=\"col-lg-6\" data-aos=\"fade-up\"
                    data-aos-duration=\"1200\">
                        <div class=\"section_tittle\">
                            <h2>Our Featured <br>
                                Courses</h2>
                            <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                            tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                        </div>
                    </div>
                </div>
                <ul class=\"learn-press-courses\" data-layout=\"grid\">
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"1200\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
                        <div class=\"course-item\" bis_skin_checked=\"1\">
                            <div class=\"course-wrap-thumbnail\" bis_skin_checked=\"1\">
                                <div class=\"course-thumbnail\" bis_skin_checked=\"1\">
                                    <a href=\"course-details.html\" bis_skin_checked=\"1\">
                                        <div class=\"thumbnail-preview\" bis_skin_checked=\"1\">
                                            <div class=\"thumbnail\" bis_skin_checked=\"1\">
                                                <div class=\"centered\" bis_skin_checked=\"1\">
                                                    <img width=\"370\" height=\"280\" src=\"../public/img/popular_item_9.png\" class=\"attachment-500x300 size-500x300 wp-post-image\" alt=\"Software Development\" loading=\"lazy\" title=\"Software Development\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"1400\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"1600\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"1800\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"2000\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"2200\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"2400\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
                    <li data-aos=\"fade-up\"
            data-aos-duration=\"2600\" id=\"post-1026\" class=\"post-1026 lp_course type-lp_course status-publish has-post-thumbnail hentry course_category-computer-science course\">
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
            </div>
        </div>
    </div>
    <!-- courses part end -->

    <!-- course category part here -->
    <section class=\"course_category section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\" data-aos=\"fade-up\"
                data-aos-duration=\"1200\">
                    <div class=\"section_tittle\">
                        <h2>Browse Online <br>
                            Course Categories</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"row\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item pink\">
                                <img src=\"../public/img/icon/category_icon_1.png\" alt=\"#\">
                                <h4>Arts & Humanities</h4>
                                <p>10 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item\">
                                <img src=\"../public/img/icon/category_icon_2.png\" alt=\"#\">
                                <h4>Business</h4>
                                <p>15 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                        <a href=\"course-category.html\" class=\"single_category_item yellow\">
                            <img src=\"../public/img/icon/category_icon_3.png\" alt=\"#\">
                            <h4>Computer Science</h4>
                            <p>8 Courses</p>
                        </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item green\">
                                <img src=\"../public/img/icon/category_icon_4.png\" alt=\"#\">
                                <h4>Data Science</h4>
                                <p>20 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item green\">
                                <img src=\"../public/img/icon/category_icon_4.png\" alt=\"#\">
                                <h4>Language Learning</h4>
                                <p>30 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item yellow\">
                                <img src=\"../public/img/icon/category_icon_3.png\" alt=\"#\">
                                <h4>Math & Logic</h4>
                                <p>18 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item\">
                                <img src=\"../public/img/icon/category_icon_2.png\" alt=\"#\">
                                <h4>Technology</h4>
                                <p>3 Courses</p>
                            </a>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12\">
                            <a href=\"course-category.html\" class=\"single_category_item pink\">
                                <img src=\"../public/img/icon/category_icon_1.png\" alt=\"#\">
                                <h4>IT & Software</h4>
                                <p>3 Courses</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- course category part end --> 

    <!-- popular course part here -->
    <section class=\"popular_course section_padding section_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\" data-aos=\"fade-up\"
                data-aos-duration=\"1200\">
                    <div class=\"section_tittle\">
                        <h2>Explore our <br>
                            Popular Courses</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class=\"col-lg-12\">
                    <div class=\"row\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_1.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$16.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(120 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Computer Security & Network</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_1.jpeg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Dylan Meringue</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>10 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>120</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_2.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$30.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(140 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Data Analysis</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_2.jpg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Chauffina Carr</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>20 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>130</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_3.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$40.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(150 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Music & Art</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_3.jpg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Jason Response</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>30 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>100</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_4.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$50.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(135 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Business Strategy</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_4.png\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Justin Case</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>65 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>122</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_5.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$70.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(299 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>English Learning</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_1.jpeg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Hanson Deck</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>45 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>90</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_6.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$110.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(105 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Algebra & Calculus</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_2.jpg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Adam Smith</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>30 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>80</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_7.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$117.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(221 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>History & Philosophy</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_3.jpg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Hanson Deck</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>20 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>17</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_8.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$227.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(90 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Business Essentials</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_4.png\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Gunther Beard</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>25 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>28</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2800\" class=\"col-xl-4 col-lg-6 col-md-6 col-sm-12\">
                            <div class=\"single_courses_item\">
                                <a href=\"course-details.html\"><img src=\"../public/img/popular_item_9.png\" alt=\"#\" class=\"img-fluid\"></a>
                                <div class=\"courses_item_iner\">
                                    <div class=\"courses_review\">
                                        <a class=\"courses_btn\">\$90.00</a>
                                        <div class=\"review_icon\">
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                            <i class=\"icon_star\"></i>
                                        </div>
                                        <span>(177 Reviews)</span>
                                    </div>
                                    <a href=\"course-details.html\"><h4>Software Development</h4></a>
                                    <a href=\"teacher.html\" class=\"course_author\">
                                        <img src=\"../public/img/author_1.jpeg\" alt=\"#\">
                                    </a>
                                    <p class=\"author_name\"><a href=\"teacher.html\">Samuel Serif</a></p>
                                    <div class=\"popular_course_list\">
                                        <p><i class=\"icon_book_alt\"></i>50 Lessons</p>
                                        <p><i class=\"icon_profile\"></i>42</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- popular course part end -->

    <!-- instructor list part here -->
    <section class=\"instructor_list section_padding\" >
        <div class=\"container\">
            <div class=\"row justify-content-center\" data-aos=\"fade-up\"
            data-aos-easing=\"linear\"
            data-aos-duration=\"1200\">
                <div class=\"col-lg-6\">
                    <div class=\"section_tittle\">
                        <h2>Top Instructor</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\"
                data-aos-easing=\"linear\"
                data-aos-duration=\"800\">
                    <div class=\"single_instructor_item\">
                        <div class=\"single_instructor\">
                            <a class=\"instructor_img\">
                                <img src=\"../public/img/list_img/list_img_1.png\" alt=\"#\" class=\"img-fluid\">
                            </a>
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                            </div>
                        </div>
                        <div class=\"single_instructor_tittle\">
                            <h4>Adam Smith</h4>
                            <p>Web Designer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\"
                data-aos-easing=\"linear\"
                data-aos-duration=\"900\">
                    <div class=\"single_instructor_item\">
                        <div class=\"single_instructor\">
                            <a class=\"instructor_img\">
                                <img src=\"../public/img/list_img/list_img_2.png\" alt=\"#\" class=\"img-fluid\">
                            </a>
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                            </div>
                        </div>
                        <div class=\"single_instructor_tittle\">
                            <h4>John Doe</h4>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\"
                data-aos-easing=\"linear\"
                data-aos-duration=\"1000\">
                    <div class=\"single_instructor_item\">
                        <div class=\"single_instructor\">
                            <a class=\"instructor_img\">
                                <img src=\"../public/img/list_img/list_img_3.png\" alt=\"#\" class=\"img-fluid\">
                            </a>
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                            </div>
                        </div>
                        <div class=\"single_instructor_tittle\">
                            <h4>Mural Evan</h4>
                            <p>Web Application</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3 col-sm-6\" data-aos=\"fade-up\"
                data-aos-easing=\"linear\"
                data-aos-duration=\"1100\">
                    <div class=\"single_instructor_item\">
                        <div class=\"single_instructor\">
                            <a class=\"instructor_img\">
                                <img src=\"../public/img/list_img/list_img_4.png\" alt=\"#\" class=\"img-fluid\">
                            </a>
                            <div class=\"social_icon\">
                                <a href=\"#\"><i class=\"social_instagram\"></i></a>
                                <a href=\"#\"><i class=\"social_linkedin\"></i></a>
                                <a href=\"#\"><i class=\"social_twitter\"></i></a>
                                <a href=\"#\"><i class=\"social_facebook\"></i></a>
                            </div>
                        </div>
                        <div class=\"single_instructor_tittle\">
                            <h4>Jeffer Smith</h4>
                            <p>Analyzer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instructor list part end -->

    <!-- event part here -->
    <section class=\"event_list section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\" data-aos=\"fade-up\"
            data-aos-duration=\"1200\">
                <div class=\"col-lg-6\">
                    <div class=\"section_tittle\">
                        <h2>Our Upcoming Events</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing 
                        super arse over tit matie boy smashing. The little 
                        rotter off his nut codswallop.!</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-10\">
                    <div class=\"single_event_list\" data-aos=\"fade-up\" data-aos-duration=\"1200\">
                        <img src=\"../public/img/event_list_3.png\" alt=\"\" class=\"img-fluid\">
                        <div class=\"event_list_content\">
                            <h5>14 January, 2023 </h5>
                            <h2>Why you Need Advance Developmemt Process Course?</h2>
                            <div class=\"event_list_tag\">
                                <p><i class=\"icon_clock_alt\"></i>8.30 AM - 5.30 PM</p>
                                <p><i class=\"icon_pin_alt\"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div> 
                    <div class=\"single_event_list\" data-aos=\"fade-up\" data-aos-duration=\"1600\">
                        <img src=\"../public/img/event_list_2.png\" alt=\"\" class=\"img-fluid\">
                        <div class=\"event_list_content\">
                            <h5>14 January, 2023 </h5>
                            <h2>Graphic Illustration: Design with Color and Shape</h2>
                            <div class=\"event_list_tag\">
                                <p><i class=\"icon_clock_alt\"></i>8.30 AM - 5.30 PM</p>
                                <p><i class=\"icon_pin_alt\"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div> 
                    <div class=\"single_event_list\" data-aos=\"fade-up\" data-aos-duration=\"2000\">
                        <img src=\"../public/img/event_list_1.png\" alt=\"\" class=\"img-fluid\">
                        <div class=\"event_list_content\">
                            <h5>14 January, 2023 </h5>
                            <h2>Magazine Design Start to Finish: The Inside Pages</h2>
                            <div class=\"event_list_tag\">
                                <p><i class=\"icon_clock_alt\"></i>8.30 AM - 5.30 PM</p>
                                <p><i class=\"icon_pin_alt\"></i>9 Road, Mirpur Dohs, New York, USA</p>
                            </div>
                            <p>He lost his bottle bamboozled golly gosh some dodgy chav only a quid
                            my lady chip shop argy-bargy, the bee's knees morish loo get stuffed 
                            mate pardon me zonked knees.!</p>
                        </div>
                    </div>
                    <div class=\"event_list_btn\" data-aos=\"fade-up\"
                    data-aos-anchor-placement=\"top-center\">
                        <a href=\"events.html\" class=\"btn_3\">View All Events</a>
                    </div>
                    
                </div>
            </div>
        </div>
        <img src=\"../public/img/icon/shape_06.png\" alt=\"#\" class=\"about_sharp_1 custom-animation\">
        <img src=\"../public/img/icon/about_shape_02.png\" alt=\"#\" class=\"about_sharp_2 custom-animation2\">
        <img src=\"../public/img/icon/about_shape_03.png\" alt=\"#\" class=\"about_sharp_3 custom-animation3\">
        <img src=\"../public/img/icon/shape_04.png\" alt=\"#\" class=\"about_sharp_4 custom-animation4\">
        <img src=\"../public/img/icon/shape_05.png\" alt=\"#\" class=\"about_sharp_5 custom-animation5\">
    </section>
    <!-- event part end -->
    
    <!-- blog part here -->
    <section class=\"blog_posts section_padding\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"section_tittle\">
                        <h2>Our Latest Blog Posts</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing 
                        super arse over tit matie boy smashing. The little 
                        rotter off his nut codswallop.!</p>
                    </div>
                </div>
            </div>
            <div class=\"row justify-content-center\">
                <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post\">
                            <img src=\"../public/img/blog/blog_1.png\" alt=\"#\" class=\"img-fluid\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href=\"blog-details-right-sidebar.html\">Top 10 WordPress Themes for Local Businesses</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post\">
                            <img src=\"../public/img/blog/blog_2.png\" alt=\"#\" class=\"img-fluid\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href=\"blog-details-right-sidebar.html\">Business development ceremony for BBA student .</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post video_post\">
                            <div class=\"post_thumb\">
                                <img src=\"../public/img/blog/blog_3.png\" alt=\"#\" class=\"img-fluid\">
                                <a href=\"https://www.youtube.com/watch?v=x4q86IjJFag\" class=\"popup_youtube\">
                                <span class=\"flaticon-play-button\" ></span></a>
                             </div>
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href=\"blog-details-right-sidebar.html\">Top 10 WordPress Themes for Local Businesses</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post video_post\">
                            <img src=\"../public/img/blog/blog_4.png\" alt=\"#\" class=\"img-fluid\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href=\"blog-details-right-sidebar.html\">Best products for fitness nutrition and muscles</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_profile\"></i>Jim Séchen</p>
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <h2> <a href=\"blog-details-right-sidebar.html\">How to Become Master In CSS within a Week.</a> </h2>
                                <p>Twit cuppa Oxford car boot baking cakes I dropped a clanger 
                                cheeky bugger young delinquent say, hunky-dory ruddy butty matie
                                boy cheeky cup of char ummm I'm telling get stuffed mate owt to do 
                                with me blow.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"col-xl-6 col-lg-6 col-md-12 col-sm-12\">
                    <div class=\"blog_post_list\">
                        <div class=\"single_page_blog_post link_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <p>Cheeky bugger morish cack a mush wind tickety boo pear shaped my good sir, ruddy blatant say boot.!</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog part end -->

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
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "index-four.html";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "index-four.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/index-four.html");
    }
}
