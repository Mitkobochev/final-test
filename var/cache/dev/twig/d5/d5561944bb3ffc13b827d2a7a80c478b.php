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

/* course-slider.html */
class __TwigTemplate_192ccaf197f13488d8560504ae02f93f extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "course-slider.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Course Slider - Educational and Online Course HTML Website Template</title>  
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

    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_grid_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div class=\"breadcrumb_iner\">
                        <h2>Course Slider</h2>
                        <div class=\"breadcrumb_iner_link\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"arrow_carrot-right\"></i>
                            <span>Course Slider</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    
    <!-- popular course part here -->
    <section class=\"popular_course section_padding section_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\" data-aos=\"fade-up\"
                data-aos-duration=\"1500\">
                    <div class=\"section_tittle\">
                        <h2>Explore our <br>
                            Popular Courses</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class=\"col-lg-12\" data-aos=\"fade-up\"
                data-aos-duration=\"1200\">
                    <div class=\"popular_courses_item owl-carousel\">
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
    </section>
    <!-- popular course part end -->

    <!-- cta part here -->
    <section class=\"cta_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"cta_part_iner\">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cta_btn\">
                        <a href=\"course-list.html\" class=\"btn_3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"circle_shape_1\"></div>
        <div class=\"circle_shape_2\"></div>
    </section>
    <!-- cta part end -->
    
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
        return "course-slider.html";
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
    <title>Course Slider - Educational and Online Course HTML Website Template</title>  
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

    <!-- breadcrumb part -->
    <section class=\"breadcrumb_part blog_grid_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6 \">
                    <div class=\"breadcrumb_iner\">
                        <h2>Course Slider</h2>
                        <div class=\"breadcrumb_iner_link\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"arrow_carrot-right\"></i>
                            <span>Course Slider</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->
    
    <!-- popular course part here -->
    <section class=\"popular_course section_padding section_bg\">
        <div class=\"container\">
            <div class=\"row justify-content-center\">
                <div class=\"col-lg-6\" data-aos=\"fade-up\"
                data-aos-duration=\"1500\">
                    <div class=\"section_tittle\">
                        <h2>Explore our <br>
                            Popular Courses</h2>
                        <p>Jeffrey crikey victoria sponge mush spiffing super arse over 
                        tit matie boy smashing. The little rotter off his nut codswallop.!</p>
                    </div>
                </div>
                <div class=\"col-lg-12\" data-aos=\"fade-up\"
                data-aos-duration=\"1200\">
                    <div class=\"popular_courses_item owl-carousel\">
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
    </section>
    <!-- popular course part end -->

    <!-- cta part here -->
    <section class=\"cta_part section_padding\">
        <div class=\"container\">
            <div class=\"row align-items-center\">
                <div class=\"col-lg-8\">
                    <div class=\"cta_part_iner\">
                        <h2>Best teachers in every subject. <br>
                            Let’s get started</h2>
                        <p>We can teach you anything</p>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"cta_btn\">
                        <a href=\"course-list.html\" class=\"btn_3\">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"circle_shape_1\"></div>
        <div class=\"circle_shape_2\"></div>
    </section>
    <!-- cta part end -->
    
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
", "course-slider.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/course-slider.html");
    }
}
