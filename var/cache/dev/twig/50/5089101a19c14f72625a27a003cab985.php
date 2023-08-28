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

/* blog-right-sidebar.html */
class __TwigTemplate_763188b363b4c5967160c946b8107457 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog-right-sidebar.html"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
    <title>Blog Right Sidebar - Educational and Online Course HTML Website Template</title>  
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
                        <h2>Blog Right Sidebar</h2>
                        <div class=\"breadcrumb_iner_link\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"arrow_carrot-right\"></i>
                            <span>Blog Right Sidebar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog right sidebar part here -->
    <section class=\"blog_page section_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"blog_post_list\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"single_page_blog_post quote_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <p>My lady the bee's knees cack bog-standard mush A bit of 
                                how's your father, bits and bobs off his nut Oxford crikey the BBC, chinwag 
                                a blinding shot pardon me bleeding.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i></a>
                                <img src=\"../public/img/icon/quote_1.png\" alt=\"#\" class=\"quote_icon_1\">
                                <img src=\"../public/img/icon/quote_2.png\" alt=\"#\" class=\"quote_icon_2\">
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"single_page_blog_post video_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"single_page_blog_post link_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <p>Cheeky bugger morish cack a mush wind tickety boo pear shaped my good sir, ruddy blatant say boot.!</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i></a>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"single_page_blog_post video_post\">
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
                    <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"page_pageination justify-content-start\">
                        <a class=\"current\" href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\"> <i class=\"arrow_right\"></i> </a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_sidebar right-sidebar\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_sidebar\">
                            <form action=\"#\" class=\"search_form\">
                                <input type=\"text\" name=\"#\" placeholder=\"Search...\">
                                <i class=\"icon_search\"></i>
                            </form>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"single_sidebar\">
                            <h3>Latest Posts</h3>
                            <div class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_1.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\"> How to Become Master In CSS within a Week.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_2.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\">Top 20 WordPress Themes for Local Businesses.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_3.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\">Students work together to solve a problem.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_4.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\"> Research of Learn training process.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"single_sidebar\">
                            <h3>Categories</h3>
                            <div class=\"category_list\">
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>App Design  (4)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Logo Design  (6)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Busness  (10)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>IT & Software  (14)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Programming  (12)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Technology  (10)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Music  (8)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Creative  (9)</a> </p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"single_sidebar\">
                            <h3>Tags</h3>
                            <div class=\"sidebar_tag_list\">
                                <a href=\"#\" class=\"btn_4\">Education</a>
                                <a href=\"#\" class=\"btn_4\">Web Design</a>
                                <a href=\"#\" class=\"btn_4\">Food</a>
                                <a href=\"#\" class=\"btn_4\">Cooling System </a>
                                <a href=\"#\" class=\"btn_4\">Amazing</a>
                                <a href=\"#\" class=\"btn_4\">Software</a>
                                <a href=\"#\" class=\"btn_4\">Landing</a>
                                <a href=\"#\" class=\"btn_4\">Clean</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog right sidebar part end -->

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
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "blog-right-sidebar.html";
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
    <title>Blog Right Sidebar - Educational and Online Course HTML Website Template</title>  
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
                        <h2>Blog Right Sidebar</h2>
                        <div class=\"breadcrumb_iner_link\">
                            <a href=\"index.html\">Home</a>
                            <i class=\"arrow_carrot-right\"></i>
                            <span>Blog Right Sidebar</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end -->

    <!-- blog right sidebar part here -->
    <section class=\"blog_page section_padding\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8\">
                    <div class=\"blog_post_list\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_page_blog_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"single_page_blog_post quote_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <p>My lady the bee's knees cack bog-standard mush A bit of 
                                how's your father, bits and bobs off his nut Oxford crikey the BBC, chinwag 
                                a blinding shot pardon me bleeding.</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i></a>
                                <img src=\"../public/img/icon/quote_1.png\" alt=\"#\" class=\"quote_icon_1\">
                                <img src=\"../public/img/icon/quote_2.png\" alt=\"#\" class=\"quote_icon_2\">
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"single_page_blog_post video_post\">
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
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"single_page_blog_post link_post\">
                            <div class=\"single_blog_content\">
                                <div class=\"post_author\">
                                    <p><i class=\"icon_clock_alt\"></i>October 14, 2023</p>
                                </div>
                                <p>Cheeky bugger morish cack a mush wind tickety boo pear shaped my good sir, ruddy blatant say boot.!</p>
                                <a href=\"blog-details-right-sidebar.html\" class=\"read_more_btn\">Read More <i class=\"arrow_right\"></i></a>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"single_page_blog_post video_post\">
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
                    <div data-aos=\"fade-up\"
            data-aos-duration=\"2600\" class=\"page_pageination justify-content-start\">
                        <a class=\"current\" href=\"#\">1</a>
                        <a href=\"#\">2</a>
                        <a href=\"#\"> <i class=\"arrow_right\"></i> </a>
                    </div>
                </div>
                <div class=\"col-lg-4\">
                    <div class=\"blog_sidebar right-sidebar\">
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1200\" class=\"single_sidebar\">
                            <form action=\"#\" class=\"search_form\">
                                <input type=\"text\" name=\"#\" placeholder=\"Search...\">
                                <i class=\"icon_search\"></i>
                            </form>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"1400\" class=\"single_sidebar\">
                            <h3>Latest Posts</h3>
                            <div class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_1.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\"> How to Become Master In CSS within a Week.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"1600\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_2.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\">Top 20 WordPress Themes for Local Businesses.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"1800\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_3.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\">Students work together to solve a problem.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                            <div data-aos=\"fade-up\"
            data-aos-duration=\"2000\" class=\"single_sidebar_post\">
                                <img src=\"../public/img/category_post/post_4.png\" alt=\"\">
                                <div class=\"sidebar_post_content\">
                                    <h4> <a href=\"blog-details-right-sidebar.html\"> Research of Learn training process.</a></h4>
                                    <p>April 12, 2023</p>
                                </div>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2200\" class=\"single_sidebar\">
                            <h3>Categories</h3>
                            <div class=\"category_list\">
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>App Design  (4)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Logo Design  (6)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Busness  (10)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>IT & Software  (14)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Programming  (12)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Technology  (10)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Music  (8)</a> </p>
                                <p> <a href=\"#\"><i class=\"arrow_carrot-right\"></i>Creative  (9)</a> </p>
                            </div>
                        </div>
                        <div data-aos=\"fade-up\"
            data-aos-duration=\"2400\" class=\"single_sidebar\">
                            <h3>Tags</h3>
                            <div class=\"sidebar_tag_list\">
                                <a href=\"#\" class=\"btn_4\">Education</a>
                                <a href=\"#\" class=\"btn_4\">Web Design</a>
                                <a href=\"#\" class=\"btn_4\">Food</a>
                                <a href=\"#\" class=\"btn_4\">Cooling System </a>
                                <a href=\"#\" class=\"btn_4\">Amazing</a>
                                <a href=\"#\" class=\"btn_4\">Software</a>
                                <a href=\"#\" class=\"btn_4\">Landing</a>
                                <a href=\"#\" class=\"btn_4\">Clean</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog right sidebar part end -->

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
    <!-- custom js -->
    <script src=\"../public/js/custom.js\"></script>
</body>

</html>
", "blog-right-sidebar.html", "/Users/admin/Desktop/panellhnies/panellhnies/templates/blog-right-sidebar.html");
    }
}
